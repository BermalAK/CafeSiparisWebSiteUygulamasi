<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Admin Paneline Hoşgeldiniz</title>
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                       <div class="navbar-brand" style="padding-left:20px;">
                        <a href="index.php" class="logo">
                         
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src=" " alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="logo.jpeg" style="width:200px;" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Admin Paneli</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="gelenyorumlar.php" aria-expanded="false">
                                <i class="mdi mdi-message"></i>
                                <span class="hide-menu">GelenYorumlar</span>
                            </a>
                        </li>
                          <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="gelenrezervasyon.php" aria-expanded="false">
                                <i class="mdi mdi-pencil"></i>
                                <span class="hide-menu">Gelen Rezervasyonlar</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="iletisim.php" aria-expanded="false">
                                <i class="mdi mdi-phone"></i>
                                <span class="hide-menu">İletişim</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a style="background-color: red;" class="sidebar-link waves-effect waves-dark sidebar-link" href="../../../index.php" aria-expanded="false">
                                <i class="mdi mdi-logout"></i>
                                <span  class="hide-menu">Çıkış Yap</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">İLETİŞİM</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Anasayfa</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
               
            </div>
             <form class="form-horizontal form-material" method="post" action="İletisimdüzenle.php">    
                                 <?php
      $aVar = mysqli_connect('localhost','root','','bernisdb');
          $aVar-> Set_charset("utf8");       
        $sql="select * from iletisim";
       $bilgiler = mysqli_query($aVar,"$sql");
  mysqli_set_charset($aVar,"utf8");
                while($row=mysqli_fetch_array($bilgiler))
                {
                    $adres=$row['yer'];
                    $icerik=$row['acikSaat'];
                    $email=$row['email'];
                    $telefon=$row['telefon'];
                    echo '<div class="form-group">';
                    echo ' <input type="hidden" name="id" value="1">';
                echo '<div class="form-group"><label for="example-email" class="col-md-12">Adres</label>
                                        <div class="col-md-12">
                                        <textarea name="yer" id="yer" cols="100" rows="3">'.$adres.'</textarea> 
                                        </div>
                                    </div></div>';
                echo "<div>";
                 echo '<div class="form-group">';
                echo '<div class="form-group"><label for="example-email" class="col-md-12">Açık Saatler</label>
                                        <div class="col-md-12">
                                           <textarea name="acikSaat" id="acikSaat" cols="100" rows="1">'.$icerik.'</textarea>
                                        </div>
                                    </div></div>';
                echo "<div>";
                 echo '<div class="form-group">';
                echo '<div class="form-group"><label for="example-email" class="col-md-12">Mail</label>
                                        <div class="col-md-12">
                                           <textarea name="email" id="email" cols="100" rows="1">'.$email.'</textarea>
                                        </div>
                                    </div></div>';
                echo "<div>";
                 echo '<div class="form-group">';
                echo '<div class="form-group"><label for="example-email" class="col-md-12">Telefon</label>
                                        <div class="col-md-12">
                                            <textarea name="telefon" id="telefon" cols="100" rows="1">'.$telefon.'</textarea>
                                        </div>
                                    </div></div>';
                echo "<div>";
                    echo '<input value=Güncelle type="submit" class="btn btn-primary">';
              
                }
                ?>
              
                  </form>
 </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
        <!--    <footer class="footer text-center">
                          Bütün hakları saklıdır.
                <a href="https://wrappixel.com">BERNİS CAFE</a>.
            </footer>-->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>