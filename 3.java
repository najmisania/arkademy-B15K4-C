import java.util.*;
public class tiga {
  public static void main(String[] args) {
        Scanner masuk = new Scanner(System.in);
        
        try{
			System.out.print("Input: ");
			int input = masuk.nextInt();
            for(int i = 1; i <= input; i++) {
                if (((i % 3) == 0) && ((i % 7) == 0))
                    System.out.print("Arkademy");  
                else if ((i % 3) == 0) 
                    System.out.print("Arka");
                else if ((i % 7) == 0) 
                    System.out.print("Demy");
				else 
                    System.out.print(i);
                    System.out.print(" ");
            }
            System.out.println();
        }
        catch(Exception e){
            System.out.println("Input Harus Angka!");
        }
  }
}