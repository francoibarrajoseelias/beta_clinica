/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.mycompany.practicasingleton;

/**
 * 
 * @author Sammy Guergachi <sguergachi at gmail.com>
 */
public class Periodico implements IPublicacion {

    public String Titulo;
    public String fecha;

    public Periodico(String Titulo, String fecha) {
        this.Titulo = Titulo;
        this.fecha = fecha;
    }

    public String getTitulo() {
        return Titulo;
    }

    public void setTitulo(String Titulo) {
        this.Titulo = Titulo;
    }

    public String getFecha() {
        return fecha;
    }

    public void setFecha(String fecha) {
        this.fecha = fecha;
    }
    
    
}
