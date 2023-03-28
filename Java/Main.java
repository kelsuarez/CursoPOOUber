package Java;

class Main{

    public static void main(String[] args) {

        Car car = new Car("AMQ123", new Account("Andres Pereira", "AND123"));
        car.passengers = 4;
        car.printDataCar();

        Car car2 = new Car("OPC421", new Account("Maurice Pietre", "BDS542"));
        car2.passengers = 4;
        car2.printDataCar();

    }
}