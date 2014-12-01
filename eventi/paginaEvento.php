<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dettagli evento</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Navigation -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(function () {
            $("#navigation_bar").load("../navigation_bar.html");
            $("#footer").load("../footer.html");
        });
    </script>
</head>
<body>
<div id="navigation_bar"></div>
<!--- Inserimento navbar ---->

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Eventi
                <small>Titolo dell'evento</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="../index.html">Home</a>
                </li>
                <li><a href="listaEventi.html">Eventi</a></li>
                <li class="active">Titolo dell'evento</li>
            </ol>
        </div>
    </div>

    <!-- /.row -->
    <!-- Content Row -->

    <div class="row text-right">
        <a href="calendario.html">Calendario</a>
    </div>


    <!-- /.row -->
    <br>
    <?php
    require 'lib/evento.php';
    $em = new EventiManager();
    $id = $_POST['id'];
    $e = $em->getEventoById($id);
    ?>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-file-text-o"></i>Descrizione</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="pull-left col-md-6 col-sm-7">
                        <h4>Descrizione dell'evento</h4>

                        <p><?php echo $e->descrizione ?></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="pull-left col-md-5 col-sm-5 col-xs-12">
                        <img src="<?php echo $e->link_img ?>" class="img-responsive customer-img" alt="Immagine Evento">
                    </div>
                </div>
            </div>
            <br>
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-clock-o"></i>Luogo e date</h4>
            </div>
            <div class="panel-body">
                Luogo: <?php $e->provincia + ' ' + $e->comune + ' ' + $e->indirizzo ?>
                <br>
                Data inizio evento: <?php $e->inizio ?> alle ore: <?php $e->ora_inizio ?>
                <br>
                Data fine evento: <?php $e->fine ?> alle ore: <?php $e->orario_fine ?>
            </div>

        </div>
    </div>

    <hr>


    <!-- End Footer -->

</div>
<!-- /.container -->

<!-- Footer -->
<div id="footer"></div>
<!--- Inserimento navbar ---->

<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

</body>

</html>
