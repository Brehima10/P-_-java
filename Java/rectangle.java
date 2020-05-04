public class rectangle extends Figure{


 //Getters
           public double getLongueur(){
                return this.longueur
             }
           //Setters
           public void setLongueur(double largeur){
                this.largeur=largeur
             }
 //Methodes metiers abstraites
   
         //Methodes metiers abstraites intances
             //Redefinition

             public abstract double demi perimetre(){
                  retrun this.longueur+largeur; 

                }



            public abstract double surface()    {
                  return 0;
                } 

            public abstract double diagonale()    {
                   return 0;
                } 

}