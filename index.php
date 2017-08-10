<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-garbage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 <?php include 'header.php';?>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>A small step towards clean city</h1>
            <h3>E-garbage monitoring system</h3>
            <br>
            <a href="#" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>View the status of all three Dustbins simultaneously <a href="http://localhost/E-garbage/show_all.php">here</a></h2>
                    <p class="lead">Or Scroll down to browse one by one.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

     

    <!-- Callout -->
    <aside class="callout">
        <div class=" row  ">
             <div class="col-lg-4"> 
                <?php 
                       $ali = " Library & IS LAB";
                       $url = "http://localhost/E-garbage/bin_graph.php?id=bin1&alias=".urlencode($ali); ?>
                        <a href="<?php echo $url;?>">
                        <img src="img/bin1.png" height="400px"/></a>
                       <div style="position:relative;top:-100px;left:140px;font-size:40pt;">
                            <h4><strong>DUSTBIN-1</strong></h4>
                                    <h4>Id_No:12AD34</h4>
                                     <h4>Distance:12Km</h4>
                                    <h4>Alias: Library & IS LAB</h4>
                                   
                                    <a href="<?php echo $url;?>" class="btn btn-light">Learn More</a>
                      </div>
            </div>

             <div class="col-lg-4"> 
                <?php 
                                   $ali = " Data Center & PG Block";
                                   $url = "http://localhost/E-garbage/bin_graph.php?id=bin2&alias=".urlencode($ali); ?>
                        <a href="<?php echo $url;?>">
                         <img src="img/bin3.png" height="400px"/></a>
                             <div style="position:relative;top:-100px;left:140px;font-size:40pt;">
                            <h4><strong>DUSTBIN-2</strong></h4>
                                    <h4>Id_No:12AD35</h4>
                                    <h4>Distance:22Km</h4>
                                    <h4>Alias: Data Center & PG Block</h4>
                                    
                                
                                    <a href="<?php echo $url;?>" class="btn btn-light">Learn More</a></div>

            </div>

              <div class="col-lg-4">

                <?php
                    $ali = " Placement Office";
                    $url = "http://localhost/E-garbage/bin_graph.php?id=bin3&alias=".urlencode($ali); ?>

                    <a href="<?php echo $url;?>">
                   <img src="img/bin2.png" height="400px"/></a>
                        <div style="position:relative;top:-100px;left:140px;font-size:40pt;">
                        <h4><strong>DUSTBIN-3</strong></h4>
                            <h4>Id_No:12AD36</h4>
                            <h4>Distance:18Km</h4>
                            <h4>Alias: Placement Office</h4>
                            

                                    <a href="<?php echo $url;?>" class="btn btn-light">Learn More</a>                        </div>
                </div>

        </div>
    </aside>



    <!-- Portfolio -->
    <section   >
        <div class="container" id="ourwork">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                     
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

   
        
            <div class="row" id="contact">
                <div class="col-lg-12" style="color:white; background-color:black;width: 100%; height:300px;background-image: url(); background-size: 100% 100%;">
                    <div style="position:relative;left:35%">
                    <h2><strong>E-Garbage Monitoring system</strong>
                    </h2>
                    <div style="position:relative;left:10%;">
                    <h4> Vasant Hegde
                        <br> Pukar Acharya</h4>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> 7411647580</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">vasant@e-garbage.com</a>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">pukar@e-garbage.com</a>

                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        
                         <p class="text-muted">Copyright &copy; e-garbage.com 2016</p>
                    </ul>
                    
                    </div>
                </div>
            </div>
            </div>
    
 
 
    
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
     
    

</body>

</html>
