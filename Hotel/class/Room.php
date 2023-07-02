<?php 

    class Room {
        //Attributs
        private float $price;
        private int $beds;
        private bool $wifi;
        private bool $booked;
        private int $roomNumber;
        private array $bookings;
        private Hotel $hotel;
        private array $dateBooked;

        //constructeur 

        public function __construct(float $price, int $beds, bool $wifi, int $roomNumber, Hotel $hotel){
            $this->price = $price;
            $this->beds = $beds;
            $this->wifi = $wifi;
            $this->booked = false;
            $this->roomNumber = $roomNumber;
            $this->hotel = $hotel;

            $this->hotel -> addRoom($this);
            $this->bookings = [];
            $this->dateBooked = [];
        }

        // methods 
        public function addBookingDate(DateTime $dateBooked, DateTime $dateBooked2){
            
            foreach($this->bookings as $booking) :
            if($dateBooked <= $booking->getDateOfEntered()  && $dateBooked2 >= $booking->getDateOfExit()){
                $this->dateBooked [] = $dateBooked;
                $this->dateBooked [] = $dateBooked2;
            } 
            else {
                echo "test";
            }
            endforeach;
        }

        

        public function isReserved(){
            if($this->booked == false){
                return "<div class='avalaible'>DISPONIBLE</div>";
            }else {
                return "<div class='unavalaible'>RÉSERVÉE</div>";
            }
        }

        public function displayRoomForBooking(){
            return "Chambre : " . $this->getRoomNumber() . " ( " . $this->getBeds() . " lits, une nuitée : " . $this->getPrice() . "€, Wifi : " . $this->askIfWifiIsEnabled() . ")<br>";
        }

        public function addBooking(Booking $booking){
            $this->bookings [] = $booking;
        }

        public function askIfWifiIsEnabled(){
            if(!$this->wifi){
                return "non";
            }else {
                return "oui";
            }
        }

        public function getWifiIcons(){
            if(!$this->wifi){
                return "<img src='./img/signal.png' class='icon-wifi'>";
            } else {
                return " ";
            }
        }

        // getter 

        public function getPrice(){
            return $this->price;
        }

        public function getBeds(){
            return $this->beds;
        }

        public function getWifi(){
            return $this->wifi;
        }

        public function getBooked(){
            return $this->booked;
        }

        public function getRoomNumber(){
            return $this->roomNumber;
        }

        public function getBookings(){
            return $this->bookings;
        }

        public function getHotel(){
            return $this->hotel;
        }

        public function getDateBooked(){
            return $this->dateBooked;
        }

        // setter

        public function setPrice(float $price){
            $this->price = $price;
        }

        public function setBeds(int $beds){
            $this->beds = $beds;
        }

        public function setWifi(bool $wifi){
            $this->wifi = $wifi;
        }

        public function setBooked(bool $booked){
            $this->booked = $booked;
        }

        public function setRoomNumber(int $roomNumber){
            $this->roomNumber = $roomNumber;
        }

        public function setBookings(array $bookings){
            $this->bookings = $bookings;
        }

        public function setHotel(Hotel $hotel){
            $this->hotel = $hotel;
        }

        public function setDateBooked(array $dateBooked){
            $this->dateBooked = $dateBooked;
        }

        // TO STRING

        public function __toString(){
            return "<th scope='row' class='column-room'>Chambre " . $this->roomNumber . "</th>
                    <td>" . $this->price . " €</td>
                    <td>" .$this->getWifiIcons() . "</td>
                    <td>" . $this->isReserved() . "</td>"; 
        }

    }