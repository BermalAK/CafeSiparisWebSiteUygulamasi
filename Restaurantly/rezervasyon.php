<?php
 $aVar = mysqli_connect('localhost','root','','bernisdb');
    $aVar-> Set_charset("utf8");
    
      $name = mysqli_real_escape_string($aVar, $_POST["name"]);  
      $email = mysqli_real_escape_string($aVar, $_POST["email"]);  
      $phone = mysqli_real_escape_string($aVar, $_POST["phone"]); 
      $tarih = mysqli_real_escape_string($aVar, $_POST["date"]);  
      $zaman = mysqli_real_escape_string($aVar, $_POST["time"]);
      $kisiSayi = mysqli_real_escape_string($aVar, $_POST["people"]);  
      $siparis = mysqli_real_escape_string($aVar, $_POST["message"]); 
        if(!$_POST["name"] || !$_POST["email"] || !$_POST["phone"] || !$_POST["date"] || !$_POST["time"] || !$_POST["people"] || !$_POST["message"])
  {
     $uyari = "<script>alert('Lütfen boş alan bırakmayınız.')</script>";
        echo $uyari;
         include("index.php");
  }
        else{
             $sql = "INSERT INTO rezervasyon(isim,mail,telefonNo,tarih,zaman,kisiSayisi,siparis) values ('".$name."','".$email."','".$phone."','".$tarih."','".$zaman."','".$kisiSayi."','".$siparis."')";
      if(mysqli_query($aVar, $sql))  
      {  
           
              echo "<script>
alert('Rezervasyonunun kaydedildi.');
window.location.href='index.php';
</script>";
      }  
        else
        {
              echo "hata";
        }
        }  

  ?>
