<?php 

// function tampilkan_nama(){
//     echo "Nama saya malas ngoding";
// }

// tampilkan_nama();   

// $nama = "muhammad raden iqbal hafidz fauzi";
// echo $nama;
// echo "<br>";
// echo strtoupper($nama);
// echo "<br>";
// echo ucwords($nama);
// echo "<br>";
// echo lcfirst($nama);
// echo "<br>";
// echo strtolower($nama);

//fungsi void
// function salam($nama){
//     echo "<h2>Assalamu'alaikum".strtoupper($nama)."</h2>";
// }

// salam("ali");
// salam("fadil");
// salam("");

//fungsi return value
// function jumlah($a , $b){
//     return $a + $b;
// }

// echo '$a + $b = '.jumlah(2,8);    

// function perkenalan(){
//     echo "Assalamu'alaikum, ";
//     echo "Perkenalkan, nama saya bedu<br>";
//     echo "Senang Berkenalan dengan anda<br>";
// }

// perkenalan();

// echo "<hr>";

// perkenalan();


// function perkenalan($nama, $salam){
//     echo $salam.",";
//     echo "Perkenalkan, nama saya ".$nama."<br>";
//     echo "Senang Berkenalan dengan anda<br>";
// }

// perkenalan("Usro","hai");

// echo "<hr>";

// $saya = "bedu";
// $ucapansalam = "Selamat Pagi";

// perkenalan($saya, $ucapansalam);

// function perkenalan($nama, $salam="Assalamu'alaikum"){
//    echo $salam.",";
//    echo "Perkenalkan, nama saya ".$nama."<br>";
//    echo "Senang Berkenalan dengan anda<br>";
// }

// perkenalan("Jarwo", "Hi");

// echo "<hr>";

// $saya = "Bambang";
// $ucapansalam = "Selamat Pagi";

// perkenalan($saya);

// function hitungumur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// function perkenalan($nama, $salam = "Assalamu'alaikum"){
//     echo $salam,", ";
//     echo "Perkenalkan nama saya ",$nama,"<br>";

//     echo "Saya Berusia ". hitungumur(1994, 2015) ."tahun<br>";
//     echo "Senang Bertemu dengan kalian<br>";
// }

// perkenalan("Ardianta");

// function faktorial($angka) {
//     if ($angka < 2){
//         return 1;
//     }   else{  
//         return ($angka * faktorial($angka-1));
//     }
// }

// echo "Faktorial 5 adalah ",faktorial(5);    


// function pangkatdua($a){
//     $a = $a * $a;
// }
// $a = 20;
// echo 'Sebelum nilai $a :'.$a;
// pangkatdua($a);
// echo '<br>Sesudah Nilai $a :'.$a;

// function pangkatdua($a){
//     global $a;
//     $a = $a * $a;
// }
// $a = 20;
// echo 'Sebelum nilai $a :'.$a;
// pangkatdua($a);
// echo '<br>Sesudah Nilai $a :'.$a;



function otentikasi($uname,$pass){
    if($uname="admin" && $pass=="123456"){
        return true;
    }else{
        return false;
    }
}
?>  