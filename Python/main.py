from car import Car

if __name__ == "__main__":
    print("Hola Mundo")
    
    car = Car()
    car.license = "AMS541"
    car.driver = "Pablo Perez"
    print(vars(car))
    
    car2 = Car()
    car2.license = "BND125"
    car2.driver = "Andrea Loli"
    print(vars(car2))