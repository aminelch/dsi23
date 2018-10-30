public class Point{
    private String Nom;
    private int Abscisse; 
    private int Ordonnee; 

  
    //constructeur 
    public Point(int i, int j) {
		Abscisse=i;
		Ordonnee=j;
	}



	public Point(String s) {
		Nom =s;
	}



	public Point(String s, int i, int j) {
		Nom =s;
		Abscisse=i;
		Ordonnee=j;
	}



	public void Affiche(){
        System.out.println(Nom + "(" + Abscisse + "," + Ordonnee + ")");
    }
    public void TransHoriz(int a){
        Abscisse=Abscisse + a ; 

    }
    public void TransVert(int a){
        Ordonnee=Ordonnee + a ; 

    }
    public String getNom(){
        return Nom ; 

    }

    public int getAbscisse(){
        return Abscisse; 
    }

    public int getOrdonnee(){
        return Ordonnee; 
    }

    public void setNom(String ch){
        Nom= ch ; 

    }
    public void setAbscisse(int a ){
        Abscisse=a;

    }
    public void setOrdonnee(int a ){
        Ordonnee=a;
        
    }



	public void Translation(int i, int j) {
		Abscisse=Abscisse+i;
		Ordonnee=Ordonnee+j ; 
		
    }
    public bool Coincide(Point p){
        if((this.Ordonnee== p.Ordonnee) && (this.Abscisse==p.Abscisse) ){
         return true;
        }
        return false ; 
    }
}