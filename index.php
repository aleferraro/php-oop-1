<?php

/* 
Quindi, dopo aver studiato le slide di oggi, vorrei che definiste una classe PHP che modella il concetto di una "Stanza di Hotel"; oltre a definire almeno 3 proprieta' distinte, vorrei che implementaste un costruttore che assegna un valore ad almeno una di queste proprieta', a vostro piacimento. Infine, implementate anche una funzione che, quando invocata sull'oggetto, stampi il contenuto di tutte le sue proprieta' ( concatenate i valori per formare una stringa ). Testate il tutto creando qualche istanza e invocando l'unica funzione che avete scritto. 
*/

class HotelRoom {

    public $room_number;
    public $floor;
    public $beds;


    function __construct($number, $floor, $beds){
        $this->room_number = $number;
        $this->floor = $floor;
        $this->beds = $beds;
    }

    function printAll(){
        echo
            'Number: ' . $this->room_number . '<br>' .
            'Floor: ' . $this->floor . '<br>' .
            'Beds: ' . $this->beds . '<br>';
    }
}

$room1 = new HotelRoom('101', '1', '2');
$room2 = new HotelRoom('102', '1', '3');
$room3 = new HotelRoom('201', '2', '1');

//var_dump($room1, $room2, $room3);


$room2->printAll();

?>