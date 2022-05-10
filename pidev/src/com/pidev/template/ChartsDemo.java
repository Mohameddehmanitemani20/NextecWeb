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

import com.codename1.components.SpanLabel;
import com.codename1.demos.kitchen.charts.*;

import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;

import static com.codename1.ui.CN.getCurrentForm;
import static com.codename1.ui.util.Resources.getGlobalResources;
import java.util.ArrayList;

/**
 * Class that demonstrate the usage of the Chart components. The charts package
 * enables Codename One developers to add charts and visualizations to their
 * apps without having to include external libraries or embedding web views.
 *
 * @author Sergey Gerashenko.
 */
public class ChartsDemo extends Demo {

    public ChartsDemo(Form parentForm) {
        init("Promotions", getGlobalResources().getImage("charts-demo-icon.png"), parentForm,
                "https://github.com/codenameone/KitchenSink/blob/master/src/com/codename1/demos/kitchen/ChartsDemo.java");
    }

    @Override
    public Container createContentPane() {
        Container demoContainer = new Container(new BoxLayout(BoxLayout.Y_AXIS), "DemoContainer");

        demoContainer.setScrollableY(true);
    /*ArrayList<Avis> avis;
    SpanLabel sp = new SpanLabel();
        sp.setText(AvisService.getInstance().getAllAvis().toString());
        
        demoContainer.add(sp);*/

       
        return demoContainer;
    }

    private void showChart(AbstractDemoChart demo) {
        Form chartForm = new Form(demo.getChartTitle(), new BorderLayout());
        Toolbar toolbar = chartForm.getToolbar();
        toolbar.setUIID("DemoToolbar");
        toolbar.getTitleComponent().setUIID("ComponentDemoTitle");

        Form lastForm = getCurrentForm();
        Command backCommand = Command.create("", FontImage.createMaterial(FontImage.MATERIAL_ARROW_BACK, lastForm.getUIManager().getComponentStyle("DemoTitleCommand")),
                e -> lastForm.showBack());

        toolbar.setBackCommand(backCommand);
        chartForm.add(BorderLayout.CENTER, demo.execute());
        chartForm.getContentPane().setUIID("ComponentDemoContainer");
        chartForm.show();
    }
}
