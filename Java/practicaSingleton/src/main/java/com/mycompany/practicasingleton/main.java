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
public class main {

    public static void main(String[] args) {
        System.out.println("Hola mundo");
        Biblioteca tecnologia = Biblioteca.getInstance();
        PublicacionFactory fabrica = new PublicacionFactory();
    }
    
}
