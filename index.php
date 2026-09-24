<?php

// require_once 'query/inq.php';


// $email = $_POST['email'];
// $nama = $_POST['nama'];
// $pass = $_POST['pass'];

// if (isset($_POST['enter'])) {
//     if (!empty($_POST['email']) && !empty($_POST['nama'] ) && !empty($_POST['pass'])) {
        
//        entry($email,$nama,$pass);

//     }
// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td {
  border:1px solid black;
  width: 20vh;
}
</style>
<body>

<!-- <form method="post" >

<input type="email" name="email">
<input type="text" placeholder="nama" name="nama"> <br>
<input type="text" placeholder="password" name="pass">
<button name="enter">enter</button>

</form> -->

<form action="" method="post" style="display: grid;">

    <label for="">Nama</label>
    <input name="nama" type="text">
    <label for="">Kelas</label>
    <select name="kelas" id=""><option value="XIPLG1">XIPPLG1</option><option value="XIPPLG2">XIPPLG2</option><option value="XIPPLG3">XIPPLG3</option></select>
    <label for="">Gender</label>
    <input type="radio">
    <label for="">Ekskul</label>
    <select name="ekskul" id=""><option value="web programming">Web Programming</option><option value="desain grafis">Desain grafis</option></select>
    <label for="">Telp</label>
    <input name="telp" type="tel">
    <label for="">Alasan mengikuti ekskul</label>
    <textarea name="alasan" id=""></textarea>
    <button name="submit">Submit</button>
    <button name="reset">reset</button>
</form>
<br>
<br>
<br>
<br>

<?php
$arr = ["pamungkas","yudoyono","siregar","simalungun","daicho"];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$telp = $_POST['telp'];
$ekskul = $_POST['ekskul'];
$alasan = $_POST['alasan'];


if (isset($_POST['submit'])) {
  

for ($i=0; $i < 5; $i++) { 
echo"
<table>
  <tr>
    <th>nama</th>
    <th>kelas</th>
    <th>No telp</th>
    <th>ekskul</th>
    <th>alasan</th>
  </tr>
   <tr>
    <td>$nama $arr[$i] </td>
    <td>$kelas.$i</td>
    <td>$telp.$i</td>
    <td>$ekskul.$i</td>
    <td>$alasan.$i</td>

  </tr>

</table>
    ";
}

// echo"
// <table>
//   <tr>
//     <th>nama</th>
//     <th>kelas</th>
//     <th>ekskul</th>
//     <th>alasan</th>
//   </tr>
//    <tr>
//     <td>$nama</td>
//     <td>$kelas</td>
//     <td>$ekskul</td>
//     <td>$alasan</td>

//   </tr>

// </table>
//     ";
   
    }
?>

</body>
</html>