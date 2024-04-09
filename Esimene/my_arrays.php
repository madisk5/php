<?php
// Defineeri nimede massiiv
$names = ['Mari', 'Jüri', 'Juhan', 'Anna'];
echo $names. '<br>'; // Näita massiivi sisu Array
print_r($names); // See näitab massiivi
echo '<br>'; // Pehme reavahetus

array_push($names, 'Aita-Leida Kuusepuu');
print_r($names); // See näitab massiivi
echo '<br>';

echo $names[4]. '<br>'; // Viimane fikseeritud numbriga
echo $names [count($names)-1]. '<br>';  //Loeb kokku -1

//  Näita massiivi sisu rea kaupa
foreach($names as $key=>$val){
    echo($key + 1) . '. ' .$val. '<br>';

}
echo '<p></p>';

for($x = 0; $x < count($names); $x++) {
    echo ($x + 1).'. ' .$names[$x]. '<br>';
}
echo '<p></p>';

// Väljasta massiiv $names tagurpidi, üks võimalus
$reversed_names = array_reverse($names);
$count = 1;
foreach ($reversed_names as $name) {
    echo $count . ". " . $name . "<br>";
    $count++;
}
echo '<p></p>';

// Teine võimalus väljastada $names tagurpidi
for($x = count($names)-1 ; $x >=0; $x--){
    echo (count($names) - $x).'. ' .$names[$x]. '<br>';
}

// Mitmemõõtmeline massiiv
$persons = [
    0 => [
        "name" => "Marko",
        "age" => 25,
        "aadress" => "Pärnu-Jaagupi"
    ],
    1 => [
        "name" => "Juhan",
        "age" => 55,
        "aadress" => "Euroopa"
    ],
    2 => [
        "name" => "Mari",
        "age" => 35,
        "aadress" => "Aasia"
    ]
           
    
    
];
print_r($persons);
echo '<br>';
// Näita massiivi sisu foreach ()
foreach($persons as $key=>$val){
    echo $val['name'].' '.$val['age'].' '.$val['aadress']. '<br>';
}
echo '<p><p>';
for($x = 0; $x < count($persons); $x++){
    echo $persons[$x]['name'].' '.$persons[$x]['age'].' '.$persons[$x]['aadress'].'<br>' ;

}
?>