<?php

//Array Jujukan
$result = array( //array pertama = pelajar
    "Riya" => array("KPD4015" => 80, "SEJARAH" => 80, "DISCRETE MATH" => 90, "KP04024" => 85, "P.ISLAM" => 90),
    "Hamsyari" => array("KPD4015" => 70, "SEJARAH" => 75, "DISCRETE MATH" => 92, "KP04024" => 87, "P.ISLAM" => 91),
    "Fatih Adlina" => array("KPD4015" => 90, "SEJARAH" => 92, "DISCRETE MATH" => 73, "KP04024" => 89, "P.ISLAM" => 78),
    "Faheem Aiddee" => array("KPD4015" => 96, "SEJARAH" => 72, "DISCRETE MATH" => 83, "KP04024" => 79, "P.ISLAM" => 75),
    "Nadia Aabila" => array("KPD4015" => 96, "SEJARAH" => 92, "DISCRETE MATH" => 93, "KP04024" => 82, "P.ISLAM" => 76)
);

foreach ($result as $pelajar => $value) {
    echo "Pelajar: " . $pelajar;
    echo "<br>";
    
    foreach ($value as $subjek => $rst) {
        echo "Subjek: " . $subjek . " Result: " . $rst;
        echo "<br>";
    }
    
    echo "----------------------------------------";
    echo "<br>";
}
?>