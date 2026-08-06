class Student:

    class_year:int=1999
    num_students=0

    def __init__(self, name:str, age:int):
        self.name:str=name
        self.age:str=age
        #increament the class attribute calling class name
        Student.num_students+=1

student1=Student("Hiccup",32)
student2=Student("Thor",42)
student3=Student("Max",45)
student4=Student("Ellen",73)


# print(student1.name)
# print(student1.age)

# print(Student.class_year)

# print(student2.name)
# print(student2.age)


print(f"Graduating class of year {Student.class_year} featuring {Student.num_students} students:")
print(f"{student1.name}, {student1.age}")
print(f"{student2.name}, {student2.age}")
print(f"{student3.name}, {student3.age}")
print(f"{student4.name}, {student4.age}")