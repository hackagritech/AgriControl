<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AgriControl - Você no controle </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>

    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>
    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyAY4r6NANC3JP2BYApUiIHyWk2iZZYQ00I",
            authDomain: "agricontrol-7a254.firebaseapp.com",
            databaseURL: "https://agricontrol-7a254.firebaseio.com",
            projectId: "agricontrol-7a254",
            storageBucket: "agricontrol-7a254.appspot.com",
            messagingSenderId: "570810032869",
            appId: "1:570810032869:web:36cbcb546c36f9ad89aa0c"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        var db = firebase.firestore();
    </script>
</head>
<body class="sidebar-mini skin-black">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white  skin-white">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-th-large"></i>
                </a>
                <div class="dropdown-menu  dropdown-menu-right">
                    <!--                    <div class="dropdown-divider"></div>-->
                    <a href="/" class="dropdown-item dropdown-footer">Sair</a>
                </div>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="dashboard.php" class="brand-link" style="background: #ffff;">
            <img src="../../images/logo-agricontrol.png" style="max-width: 120px;">
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link">
                            <i class="nav-icon fa fa-chart-line"></i>
                            <p>Relatórios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="prescricao-agronomo.php" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Prescrição Agronomico</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper">
