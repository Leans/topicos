
/**
 * Recibe el radio de circunferencia; Imprime el perimetro de dicha circunferencia.
 * 
 * @author Sabaren, Leandro N. 
 * @version (a version number or a date)
 */
public class Ej3Circunferencia
{
   public static void main(String[] args) {
       int r = Integer.valueOf(args[0]);
       double perimetro = (Math.PI*(Math.pow(r, 2)));
       if (r >= 0) {
           System.out.println("Perimetro de circunferencia de radio "+r+" = "+perimetro);
       }
        else {
            System.out.println("Error: radio negativo");
       }
    }
}
