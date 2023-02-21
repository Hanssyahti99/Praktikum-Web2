<?php

//buat array
$animals = ["kucing", "ayam", "ikan", "burung"];
// tampilan kucing
echo $animals[0] . "<br>" ;
echo $animals[3] . "<br>";
//looping array
foreach ($animals as $animal) {
    echo $animal . "<br>";
}


echo "<br>";
//array asosiatif
$mahasiswa = ["nama"=>"Hanif","umur"=>23,"alamat"=>"depok"];

echo $mahasiswa{"nama"} . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value; 
    echo "<br>" ;

}

echo "<br>";

// buat array multidimensi
$dosen = [
    ["Pak Rojul", "web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "OS"]
    
];

foreach ($dosen as $dsn) {
    echo "Nama Dosen : " . $dsn[0] . "<br>";
    echo "Matkul : " . $dsn[1];
    echo "<br>";
}


?>