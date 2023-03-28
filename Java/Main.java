package Java;
class Main{

    public static void main(String[] args) {
        System.out.println("Hello world");

        Car car = new Car();
        car.license = "AMQ123";
        car.driver = "Andres Pereira";
        car.passengers = 4;
        car.printDataCar();

        Car car2 = new Car();
        car2.license = "OPC421";
        car2.driver = "Maurice Pietre";
        car2.passengers = 4;
        car2.printDataCar();

    }
}