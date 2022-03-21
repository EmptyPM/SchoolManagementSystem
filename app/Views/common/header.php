<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>School Managment System</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>/resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url() ?>/resources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?= base_url() ?>/resources/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>/resources/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar static-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">School Managment System</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="sidebar-nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>/teacher"><i class="fa fa-fw fa-user"></i> Teachers</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>/parents"><i class="fa fa-fw fa-user"></i> Parents</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>/student"><i class="fa fa-fw fa-user"></i> Students</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>/event"><i class="fa fa-fw fa-user"></i> Events</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>/property"><i class="fa fa-fw fa-user"></i> Properties</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>/classes"><i class="fa fa-fw fa-user"></i> Classes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>/subjects"><i class="fa fa-fw fa-user"></i> Subjects</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>/attendence"><i class="fa fa-fw fa-user"></i> Attendence</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>/exam"><i class="fa fa-fw fa-user"></i> Exams</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>/marks"><i class="fa fa-fw fa-user"></i> Marks</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>logout"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-wrapper py-3">

        <div class="container-fluid">