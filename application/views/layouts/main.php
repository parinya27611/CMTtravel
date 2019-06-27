<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo site_url('resources/assets/img/travel.ico');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>CMTravel</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo site_url('resources/assets/css/bootstrap.min.css');?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo site_url('resources/assets/css/animate.min.css');?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo site_url('resources/assets/css/light-bootstrap-dashboard.css?v=1.4.0');?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo site_url('resources/assets/css/demo.css');?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo site_url('resources/assets/css/pe-icon-7-stroke.css');?>" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo site_url('resources/assets/img/sidebar-5.jpg');?>">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    CMTravel ADMIN
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo site_url('user/index');?>">
                        <i class="pe-7s-user"></i>
                        <p>USER</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('type/index');?>">
                        <i class="pe-7s-science"></i>
                        <p>TYPE</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('travel/index');?>">
                        <i class="pe-7s-map-marker"></i>
                        <p>TRAVEL</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('image/index');?>">
                        <i class="pe-7s-photo-gallery"></i>
                        <p>IMAGE</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('contact/index');?>">
                        <i class="pe-7s-chat"></i>
                        <p>CONTACT</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse"></div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">            
                <?php                    
                if(isset($_view) && $_view)
                $this->load->view($_view);
                ?> 
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo site_url('resources/assets/js/jquery.3.2.1.min.js" type="text/javascript');?>"></script>
    <script src="<?php echo site_url('resources/assets/js/bootstrap.min.js');?>" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo site_url('resources/assets/js/chartist.min.js');?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo site_url('resources/assets/js/bootstrap-notify.js');?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo site_url('resources/assets/js/light-bootstrap-dashboard.js?v=1.4.0');?>"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="<?php echo site_url('resources/assets/js/demo.js');?>"></script>


</html>
