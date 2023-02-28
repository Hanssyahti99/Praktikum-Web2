<?php 
// tangkap hasil inputan

$proses = $_POST["submit"];
$nama_lengkap = $_POST["nama_lengkap"];
$mata_kuliah = $_POST["matkul"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_tugas = $_POST["nilai_tugas"];

echo $nama_lengkap;
echo $mata_kuliah;
echo $nilai_uts;
echo $nilai_uas;
echo $nilai_tugas;

// buat variable total nilai
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) /3;

// buat logic status
$status ;

if ($total_nilai >=60){
    $status = "Lulus";
} else {
    $status = "Tidak lulus" ;
}

//buat logic grade
$grade ;
if ($total_nilai >= 85 && $total_nilai <=100){
    $grade = "A" ;
} elseif ($total_nilai >=70 && $total_nilai < 85) {
    $grade = "C";
} elseif ($total_nilai >=70 && $total_nilai < 85){
    $grade = "C";
}  elseif ($total_nilai >=70 && $total_nilai < 85){
    $grade = "D";
}  else {
    $grade = "E";
}

// buat predikat
$predikat;
switch ($grade) {
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Sangat Kurang";
        break;
    default:
        $predikat = "Tidak Ada";
        break;
}


    

?>