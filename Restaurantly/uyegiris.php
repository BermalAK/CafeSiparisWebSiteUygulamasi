<?php
    $aVar = mysqli_connect('localhost','root','','bernisdb');
    $aVar-> Set_charset("utf8");
    
      $kAdi = mysqli_real_escape_string($aVar, $_POST["kAdi"]);  
      $sifre = mysqli_real_escape_string($aVar, $_POST["sifre"]);  
 
    
        if(!$_POST["kAdi"] || !$_POST["sifre"])
  {
     $uyari = "<script>alert('Lütfen boş alan bırakmayınız.')</script>";
        echo $uyari;
         include("index.php");
  }
        else{
              $sql="select * from uyegirisi";
              $bilgiler = mysqli_query($aVar,"$sql");
      if(mysqli_query($aVar, $sql))  
      {  
         while($row=mysqli_fetch_array($bilgiler))
                {
          $KAD=$row['kAdi'];
          $PASW=$row['sifre'];
           if($kAdi==$KAD&&$sifre==$PASW)
           {
            echo "<script>
           
alert('Admin hoşgeldin');
 

</script>";

header('Location:admin/nice-html/ltr/');
           }
           else
           {
             echo "<script>
          
alert('Hatalı Giriş');
window.location.href='index.php';
</script>";
           }
              }
      }  
        else
        {
              echo "hata";
        }
        }  
       
?>
