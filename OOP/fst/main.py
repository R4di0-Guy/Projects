from car import Car
# class Car:
#     #constructor
#     def __init__(self, model:str,year:int,colour:str,for_sale:bool):
#         #attributes of object(self.[name of atribute])
#         self.model=model
#         self.year=year
#         self.colour=colour
#         self.for_sale=for_sale

car1=Car("Impala",1969,"Black",True)
car2=Car("Corvette",1973,"Black",False)

print(car1.model)
print(car1.year)
print(car1.colour)
print(car1.for_sale)
car1.stop()
car1.description()

print()

print(car2.model)
print(car2.year)
print(car2.colour)
print(car2.for_sale)
car2.drive()
car2.description()