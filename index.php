<!DOCTYPE html>

<html lang="es">

<head>
<? 
include 'includes/head.php'
?>
</head>

<body id="bg" style="margin-right: 0px;">
 
	<div class="page-wraper"> 

        <!-- ==== header-->
        <header class="site-header header-style-3 topbar-transparent">
            <div class="top-bar">
                <div class="container  hidden-xs hidden-sm">
                    <div class="row">
                        <div class="clearfix">
                            <div class="wt-topbar-left">
                                <ul class="list-unstyled e-p-bx pull-left">
                                    <li><i class="fa fa-envelope"></i>mail@limacoin.com</li>
                                    <li><i class="fa fa-phone"></i>(511) 321-7654</li>
                                </ul>
                            </div>
                            
                            <div class="wt-topbar-right">
                                    <ul class="social-icons social-square social-darkest">
                                    <li><i class="fa fa-envelope"></i>Síguenos en: &nbsp</li>
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar">
                    <div class="container">
                        
                            <div class="logo-header mostion">
                                <a href="index.php">
                                    <img src="images/logo-light.png" width="230" height="67" alt="" />
                                </a>
                            </div>

                            <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="header-nav navbar-collapse collapse smooth-scroll">
                            <ul class=" nav navbar-nav smooth-scroll">
                                <li class="active"><a href="#inicio" class="scroll" data-speed="2000">Inicio</a></li>
                                <li><a href="index.php#servicios">Servicios<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="casa-de-cambio.php">Casa de Cambio</a></li>
                                        <li><a href="mineria-cloud.php">Minería Cloud</a></li>    
                                    </ul>
                                </li>
                                <li><a href="#nosotros" class="scroll" data-speed="2000" >Nosotros</a></li>
                                <li><a href="#limacoin" class="scroll" data-speed="2000">Porqué Lima Coin</a></li>
                                <li class="submenu-direction"><a href="#contacto" class="scroll" data-speed="2000">Contacto</a></li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        </header>

       	<!-- ==== header-->
                

            <div class="page-content">
            
                <?php
                    include 'layout/slider.php';
                    include 'layout/somos.php';
                    include 'layout/servicios.php';
                    include 'layout/trabajaconlima.php';
                    include 'layout/contacto.php';
                ?>
                        
            </div>

                <?
                    include 'includes/footer.php'
                ?>       
    </div>
                <? 
                    include 'includes/scripts.php'
                ?>


</body>

</html>
