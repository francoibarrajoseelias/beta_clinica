/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.mycompany.practicasingleton;

import java.util.ArrayList;

/**
 * 
 * @author Sammy Guergachi <sguergachi at gmail.com>
 */
public class Biblioteca {
    
    public String nombre;
    public String direccion;
    public int telefono;
    ArrayList <IPublicacion> lista;
    private static Biblioteca Instance=null;

    private Biblioteca() {
        this.nombre = "Biblioteca Tecnologia";
        this.direccion = "Regimiento Campos 6 de Infanteria, Sucre";
        this.telefono =  46456515;
        this.lista = new ArrayList<IPublicacion>();
    }

    public static Biblioteca getInstance()
    {
        if (Instance==null)
            Instance=new Biblioteca();
        return Instance;
    }
    
    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    public int getTelefono() {
        return telefono;
    }

    public void setTelefono(int telefono) {
        this.telefono = telefono;
    }
    
    public void insertarPublicacion(IPublicacion publicacion){
        lista.add(publicacion);
    }
    
    public void mostrarPublicacion(){
        for(IPublicacion publicacion: lista){
            System.out.println(publicacion);
        }
    }
    
    public void mostrarDatos(){
        System.out.println("Nombre: "+ this.nombre);
        System.out.println("Direccion: "+ this.direccion );
        System.out.println("Telefono: "+ this.telefono);
    }
}
