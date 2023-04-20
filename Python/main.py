from car import Car

if __name__=="__main__":
    print("Hola Mundo")

    car = Car()
    car.license = "AMS234"
    car.driver = "Carlos Castro"
    car.passenger = 3
    print(vars(car))

    car2 = Car()
    car2.license = "TQW675"
    car2.driver = "Maria Castillo"
    car2.passenger = 1
    print(vars(car2))