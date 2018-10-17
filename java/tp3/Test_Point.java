
public class Test_Point {
    public static void main(String [] args){
    	Point p1;
        p1= new Point(3, 5);
        Point p2= new Point("a");
        Point p3= new Point ("b", 3, 5);
        
        System.out.println("\n --------------------------- \n");
        
        p1.Affiche();
        p2.Affiche();
        p3.Affiche();
        System.out.println("\n --------------------------- \n");
        
        if(p1.Coincide(p3) == true){
            System.out.println("Les 2 points p1 et p3 coincident");
        }else {
            System.out.println("Les 2 points p1 et p3 ne coincident pas");
        }
        
        System.out.println("\n --------------------------- \n");
        System.out.println("translation des point ");
        p1.TransHoriz(4);
        p2.TransVert(3);
        p3.Translation(5,2);
        p1.Affiche() ;
        p2.Affiche() ;
        p3.Affiche() ;
        
        System.out.println("\n --------------------------- \n");
        System.out.println("Modification des attributs des points ");
        p1.setNom("SRI21");
        p2.setAbscisse(25);
        p3.setOrdonnee(50);
        p1.Affiche() ;
        p2.Affiche() ;
        p3.Affiche() ;        
        System.out.println("\n --------------------------- \n");
        System.out.println("Utilisation des méthodes get ");
        String x=p1.getNom();
        int y=p1.getAbscisse();
        int z=p1.getOrdonnee();
        System.out.println("Le nom du point p1 est :" + x);
        System.out.println("son abscisse est : " + y);
        System.out.println("son ordonné est : " + z);
        System.out.println("\n --------------------------- \n");
        
        /*******************************************************************************************************
	************************* REPONSE **********************************************************************
	*Ce code va generer un erreur , car on tente d'acceder 
         à des attributs privées, il faut utiliser un getter et setter(exemple : getNom ,setAbssice ...) 
	 pour acceder au attribut privées de classe 
	 *******************************************************************************************************/ 


	/*
	    p3.Nom="Test";
	    p3.Abscisse=3;
	    p3.Ordonnee=4;
  	*/
        
    }
}
