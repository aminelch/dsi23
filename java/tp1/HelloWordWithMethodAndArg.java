public class HelloWordWithMethodAndArg {

public static void main ( String args[]){
    HelloWordWithMethodAndArg s=new HelloWord(args[]);
    s.HelloWord(args[0]);

}
void HelloWord(String ch){
    System.out.println("Hello "+ ch);
}

}