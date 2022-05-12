/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompagny.myapp.entities;

/**
 *
 * @author Yassine
 */
public class Avis {
    
    private int idAvis;
    private int note;
    private int idUser;

    public Avis() {
    }

    public Avis(int note, int idUser) {
        this.note = note;
        this.idUser = idUser;
    }

    public Avis(int idAvis, int note, int idUser) {
        this.idAvis = idAvis;
        this.note = note;
        this.idUser = idUser;
    }

    public int getIdAvis() {
        return idAvis;
    }

    public void setIdAvis(int idAvis) {
        this.idAvis = idAvis;
    }

    public int getNote() {
        return note;
    }

    public void setNote(int note) {
        this.note = note;
    }

    public int getIdUser() {
        return idUser;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }

    @Override
    public String toString() {
        return "Plat{" + "idAvis=" + idAvis + ", note=" + note + ", idUser=" + idUser + '}';
    }
    
    
    

   

    
  
    
}
