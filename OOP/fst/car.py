class Car:
    wheels:int=4
    #constructor
    def __init__(self, model:str,year:int,colour:str,for_sale:bool):
        #attributes of object(self.[name of atribute])
        self.model=model
        self.year=year
        self.colour=colour
        self.for_sale=for_sale

    def drive(self):
        print(f"You're driving the {self.colour} {self.model}")

    def stop(self):
        print(f"You've stropped the {self.colour} {self.model}")

    def description(self):
        print(f"Model:{self.model}, Colour:{self.colour}, Year:{self.year},",end=" ")
        self.is_for_sale=("No","Yes")[self.for_sale == True]
        print(f"For sale: {self.is_for_sale}")