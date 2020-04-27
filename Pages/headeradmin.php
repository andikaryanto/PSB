<?php
if (!isset($_SESSION['pengguna'])){
    // include APP_PATH . 'Pages/header.php';
    include APP_PATH . 'Pages/admin/index.php';
    die;
} 



?>
<!DOCTYPE>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>SELAMAT DATANG CALON SISWA BARU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link media="all" type="text/css" rel="stylesheet" href="<?= $url ?>assets/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="<?= $url ?>assets/css/style.css">
    <link href="<?= $url ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $url ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $url ?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $url ?>assets/css/admin-lte.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $url ?>assets/css/admin-skin.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $url ?>assets/css/admin.css" rel="stylesheet" type="text/css">
    <link href="<?= $url ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="<?= $url ?>assets/js/jquery.js" type="text/javascript"></script>
    <!-- <script src="<?= $url ?>assets/js/jquery.min.js"></script> -->
    <script src="<?= $url ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= $url ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?= $url ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= $url ?>assets/js/adminlte.min.js" type="text/javascript"></script>
</head>



<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="#" class="logo">
                <span class="logo-mini">PSB</span>
                <span class="logo-lg">PANITIA PSB MUSATI</span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= $url ?>assets/images/logomusati.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>PANITIA</p>
                        <a href="#"><i class="fa fa-circle text-success"></i>ADMIN MUSATI</a>
                    </div>
                </div>

                <ul class="sidebar-menu">
                    <li class="header">MENU UTAMA</li>
                   
                    <li class="<?php if ($menuactive == "pengaturan") echo "active" ?> treeview">
                        <a href="<?= $url ?>Pages/admin/pengaturan/pengaturan.php">
                            <i class="fa fa-user"></i> <span>PENGATURAN</span>
                        </a>
                    </li>
                    <li class="<?php if ($menuactive == "semuasiswa") echo "active" ?> treeview">
                        <a href="<?= $url ?>Pages/admin/peserta/daftar.php?halaman=semuasiswa">
                            <i class="fa fa-user"></i> <span>DATA PESERTA DAFTAR</span>
                        </a>
                    </li>
                    <li class="<?php if ($menuactive == "siswaditerima") echo "active" ?> treeview">
                        <a href="<?= $url ?>Pages/admin/peserta/daftar.php?halaman=siswaditerima">
                            <i class="fa fa-user"></i> <span>DATA PESERTA DITERIMA</span>
                        </a>
                    </li>
                    <li class="<?php if ($menuactive == "siswaditolak") echo "active" ?> treeview">
                        <a href="<?= $url ?>Pages/admin/peserta/daftar.php?halaman=siswaditolak">
                            <i class="fa fa-user"></i> <span>DATA PESERTA DITOLAK</span>
                        </a>
                    </li>
                    <li class="<?php if ($menuactive == "gelombang") echo "active" ?> treeview">
                        <a href="<?= $url ?>Pages/admin/gelombang/daftar.php">
                            <i class="fa fa-user"></i> <span>GELOMBANG</span>
                        </a>
                    </li>
                    <li class="<?php if ($menuactive == "tahunajaran") echo "active" ?> treeview">
                        <a href="<?= $url ?>Pages/admin/tahunajaran/daftar.php">
                            <i class="fa fa-user"></i> <span>TAHUN AJARAN</span>
                        </a>
                    </li>
                    <li class="<?php if ($menuactive == "pengguna") echo "active" ?> treeview">
                        <a href="<?= $url ?>Pages/admin/pengguna/daftar.php">
                            <i class="fa fa-user"></i> <span>PENGGUNA</span>
                        </a>
                    </li>
                    <li class="<?php if ($menuactive == "pengumuman") echo "active" ?> treeview">
                        <a href="<?= $url ?>Pages/admin/aksi/pengumuman.php">
                            <i class="fa fa-user"></i> <span>SELEKSI & PENGUMUMAN</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?= "{$url}Fungsi/Aksi/Keluar.php" ?>">
                            <i class="fa fa-user"></i> <span>KELUAR</span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>
<?php       
if(!isset($menuactive)){

}
else {
    if($menuactive == "pengaturan" || $menuactive == "tahunajaran" || $menuactive == "gelombang" || $menuactive == "pengguna" || $menuactive == "pengumuman"){
        if($_SESSION['level'] != 0){
            // echo 0;
           include APP_PATH . 'Pages/forbidden.php';
            die;
            // 
        }
    }
    
    if($menuactive == "semuasiswa"){
        if($_SESSION['level'] != 0 && $_SESSION['level'] != 1){
            include APP_PATH . 'Pages/forbidden.php';
            die;
            // header("Location : {$url}Pages/forbidden.php");
        }
    }
    
    if($menuactive == "siswaditolak"){  
        if($_SESSION['level'] != 0 && $_SESSION['level'] != 1){
            include APP_PATH . 'Pages/forbidden.php';
            die; 
        }
    }
}
?>