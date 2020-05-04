
public abstract class Figure{


         //Attributs Instances
          protected double longueur;

 
         //Attributs classes 
         private static string unite;

          //Methodes Instances Concretes
           //Constructeurs
           public Figure (){

           }
           //Getters
           public double getLongueur(){
                return this.longueur
             }
           //Setters
           public void setLongueur(double longueur){
                this.longueur=longueur
             }
            Methodes static concretes
           //Getters
    public static string getUnite(){
           return Figure.unite;
            }
           //Setters
     
    public static void setUnit(string unite){
           Figure.unite=unite;
             }
   //Methodes metiers abstraites(static ou instances)
   
         //Methodes metiers abstraites intances
             public abstract double demiPerimetre();
             public abstract double perimetre();
             public abstract double diagonale();

         //Methodes metiers concretes

       public abstract double perimetre()    {
               return this.demiPerimetre*2;
              } 
}
