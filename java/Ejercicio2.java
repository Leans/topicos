
/**
 * Imprime los numeros multiplos de 4 del 42 al 150.
 * 
 * @author Sabaren, Leandro N.
 * @version (a version number or a date)
 */
public class Ejercicio2
{
   public static void main (String [] args){
        System.out.println("Multiplos de 4 del 42 al 150");
        for (int a = 42; a <= 150; a++) {
            if ((a % 4) == 0){
                System.out.println(a);
            }
        }
    }
}
