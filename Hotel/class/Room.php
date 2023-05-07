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
        }

        // methods 

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

            $date1 = $booking->getDateOfEntered();
            $date2 = $booking->getDateOfExit();
            if($date1 >= $booking->getDateOfEntered() && $date2 <= $booking->getDateOfExit()){
                $this->booked = true;
            }
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

        // TO STRING

        public function __toString(){
            return "<th scope='row' class='column-room'>Chambre " . $this->roomNumber . "</th>
                    <td>" . $this->price . " €</td>
                    <td>" .$this->getWifiIcons() . "</td>
                    <td>" . $this->isReserved() . "</td>"; 
        }

    }