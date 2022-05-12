/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompagny.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.messaging.Message;
import com.codename1.ui.events.ActionListener;

import com.compagny.myapp.utils.Statics;
import com.mycompagny.myapp.entities.Avis;
import java.io.IOException;
import java.util.Date;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class Service {

    public ArrayList<Avis> Avis;

    public static Service instance = null;
    public boolean resultOK;
    private ConnectionRequest req;

    public Service() {
        req = new ConnectionRequest();
    }

    public static Service getInstance() {
        if (instance == null) {
            instance = new Service();
        }
        return instance;
    }

    public ArrayList<Avis> parseActivites(String jsonText) {
        try {

            System.out.println(jsonText);
            Avis = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");

            for (Map<String, Object> obj : list) {
                Avis a = new Avis();

                float id = Float.parseFloat(obj.get("idAvis").toString());
                float note = Float.parseFloat(obj.get("note").toString());

                float idUser = Float.parseFloat(obj.get("idUser").toString());
                a.setIdAvis((int) id );
                a.setNote((int) note);
                a.setIdUser((int) idUser);
                Avis.add(a);

            }

        } catch (IOException ex) {
            ex.printStackTrace();

        }
        return Avis;
    }

    public ArrayList<Avis> getAllActivites() {
        String url = Statics.BASE_URL + "avis/avisJSON";
        req.setUrl(url);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Avis = parseActivites(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        req.setFailSilently(true);
        NetworkManager.getInstance().addToQueueAndWait(req);

        return Avis;
    }

    /*   public ArrayList<Activite> getUser(int id){
        String url = Statics.BASE_URL+"/activite/mobile/?id_a="+id;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                activites = parseActivites(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return activites;
    }
     */
    public boolean AddAvis(Avis u) {
        String url = Statics.BASE_URL + "avis/addavisJSON?note=" + u.getNote() + "&idUser=" + u.getIdUser(); //création de l'URL
        //  String url = Statics.BASE_URL + "create";
        req.setUrl(url);
        req.addResponseListener((e) -> {
            resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
            String str = new String(req.getResponseData());
            System.out.println("data" + str);
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    /*
            public boolean editActivite(Activite u) {
                String ch= "0308ab928edd715bd261ef1af50e0b91.jpeg";
        String url = Statics.BASE_URL + "/activite/UpdateActiviteJSON?id_a="+u.getId_a()+"&nom_a="+u.getNom_a()+"&cat_age="+u.getCat_age()+"&image="+ch+"&id_enfant="+11; //création de l'URL
               req.setUrl(url);
               System.out.println(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
            
             public boolean deleteActivite(int id_a) {
        String url = Statics.BASE_URL + "/activite/DeleteActiviteJSON?id_a=" + id_a;
               req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }*/
}
