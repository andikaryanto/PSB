<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Selamat Datang Admin</title> 
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/ionicons.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/admin-lte.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/admin-skin.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/admin.css" rel="stylesheet" type="text/css">
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
                    <img src="../assets/images/logomusati.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>PANITIA</p>
                    <a href="#"><i class="fa fa-circle text-success"></i>ADMIN MUSATI</a>
                </div>
            </div>

            <ul class="sidebar-menu">
                <li class="header">MENU UTAMA</li>
                <li class="active treeview">
                    <a href="index.php">
                        <i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
                    </a>                   
                </li>
                <li class="treeview">
                    <a href="index.php?halaman=datasiswa">
                        <i class="fa fa-user"></i> <span>DATA SISWA</span>
                    </a>                   
                </li>
                <li class="treeview">
                    <a href="index.php?halaman=datasiswaditerima">
                        <i class="fa fa-user"></i> <span>DATA SISWA DITERIMA</span>
                    </a>                   
                </li>
                <li class="treeview">
                    <a href="insex.php?halaman=datasiswaditolak">
                        <i class="fa fa-user"></i> <span>DATA SISWA DITOLAK</span>
                    </a>                   
                </li>
				<li class="treeview">
                    <a href="../admin/index.php?halaman=keluar">
                        <i class="fa fa-user"></i> <span>KELUAR</span>
                    </a>                   
                </li>
            </ul>
        </section>
    </aside>
    <!-- Left side column. contains the logo and sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                BERANDA
                <small>CONTROL PANEL</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                
                <div class="col-lg-3 col-xs-6">
                </div><!-- ./col -->
            </div><!-- /.row -->
            
            <!-- /.content -->
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="content-utama">
                        BERANDA
                    </div>
                </div>
            </div>
            <!-- /.content -->
            
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; Panitia PSB MUSATI 2019</strong>. All rights reserved.
    </footer>

</div><!-- ./wrapper -->

<script src="../assets/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/app.min.js" type="text/javascript"></script>
</body>
</html>