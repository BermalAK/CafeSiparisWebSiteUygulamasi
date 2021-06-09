<?php
    $aVar = mysqli_connect('localhost','root','','bernisdb');
    $aVar-> Set_charset("utf8");
    
      $name = mysqli_real_escape_string($aVar, $_POST["name"]);  
      $email = mysqli_real_escape_string($aVar, $_POST["email"]);  
      $message = mysqli_real_escape_string($aVar, $_POST["message"]); 
      $konu = mysqli_real_escape_string($aVar, $_POST["subject"]);  
    
        if(!$_POST["name"] || !$_POST["email"]||!$_POST["message"]|| !$_POST["subject"])
  {
     $uyari = "<script>alert('Lütfen boş alan bırakmayınız.')</script>";
        echo $uyari;
         include("index.php");
  }
        else{
             $sql = "INSERT INTO dusunceler(isim,mail,konu,mesaj) values ('".$name."','".$email."','".$konu."','".$message."')";
      if(mysqli_query($aVar, $sql))  
      {  
           
              echo "<script>
alert('Mesajınız Gönderildi');
window.location.href='index.php';
</script>";
      }  
        else
        {
              echo "hata";
        }
        }  
       
?>
