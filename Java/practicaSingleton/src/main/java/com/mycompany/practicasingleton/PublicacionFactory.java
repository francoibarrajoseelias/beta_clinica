/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.mycompany.practicasingleton;


public class PublicacionFactory {

    public IPublicacion getPublicacion(String tipoPublicacion,String titulo, String mes, int anio, String editorial, String fecha) {
        switch (tipoPublicacion) {
            case "Revista":
                return new Revista(anio, mes, titulo);
            case "Libro":
                return new Libro(titulo, editorial, anio);
            case "Periodica":
                return new Periodico(titulo,fecha);
            default: return null;
        }

    }
}
