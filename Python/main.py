from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola Mundo")
    
    car = Car("AMS541", Account("Pablo Perez", "AND123"))
    print(vars(car))
    print(vars(car.driver))