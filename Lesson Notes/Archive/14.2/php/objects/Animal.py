class Animal:

    def __init__(self, name):
        
        self.foodType = 0;
        self.color = "red";
        self.name = name
        self.age = 20;

    def getFoodType(self):
        return self.foodType

    def setFoodType(self, foodType):
        self.foodType = foodType

    def getColor(self):
        return self.color

    def setColor(self, color):
        self.color = color



zebra = Animal()

