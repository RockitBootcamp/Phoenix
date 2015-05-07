public class Animal() {

    private int foodType;
    private int color;
    private String name;
    private int age;

    public Animal(String name){
        this.foodType = 0;
        this.color = "red";
        this.name = name;
        this.age = 20;
    }

    public void setFoodType(int foodType){
        this.foodType = foodType;
    }
    public int getFoodType(){
        return this.foodType;
    }
    public void setColor(String color){
        this.color = color;
    }
    public String getColor(){
        return this.color;
    }
    public void setName(String name){
        this.name = name;
    }
    public String getName(){
        return this.name;
    }
    public void setAge(String age){
        this.age = age;
    }
    public String getAge(){
        return this.age;
    }
}

Animal zebra = new Animal("Zeb");
zebra.getName();


