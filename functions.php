<?php

    require('connection.php');


    /*if ($result = $mysqli->query("SELECT front FROM cards")) {
        printf("Select returned %d rows.\n", $result->num_rows);
        
        
        $result->close();
        
    }*/
    
    
    class Card {
        public $front = null;
        public $back = null;
        public $id = null;
    }
    
    function TestCard() {
            $card = new Card();
            $card->front = "front1";
            $card->back = "back1";
            $card->id = "1";
    }
    
    function GetCards($conn) {
        $sql = 'SELECT front, back, id FROM cards ORDER BY id';
        
        $cards = array();
        
        foreach ($conn->query($sql) as $row) {
           
            $card = new Card();
            $card->front = $row['front'];
            $card->back = $row['back'];
            $card->id = $row['id'];
            
            array_push($cards, $card); 
           
        }
        echo json_encode($cards);
    }

    GetCards($mysqli);
    
?>