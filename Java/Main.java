package Java;
class Main{
    public static void main(String[] args) {
        UberX uberX = new UberX("AMQ123", new Account("Andres Pereira", "AND123"), "Chevrolet", "Sonic");
        uberX.setPassengers(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("VAN123", new Account("Van Premier", "VANTITLE"), null, null);
        uberVan.setPassengers(6);
        uberVan.printDataCar();
    }
}