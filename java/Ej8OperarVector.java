import java.util.Scanner;

/**
 * Recibe 5 notas; Almacena en vector; Imprime los elementos ingresados, la nota mayor y el promedio.
 * 
 * @author Sabaren, Leandro N. 
 * @version (a version number or a date)
 */
public class Ej8OperarVector
{   
   public static void main (String[] args) {
       Scanner sc = new Scanner(System.in);
       //sc.useDelimiter("/n");
       
       int [] notas = new int[5];   //vector de notas
       int ac = 0;  //acumulador
       int nm = Integer.MIN_VALUE;  //nota mayor
       double p;
       
       System.out.println("Introduzca las notas");
       
       for(int i = 0; i < 5; i++) {
           notas[i] = sc.nextInt();
           if (nm < notas[i]) {
               nm = notas[i];
           }
       }
       
       for(int j = 0; j < 5; j++) {
           System.out.print(notas[j]+"\t");
           ac = ac + notas[j];
       }
       
       p = ((double) ac / 5);
       System.out.print("Nota mayor: "+nm+"\t");
       System.out.println("Promedio: "+p);
       
   }
}
