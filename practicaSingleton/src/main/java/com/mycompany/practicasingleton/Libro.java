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
public class Libro implements IPublicacion{

    public String Titulo;
    public String Editorial;
    public int Anio;

    public Libro(String Titulo, String Editorial, int Anio) {
        this.Titulo = Titulo;
        this.Editorial = Editorial;
        this.Anio = Anio;
    }

    public String getTitulo() {
        return Titulo;
    }

    public void setTitulo(String Titulo) {
        this.Titulo = Titulo;
    }

    public String getEditorial() {
        return Editorial;
    }

    public void setEditorial(String Editorial) {
        this.Editorial = Editorial;
    }

    public int getAnio() {
        return Anio;
    }

    public void setAnio(int Anio) {
        this.Anio = Anio;
    }
    
    
    
}
