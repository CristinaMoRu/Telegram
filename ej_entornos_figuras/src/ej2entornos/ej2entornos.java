package ej2entornos;

import java.util.Scanner;

public class ej2entornos {

	public static void main(String[] args) {

		Scanner teclado=new Scanner(System.in);
		int numero=-1;

		System.out.println("Introduce un numero: ");

		numero=teclado.nextInt();
		if( numero>1){
			for(int i=0; i<=numero;i++){
				if (i % 2 !=0){
					//Imprime los impares hasta "numero"
					System.out.println(i);
				}
			}

		}
	}

}
