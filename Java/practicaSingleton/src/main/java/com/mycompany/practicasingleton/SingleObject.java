/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.practicasingleton;

/**
 *
 * @author Carlos
 */
public class SingleObject {
    private static SingleObject Instance=null;
    /*
    String nombre;
    String direccion;
    int telefono;
    */
    
    Biblioteca biblioteca;
    private  SingleObject() {
    }
    
    public static SingleObject getInstance()
    {
        if (Instance==null)
            Instance=new SingleObject();
        return Instance;
    }

    public Biblioteca getBiblioteca() {
        return biblioteca;
    }

    public void setBiblioteca(Biblioteca biblioteca) {
        this.biblioteca = biblioteca;
    }

    @Override
    public String toString() {
        return "SingleObject{" + "biblioteca=" + biblioteca + '}';
    }

   
    
    
}
