<?php 

    class Booking {
        //Attributs
        private Person $person;
        private Room $room;
        private Hotel $hotel;
        private DateTime $entered;
        private DateTime $exit;

        // constructeur 

        public function __construct(Person $person, Room $room, Hotel $hotel, string $entered, string $exit){
            $this->person = $person;
            $this->room = $room;
            $this->entered = new DateTime($entered);
            $this->exit = new DateTime($exit);

            $this->person -> addBooking($this);
            $this->room -> addBooking($this);
            $this->room -> addBookingDate($this->entered, $this->exit);
            $this->hotel = $hotel;
            $this->hotel -> addBookingToHotel($this);
        }

        // methods
        
        

        public function displayThisBooking(){
            return "Hotel : <b>" . $this->getHotel()->getName() . " /</b> " . $this->getRoom()->displayRoomForBooking() . " du " . $this->getDateOfEntered() . " au " . $this->getDateOfExit() . "<br>Prix de cette réservation : " . $this->countPrice() . "€<br>";
        }

        
        public function displayAllBookingsHotel(){
            return " " . $this->getPerson() . " - Chambre " . $this->getRoom()->getRoomNumber() . " - du " . $this->getDateOfEntered() . " au " . $this->getDateOfExit() . "<br>";
        }

        public function countPrice(){
            $amountday = date_diff($this->entered, $this->exit);
            $price = $amountday->format("%a") * $this->getRoom()->getPrice();
            return $price;
        }

        public function displayStatsRooms(){
            return $this->getRoom();
        }
        
        // getter 

        public function getPerson(){
            return $this->person;
        }

        public function getRoom(){
            return $this->room;
        }

        public function getHotel(){
            return $this->hotel;
        }

        public function getDateOfEntered(){
            return $this->entered->format("d-m-Y");
        }

        public function getDateOfExit(){
            return $this->exit->format("d-m-Y");
        }

        // setter

        public function setPerson(Person $person){
            $this->person = $person;
        }

        public function setRoom(Room $room){
            $this->room = $room;
        }

        public function setHotel(Hotel $hotel){
            $this->hotel = $hotel;
        }

        public function setDateOfEntered(DateTime $entered){
            $this->entered = $entered;
        }

        public function setDateOfExit(DateTime $exit){
            $this->exit = $exit;
        }
    }