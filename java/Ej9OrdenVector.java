import java.util.Scanner;

/**
 * Recibe 4 elementos; Almacena en vector; Imprime el vector ordenado de menor a mayor, y el menor elemento.
 * 
 * @author Sabaren, Leandro N. 
 * @version (a version number or a date)
 */
public class Ej9OrdenVector {
    public static void main (String[] args) {
        Scanner sc = new Scanner(System.in);
        //sc.useDelimiter("\n");
       
        double [] elementos = new double[4];                //vector de elementos
        
        System.out.println("Introduzca 4 elementos");
        
        for(int x = 0; x < 4; x++) {                        //cargar vector
           elementos[x] = sc.nextDouble();
        }
       
        double aux;                                         //variable auxiliar
        for(int i = 0; i < elementos.length - 1; i++) {     //ordenar vector
              for(int j = 0; j < elementos.length - i - 1; j++) {
                   if(elementos[j + 1] < elementos[j]){
                      aux = elementos[j + 1];
                      elementos[j + 1] = elementos[j];
                      elementos[j] = aux;
                   }
              }
        }
         
        for (int k = 0; k < elementos.length; k++) {    //imprimir vector ordenado
            System.out.print(elementos[k]+"\t");
        }
        
        System.out.println("Menor elemento: "+elementos[0]);      //imprimir menor elemento(1er elemento del vector)
    }
}