/*
 * Copyright (c) 2012, Codename One and/or its affiliates. All rights reserved.
 * DO NOT ALTER OR REMOVE COPYRIGHT NOTICES OR THIS FILE HEADER.
 * This code is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License version 2 only, as
 * published by the Free Software Foundation.  Codename One designates this
 * particular file as subject to the "Classpath" exception as provided
 * by Oracle in the LICENSE file that accompanied this code.
 *  
 * This code is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License
 * version 2 for more details (a copy is included in the LICENSE file that
 * accompanied this code).
 * 
 * You should have received a copy of the GNU General Public License version
 * 2 along with this work; if not, write to the Free Software Foundation,
 * Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA.
 * 
 * Please contact Codename One through http://www.codenameone.com/ if you 
 * need additional information or have any questions.
 */
package com.pidev.template;

import com.codename1.components.ScaleImageLabel;
import com.codename1.components.Switch;
import com.codename1.components.ToastBar;
import com.codename1.ui.*;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;

import static com.codename1.ui.CN.*;
import com.codename1.ui.layouts.GridLayout;
import static com.codename1.ui.util.Resources.getGlobalResources;
import com.pidev.gui.AjouterFormation;
/**
 * Class that demonstrate the usage of the Toolbar component.
 * Toolbar replaces the default title area with a powerful abstraction that allows functionality
 * ranging from side menus (hamburger) to title animations and any arbitrary component type.
 * Toolbar allows customizing the Form title with different commands on the title area, within the side menu or the overflow menu.
 *
 * @author Sergey Gerashenko.
 */
public class ToolbarDemo extends Demo{
        Form current;

   
    public ToolbarDemo(Form parentForm) {
       
        init("Réclamation", getGlobalResources().getImage("toolbar-demo.png"), parentForm,
                "https://github.com/codenameone/KitchenSink/blob/master/src/com/codename1/demos/kitchen/ToolbarDemo.java");
    }

    @Override
    public Container createContentPane() {
        
        Form toolBarForm = new Form("Réclamation", new BorderLayout());
        toolBarForm.getContentPane().setUIID("ComponentDemoContainer");
        Toolbar tb = toolBarForm.getToolbar();
        tb.setUIID("DemoToolbar");
        tb.getTitleComponent().setUIID("DemoTitle");
        tb.addSearchCommand(callBack->{
            String text = (String)callBack.getSource();
            // Update the UI depending on the text.
        });



        Form lastForm = Display.getInstance().getCurrent();
        Button backButton = new Button("Envoyer une réclamation", "DemoButton");
                 current=lastForm; 
        backButton.addActionListener(e-> new AjouterFormation(current).show());

        Button listButton = new Button("Liste des réclammations", "DemoButton");
    
        toolBarForm.add(BorderLayout.NORTH,backButton);
        toolBarForm.add(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE,listButton);


        toolBarForm.show();
        return null;
    }
}
