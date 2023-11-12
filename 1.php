<?php

$total_belanja = 150000;
if($total_belanja > 100000){
    echo "Anda dapat hadiah <br> ";
} 

$umur = 13; 
if ($umur < 18){
    echo "Kamu tidak boleh membuka situs ini!";
} else {
    echo "Selamat atang di website kami! <br>";
}

$nilai = 88;
if ($nilai > 90){
    $grade = "A";
} elseif($nilai >80){
    $grade= "B";
} elseif($nilai >60){
    $grade= "C";
} elseif($nilai >40){
    $grade= "D";
} elseif($nilai >30){
    $grade= "E";
} else {
    $grade = "F";
}
echo "Nilai Anda : $nilai<br>";
echo "Grade : $grade <br>";

$level = 3;
switch($level){
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari PHP";
        break;
    default:
    echo "Kamu bukan programer!";
}

?>