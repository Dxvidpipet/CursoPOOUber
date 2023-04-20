package Java;

class Mainvb {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        Car car = new Car("AMQ123",new Account("Andres Herrera", "425123"));
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car("QWE231",new Account("Juan Casas", "7456437"));
        car2.passenger = 3;
        car2.printDataCar();
    }

}