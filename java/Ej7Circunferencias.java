import java.util.Scanner;

/**
 * Recibe el radio de circunferencias; Imprime el perimetro hasta que el usuario disponga. 
 *
 * @author Sabaren, Leandro N. 
 * @version (a version number or a date)
 */
public class Ej7Circunferencias
{
    public static void main (String[] args) {
        int r = 1;
        Scanner sc = new Scanner(System.in);
        while(r >= 0) {
                System.out.print("Introduzca su radio(negativo para detenerse): ");
                r = sc.nextInt();
                if (r >= 0) {
                    System.out.println("Perimetro: " + (Math.PI*(Math.pow(r, 2))));
                }
        }
   }
}