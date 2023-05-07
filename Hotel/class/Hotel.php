<?php 

    class Hotel {
        // Attributs 
        private string $name;
        private string $place;
        private int $amountRoom;
        private array $bookings;
        private array $rooms;

        // constructeur 

        public function __construct(string $name, string $place, int $amountRoom){
            $this->name = $name;
            $this->place = $place;
            $this->amountRoom = $amountRoom;

            $this->bookings = [];
            $this->rooms = [];
        }

        // method 

        public function addBookingToHotel(Booking $booking){
            $this->bookings [] = $booking;
        }

        public function addRoom(Room $room){
            $this->rooms [] = $room;
        }

        public function displayAllBookings(){
            $countBooking = count($this->getBookings());

            $result = "<h2>Toutes les réservations pour " .  $this->getName() . "</h2>";

            if ($countBooking == 0){
                $result .= "Aucune réservation ! <br><br>";
            } else if ($countBooking == 1){
                $result .= "<div class='counter-booking'>$countBooking RÉSERVATION</div> <br><br>";
            } else $result .= "<div class='counter-booking'>$countBooking RÉSERVATIONS</div> <br><br>";

                foreach($this->bookings as $booking){
                    $result .= $booking->displayAllBookingsHotel() ."<br>";
                }
                return $result;
        }

        public function countBookings(){
            $count = count($this->getBookings());
            return $count;
        }

        public function restRooms(){
            $count = $this->getAmountRoom() - $this->countBookings();
            return $count;
        }

        public function statsRooms(){
            $result = "<h2>Status des chambres de " . $this->getName() . "</h2>
                <table>
                <tr class='first-row'>
                <th scope='col'>ROOM</th>
                <th scope='col'>PRICE</th>
                <th scope='col'>WIFI</th>
                <th scope='col'>STATUTS</th>
                </tr>";
                foreach($this->rooms as $room){
                    $result .= "<tr class='styles-row'> $room </tr>";
                }

            $result .= "</table>";

            return $result;
        }

        // getter 

        public function getName(){
            return $this->name;
        }

        public function getPlace(){
            return $this->place;
        }

        public function getAmountRoom(){
            return $this->amountRoom;
        }

        public function getBookings(){
            return $this->bookings;
        }
        public function getRooms(){
            return $this->rooms;
        }

        // setter 

        public function setName(string $name){
            $this->name = $name;
        }

        public function setPlace(string $place){
            $this->place = $place;
        }

        public function setAmountRoom(int $amountRoom){
            $this->amountRoom = $amountRoom;
        }

        public function setBookings(array $bookings){
            $this->bookings = $bookings;
        }

        public function setRooms(array $rooms){
            $this->rooms = $rooms;
        }

        // toString 

        public function __toString(){
            return $this->getName()."<br>Adresse : ".$this->getPlace()."<br>Nombre de chambre : ".$this->getAmountRoom()."<br>Nombre de réservations : ".$this->countBookings()."<br>Nombre de chambres restantes : ".$this->restRooms()."<br>";
        }
    }