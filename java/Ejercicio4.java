
/**
 * Recibe lados de un triangulo a, b y c; Imprime semiperimetro y area.
 * 
 * @author Sabaren, Leandro N. 
 * @version (a version number or a date)
 */
public class Ejercicio4
{
   public static void main (String[] args) {
        double a = Double.parseDouble(args [0]);
        double b = Double.parseDouble(args [1]);
        double c = Double.parseDouble(args [2]);
        if ((a > 0) & (b > 0) & (c > 0)) {
            double s = ((a + b + c) / 2);
            double area = (Math.sqrt(s * (s - a) * (s - b) * (s - c)));
            System.out.println("Semiperimetro = "+s);
            System.out.println("Area = "+area);
        }
        else {
            System.out.println("Error: magnitud nula o negativa");
        }
    }
}
