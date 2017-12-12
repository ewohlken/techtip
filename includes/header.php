<?php 
function title_tag() {
    switch ($_SERVER['REQUEST_URI']) {
        case '/physician-finder/':
            echo 'VelaShape | Physician Finder';
            break;
        case '/physician-contact/':
            echo 'VelaShape | Physician Contact Request';
            break;
        case '/moa/':
            echo 'VelaShape | MOA';
            break;
        case '/results/':
            echo 'VelaShape | Results';
            break;
        case '/testimonials/':
            echo 'VelaShape | Testimonials';
            break;
        case '/thank-you-for-contacting-us/':
            echo 'VelaShape | Thank You';
            break;
        case '/thank-you-for-registering/':
            echo 'VelaShape | Thank You for Registering';
            break;
        case '/what-velashape-does/':
            echo 'VelaShape | What VelaShape Does';
            break;
        case '/what-is-velashape/':
            echo "VelaShape | What is VelaShape";
            break;
        default:
            echo "VelaShape | Smoother - Sexier Figure";
    }
}
?>


<!doctype html>
<html>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PJQ4WZ6');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=yes">
    <meta name="keywords" content="cellulite, body contouring, velashape">
    <meta name="description" content="Non-invasive body contouring treatment for circumferential and cellulite reduction">
    <title><?php title_tag() ?></title>
    
     <!-- FAVICON AND APPLE TOUCH -->    
    <link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-180x180.png">
    
    <!-- FAVICON AND APPLE TOUCH -->  
    <link rel="shortcut icon" href="../favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-180x180.png">
    
    <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,300">-->     
    <link rel="stylesheet" href="/dist/styles.css">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJQ4WZ6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
	<div id="page-wrapper">
        
        <!-- HEADER -->
        <header>
			<div id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<!-- LOGO -->
							<a id="logo" href="/">
								<img src="/assets/images/logo.png" alt="">
							</a>
						</div><!-- col -->
						<div class="col-sm-10">
							<!-- MENU --> 
							<nav>
								<a id="mobile-menu-button" href="#"><i class="mt-icons-menu"></i></a>
								<!-- what is velashape-->			 
								<ul class="menu clearfix" id="menu">
									<li class="dropdown"><a href="/what-is-velashape">WHAT IS VELASHAPE</a>	
                                    <ul>
                                    <li><a href="/what-is-velashape">WHAT IS VELASHAPE</a></li>
                                    </ul>								
									</li>
                                <!-- end what is velashape-->	
                                
                                <!--What it does-->         
									<li class="dropdown"><a href="/what-velashape-does">WHAT VELASHAPE DOES</a>
									  <ul>
											<li><a href="/what-velashape-does">WHAT VELASHAPE DOES</a></li>
											<li><a href="/moa">MECHANISM OF ACTION</a></li>
										</ul>
									</li>
                            <!--end what it does-->       
                                
                                <!-- Results -->	   									
									<li class="dropdown">
										<a href="/results">RESULTS AND TESTIMONIALS</a>
										<ul>
											<li><a href="/results">RESULTS</a></li>
											<li><a href="/testimonials">TESTIMONIALS</a></li>
									 	</ul>
									</li>
                            <!--end results-->                            
                            <!--testimonials-->           
									<li class="dropdown">
										<a href="/physician-finder">PHYSICIAN FINDER</a>
										<ul>											
											<li><a href="/physician-finder">PHYSICIAN FINDER</a></li>
									 	</ul>
									</li>
                             <!--end testimonials-->         
								</ul>
							</nav>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->
			</div><!-- header -->
        </header><!-- HEADER -->