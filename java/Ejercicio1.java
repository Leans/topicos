/**
 * Inicializa variables a y b, Imprime el resultado de operaciones entre a y b.
 * 
 * @author Sabaren, Leandro N. 
 * @version (a version number or a date)
 */

public class Ejercicio1
{
    public static void main (String [] args){
        int a = 8;
        int b = 3;
        int suma = a + b;
        int resta = a - b;
        int producto = a * b;
        double cociente = a / (double) b;
        int resto = a % b;
        System.out.println("Suma: "+suma);
        System.out.println("Resta: "+resta);
        System.out.println("Producto: "+producto);
        System.out.println("Cociente: "+cociente);
        System.out.println("Resto: "+resto);
    }
}

