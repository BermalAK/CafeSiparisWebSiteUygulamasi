<?php
    $aVar = mysqli_connect('localhost','root','','bernisdb');
    $aVar-> Set_charset("utf8");
                $id = $_POST["id"];
                $kAdi = $_POST["kAdi"];
              $sifre = $_POST["sifre"];
              $isim = $_POST["isim"];
              $telefon = $_POST["telefon"];
        if(!$_POST["kAdi"]||!$_POST["sifre"]||!$_POST["isim"]||!$_POST["telefon"])
  {
     $uyari = "<script>alert('Lütfen boş alan bırakmayınız.')</script>";
        echo $uyari;
         include("pages-profile.php");
  }
        else{
              $sql="UPDATE `uyegirisi` SET kAdi='$kAdi', sifre ='$sifre', isim ='$isim',telefon ='$telefon'";
      if ($aVar->query($sql) === TRUE) 
       {
        echo 'swal("Güncelleme işi tamam", "", "success");';
          $mesaj = "<script>alert(Güncelleme işi tamam);</script>";
                echo $mesaj; 
           header("Location:pages-profile.php");
       } 
        else 
        {
            echo "Error updating record: " . $aVar->error;
        } 
        }  
       
?>
