
/**
 * Recibe los coeficientes a, b y c; Imprime las raices de una ecuacion de segundo orden con dichos coeficientes.
 * 
 * @author Sabaren, Leandro N. 
 * @version (a version number or a date)
 */
public class Ej5Ecuacion
{
   public static void main (String[] args) {
        double a = Double.parseDouble(args[0]);
        double b = Double.parseDouble(args[1]);
        double c = Double.parseDouble(args[2]);
        if (a == 0) {
            System.out.println("Error: division por cero");
        }
        else if ((Math.pow(b, 2) - 4 * a * c) == 0) {
            double r1 = ((-b) / (2 * a));
            System.out.println("Raiz 1 = Raiz 2 = "+r1);
             }
        else if ((Math.pow(b, 2) - 4 * a * c) > 0) {
                double r1 = (((-b)+(Math.pow(b, 2) - 4 * a * c)) / (2 * a));
                System.out.println("Raiz 1 = "+r1);
                double r2 = (((-b)-(Math.pow(b, 2) - 4 * a * c)) / (2 * a));
                System.out.println("Raiz 2 = "+r2);
            }
             else System.out.println("Raices complejas");
    }
}
