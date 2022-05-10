/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.pidev.gui;

import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.spinner.Picker;
import com.pidev.entities.Formation;
import com.pidev.services.ServiceFormation;

import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;

/**
 *
 * @author pc
 */
public class AjouterFormation  extends Form{
    public AjouterFormation(Form previous) {
        setTitle("Ajouter Une formation");
        setLayout(BoxLayout.y());
        
        TextField tfName = new TextField("","NomFormation");tfName.getAllStyles().setBgColor(123456);
tfName.getAllStyles().setFgColor(000000);
        
        ComboBox<String> dispo =new   ComboBox<String> ("Presentiel","En_Ligne") ;
                        dispo.getAllStyles().setFgColor(000000);

              //TextField tfdispo = new TextField("","Dispositif");
        Picker tfdebut = new Picker();
        tfdebut.getAllStyles().setFgColor(000000);

        Picker tffin = new Picker();
                tffin.getAllStyles().setFgColor(000000);

      //  TextField tfprog = new TextField("","Programme");
        TextField tfprog = new TextField("", "Programme", 20, TextArea.ANY);
tfprog.getAllStyles().setFgColor(000000);

        Button btnValider = new Button("Ajouter Formation");
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfName.getText().length()==0)||(tfprog.getText().length()==0) || dispo.getSelectedItem().equals(""))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                    try {
                           //  DateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
/*Date date = formatter.parse(tfdebut.toString());
Date date1 = formatter.parse(tffin.toString());
String pattern = "yyyy-MM-dd";
SimpleDateFormat simpleDateFormat = new SimpleDateFormat(pattern);*/
//String pattern = "yyyy-MM-dd";
//SimpleDateFormat simpleDateFormat = new SimpleDateFormat(pattern);

//Date date = simpleDateFormat.parse("2018-09-09");
                        Formation t = new Formation(tfName.getText().toString(),tfdebut.getDate(),tffin.getDate(),dispo.getSelectedItem(),tfprog.getText().toString());
                      ServiceFormation.getInstance().addFormation(t);
                        
                           Dialog.show("Success","Connection accepted",new Command("OK"));
                   
                    } catch (Exception e) {
                        Dialog.show("ERROR", "error", new Command("OK"));
                    }
                    
                }
                
                
            }
        });
        
        addAll(tfName,dispo,tfdebut,tffin,tfprog,btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
                
    }
}
