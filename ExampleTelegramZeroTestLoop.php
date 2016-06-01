<?php

set_time_limit(9000);

$sendMe = "https://api.telegram.org/bot186041186:AAG4PYxqPjokCNhRjeWvXYVgJxXK1EmnzDo/sendmessage?chat_id=16408019";

$banderaFull = true;

$ID2 = 0;




while ($banderaFull == true) {
 
$string = file_get_contents("https://api.telegram.org/bot186041186:AAG4PYxqPjokCNhRjeWvXYVgJxXK1EmnzDo/getUpdates");
$json_a = json_decode($string, true);
$ulti = count($json_a['result']) - 1;
        
    
$Now = $json_a['result'][$ulti]['update_id']; 


    if ($Now != $ID2) {
    
        if ($json_a['result'][$ulti]['message']['text'] === "Hola") {

            file_get_contents($sendMe . "&text=Hola");
            
            
        }

        $ID2 = $Now;
        
        

        }//if
    
    

}//while
 

 
 
 

/*
switch ($json_a['result'][$ulti]['message']['text']) {
    
    case "Hola":

        header("Location: https://api.telegram.org/bot186041186:AAG4PYxqPjokCNhRjeWvXYVgJxXK1EmnzDo/sendmessage?chat_id=16408019&text=Hello");
        
       break;

    default:
        
        header("Location: https://api.telegram.org/bot186041186:AAG4PYxqPjokCNhRjeWvXYVgJxXK1EmnzDo/sendmessage?chat_id=16408019&text=No lo entiendo");
        
        
        break;
}




*/

//echo count($json_a['result']);

//echo "<br>";

//echo $json_a['result'][0]['message']['text'];


//echo print_r ($json_a);






/*

{"ok":true,"result":[{"update_id":450949897,
"message":{"message_id":38,"from":{"id":16408019,"first_name":"JL","username":"TanSoloSoyJL"},"chat":{"id":16408019,"first_name":"JL","username":"TanSoloSoyJL","type":"private"},"date":1463563815,"text":"Hellp"}},{"update_id":450949898,
"message":{"message_id":41,"from":{"id":16408019,"first_name":"JL","username":"TanSoloSoyJL"},"chat":{"id":16408019,"first_name":"JL","username":"TanSoloSoyJL","type":"private"},"date":1463563963,"text":"hola"}},{"update_id":450949899,
"message":{"message_id":45,"from":{"id":16408019,"first_name":"JL","username":"TanSoloSoyJL"},"chat":{"id":16408019,"first_name":"JL","username":"TanSoloSoyJL","type":"private"},"date":1463565895,"text":"hola"}}]}




while($bandera = true)
{
    sleep(1);
    echo " Hello World" ;
    
    sleep(1);
    
    echo " hi" ;
}


https://api.telegram.org/bot186041186:AAG4PYxqPjokCNhRjeWvXYVgJxXK1EmnzDo/sendmessage?chat_id=217599797&text=Hello


*/


