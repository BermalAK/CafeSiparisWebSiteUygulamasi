<?php
    $aVar = mysqli_connect('localhost','root','','bernisdb');
    $aVar-> Set_charset("utf8");
                $id = $_POST["id"];
                $yer = $_POST["yer"];
              $acikSaat = $_POST["acikSaat"];
              $email = $_POST["email"];
              $telefon = $_POST["telefon"];
        if(!$_POST["yer"]||!$_POST["acikSaat"]||!$_POST["email"]||!$_POST["telefon"])
  {
     $uyari = "<script>alert('Lütfen boş alan bırakmayınız.')</script>";
        echo $uyari;
         include("index.php");
  }
        else{
              $sql="UPDATE `iletisim` SET yer='$yer', acikSaat ='$acikSaat', email ='$email',telefon ='$telefon'";
      if ($aVar->query($sql) === TRUE) 
       {
        echo 'swal("Güncelleme işi tamam", "", "success");';
          $mesaj = "<script>alert(Güncelleme işi tamam);</script>";
                echo $mesaj; 
           header("Location:iletisim.php");
       } 
        else 
        {
            echo "Error updating record: " . $aVar->error;
        } 
        }  
       
?>
