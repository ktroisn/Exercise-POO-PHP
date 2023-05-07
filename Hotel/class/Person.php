<?php 

    class Person {
        // Attributs
        private string $name;
        private string $surname;
        private array $bookings;

        // constructeur

        public function __construct(string $name, string $surname){
            $this->name = $name;
            $this->surname = $surname;

            $this->bookings = [];
        }

        //methods

        public function addBooking(Booking $booking){
            $this->bookings [] = $booking;
        }

        public function displayAllBookings(){
            $countBooking = count($this->getBookings());

            $result = "<h2>Toutes les réservations pour $this </h2>";

            if ($countBooking == 0){
                $result .= "Aucune réservation ! <br>";
            } else if ($countBooking == 1){
                $result .= "<div class='counter-booking'>$countBooking RÉSERVATION</div> <br>Prix total : ".$this->totalPrice()."€<br><br>";
            } else $result .= "<div class='counter-booking'>$countBooking RÉSERVATIONS</div> <br>Prix total : ".$this->totalPrice()."€<br><br>";

                foreach($this->bookings as $booking){
                    $result .= $booking->displayThisBooking() ."<br>";
                }
                return $result;
        }

        public function totalPrice(){
            $total = 0; 

        foreach ($this->bookings as $booking){
            $total += $booking->countPrice();
        }

        return $total;
        }
        
        // getter 

        public function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getBookings(){
            return $this->bookings;
        }

        // setter

        public function setName(string $name){
            $this->name = $name;
        }

        public function setSurname(string $surname){
            $this->surname = $surname;
        }

        public function setBookings(array $bookings){
            $this->bookings = $bookings;
        }

        // TO STRING //

        public function __toString(){
            return $this->getName() . " " . $this->getSurname();
        }
    }