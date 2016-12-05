<?php 
    session_start();
    $_SESSION['user'] = "admin";
    if(!isset($_SESSION['user'])){
        echo "<script>window.location.replace('../../index.php')</script>"; 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Virtual Money</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="../js/function.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootbox.js"></script>
    
    <!-- Plugin for datatable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.bootstrap.js"></script>
    
</head>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Virtual Money</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> ADMIN <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" id="btnthoat" type="submit" name="remove_levels_h"><i class="fa fa-fw fa-power-off" > </i>Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li id="bangdieukhien">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Thông tin cá nhân</a>
                    </li>
                    <li id="danhsachmua">
                        <a href="danhsachmua.php"><i class="fa fa-fw fa-cloud-download"></i> Danh sách mua</a>
                    </li>
                    <li id="danhsachban">
                        <a href="danhsachban.php"><i class="fa fa-fw fa-cloud-download"></i> Danh sách bán</a>
                    </li>
                    <li id="quanlytigia">
                        <a href="quanlytigia.php"><i class="fa fa-fw fa-cloud-download"></i> Quản lý tỷ giá</a>
                    </li>
                    <li id="logout">
                        <!--<a href="#" id="btnDelete" type="submit" name="remove_levels"><i class='fa fa-fw fa-sign-out'> </i>Thoát</a>-->
                        <a href="#" id="btnlogout" type="submit" name="remove_levels"><i class="fa fa-fw fa-sign-out" > </i>Thoát</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>