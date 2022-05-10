/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.pidev.gui;

import com.codename1.components.SpanLabel;
import com.codename1.ui.BrowserComponent;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.codename1.uikit.materialscreens.SideMenuBaseForm;
import com.pidev.entities.Formation;
import com.pidev.services.ServiceFormation;
import java.util.ArrayList;
import java.util.Date;

/**
 *
 * @author pc
 */
public class Participer  extends Form {
     public Participer(Form previous) {
        setTitle("Liste des formations");
        String[] abc = new String[] {"A", "B", "C"};
         Container list = new Container(BoxLayout.y());
list.setScrollableY(true);

      ServiceFormation f=new ServiceFormation();
     //  f.getAllFormations();
       SpanLabel sp = new SpanLabel();
         ArrayList<Formation> l=f.getAllFormations();
       //  System.out.println(l);
         for (int i=0;i<l.size();i++)
         {             Date d=l.get(i).getDate_debut();

             Date d1=l.get(i).getDate_fin();
             int nb =l.get(i).getId_formation();
             String s =l.get(i).getNom_formation();
                          String s1 =l.get(i).getDate_debut().toString();
             String s2 =l.get(i).getDate_fin().toString();
             String s3 =l.get(i).getDispositif();
             String s4 =l.get(i).getProgramme();

          Container list1 = new Container(BoxLayout.x());
            Button b = new Button("Partciper");
          //     Button b1 = new Button("update");
                 b.addPointerPressedListener(new ActionListener() {
                          
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                         

                            try {
                                f.participerformation(nb, 18);
                                Dialog.show("Success", "vous êtes participé à"+s,new Command("OK"));
                     
                        } catch (Exception ex) {
                            System.out.println(ex.getMessage());
                        }
                       
                                              refreshTheme();

                    }
                });
                 Button b1=new Button("PDF");

 b1.addPointerPressedListener(new ActionListener() {
                          
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                  

                            try {
                                
                                
                                
                                
                              		//Desktop desktop = java.awt.Desktop.getDesktop();

                                   f.PDFFormation(nb); 
                          //       BrowserComponent browser = new BrowserComponent();
         //   browser.setURLHierarchy( "http://127.0.0.1:8000/"+"formation/pdfJSON/"+nb+"/");

                                   Form hi = new Form("Browser", new BorderLayout());
BrowserComponent browser = new BrowserComponent();
browser.setURL("http://127.0.0.1:8000/"+"formation/pdfJSON/"+nb+"/");
hi.add(BorderLayout.CENTER, browser);
hi.show();
                        } catch (Exception ex) {
                            System.out.println(ex.getMessage());
                        }
                       
                                              refreshTheme();

                    }
                });

                 
                                  Button b2=new Button("Commenter");

                 
                 
              b2.addPointerPressedListener(new ActionListener() {
                          
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                  

                            try {
                                
                                
                                
                  
                        } catch (Exception ex) {
                            System.out.println(ex.getMessage());
                        }
                       
                                              refreshTheme();

                    }
                });

                 
                 
                  list1.addAll(b,b1,b2);
             Label lab=new Label(l.get(i).getNom_formation());
            list.addAll(lab,list1);
   // b.addActionListener(e -> f.deleteformation(l.get(i).g));
         
         }
         
         
       // sp.setText(f.getAllFormations().toString());
        add(sp);
         add(list);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }

 
}
