class Animal:
    amount:int=0
    def __init__(self,name:str):
        self.name=name
        self.is_alive=True
        Animal.amount+=1

    def eat(self):
        print(f"{self.name} is eating")

    def sleep(self):
         print(f"{self.name} is sleeping")

class Predator(Animal):
     def hunt(self):
        print(f"{self.name} is hunting")

class Prey(Animal):
     def flee(self):
        print(f"{self.name} is fleeing")

#inheritance classes(iherit from class in the"()" )
class Dog(Predator):
    def speak(self):
        print("Bark")

class Cat(Predator):
    def speak(self):
            print("Meow")

class Rat(Prey):
    def speak(self):
            print("Squeek")

class Fish(Predator,Prey):
    def speak(self):
            print("Bloop")

dog=Dog("Sherif")
cat=Cat("Behemoth")
rat=Rat("Stimpy")
fish=Fish("Mute")

print(cat.name)
print(cat.is_alive)
cat.sleep()
cat.eat()
cat.speak()
cat.hunt()

fish.hunt()
fish.flee()
print(Animal.amount)
