
/**
 * Recibe los lados de un triangulo a b y c; Imprime si se trata de un triangulo rectangulo o no.
 * 
 * @author Sabaren, Leandro N. 
 * @version (a version number or a date)
 */
public class Ej6TrianguloRectangulo
{
    public static void main (String[] args) {
        double a = Double.parseDouble(args [0]);
        double b = Double.parseDouble(args [1]);
        double c = Double.parseDouble(args [2]);
        if (Math.pow(a, 2) == (Math.pow(b, 2) + Math.pow(c, 2))) {
            System.out.println("El triangulo es rectangulo");
        }
        else {
            System.out.println("El triangulo No es rectangulo");
        }
    }
}
