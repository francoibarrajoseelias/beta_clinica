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
public class Revista implements IPublicacion{

    public int Anio;
    public String Mes;
    public String Titulo;

    public Revista(int Anio, String Mes, String Titulo) {
        this.Anio = Anio;
        this.Mes = Mes;
        this.Titulo = Titulo;
    }

    public int getAnio() {
        return Anio;
    }

    public void setAnio(int Anio) {
        this.Anio = Anio;
    }

    public String getMes() {
        return Mes;
    }

    public void setMes(String Mes) {
        this.Mes = Mes;
    }

    public String getTitulo() {
        return Titulo;
    }

    public void setTitulo(String Titulo) {
        this.Titulo = Titulo;
    }
            
    
}
