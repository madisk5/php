<?php
// Funktsioon massiivi inimlikumal kujul näitamiseks
function show_array($array){
    echo '<pre>';
    print_r($array);
    echo'</pre>';
}

function show_first_person_name($array){
    if(is_array($array)){
        return $array[0]['name'];
        

    }
    return "Viga massiiviga";
}
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
show_array($persons);
print_r($persons);

echo '<p><p>';
echo show_first_person_name($persons);

echo '<p><p>';
$name = 'Madis Kalmus';
show_array($name);
echo show_first_person_name($name);

?>