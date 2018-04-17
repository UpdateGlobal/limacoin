<!DOCTYPE html>

<html lang="es">

<head>
<? 
include 'includes/head.php'
?>

    <script>
        function sendContact(){
            var valid;
            valid = validateContact();
            if(valid) {
                jQuery.ajax({
                    url: "contact_form.php",
                    data:'nombres='+$("#nombres").val()+'&email='+$("#email").val()+'&telefono='+$("#telefono").val()+'&asunto='+$("#asunto").val()+'&mensaje='+$("#mensaje").val(),
                    type: "POST",
                    success:function(data){
                        $("#mail-status").html(data);
                    },
                    error:function (){}
                });
            }
        }

        function validateContact() {
            var valid = true;
            if(!$("#nombres").val()) {
                $("#nombres").css('background-color','#f28282');
                valid = false;
            }
            if(!$("#email").val()) {
                $("#email").css('background-color','#f28282');
                valid = false;
            }
            if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#email").css('background-color','#f28282');
                valid = false;
            }
            if(!$("#telefono").val()) {
                $("#telefono").css('background-color','#f28282');
                valid = false;
            }
            if(!$("#asunto").val()) {
                $("#asunto").css('background-color','#f28282');
                valid = false;
            }
            if(!$("#mensaje").val()) {
                $("#mensaje").css('background-color','#f28282');
                valid = false;
            }    
            return valid;
        }
    </script>
</head>

<body id="bg">

    <div class="page-wraper">
        	
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
                                <li class="active"><a href="index.php#inicio">Inicio</a></li>
                                <li><a href="index.php#servicios">Servicios<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="casa-de-cambio.php">Casa de Cambio</a></li>
                                        <li><a href="mineria-cloud.php">Minería Cloud</a></li>    
                                    </ul>
                                </li>
                                <li><a href="index.php#nosotros">Nosotros</a></li>
                                <li><a href="index.php#limacoin">Porqué Lima Coin</a></li>
                                <li class="submenu-direction"><a href="index.php#contacto">Contacto</a></li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        </header>

            
        <!-- CONTENT START -->
        <div class="page-content">
            
            <!-- CABECERA -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url('images/banner/limacoin_moneda.jpg');">
                <div class="overlay-main bg-black opacity-03"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white p-t80">CASA DE CAMBIO CRIPTOMONEDAS LIMA COIN</h1>
                    </div>
                </div>
            </div>
            <!-- CABECERA END --> 
                
            <!-- CINTILLO -->                            
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Inicio</a></li>
                        <li>Casa de Cambio</li>
                    </ul>
                </div>
            </div>
            <!--CINTILLO END --> 
            
            <!-- DETALLE DE SERVICIO -->
            <div class="section-full p-tb100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="section-head text-left">
                                <span class="wt-title-subline text-gray-dark font-16 m-b15">¿Sabes donde cambiar tus bitcoin?</span>
                                <h2 class="text-uppercase">CASA DE CAMBIO DE CRIPTOMONEDA LIMA COIN </h2>
                                <div class="wt-separator-outer"><div class="wt-separator bg-primary"></div></div>
                                <p><strong>Nuestro sistema SCRAP garantiza operaciones 100 % EFECTIVAS.</strong></p>
                                <p class="p-justy">
                                Somos peruanos como tú y entendemos lo importante que es tu inversión es por eso que nace
                                Limacoin una casa de cambio que ofrece seguridad confianza y rapidez al momento de comprar o vender Bitcoin y demás criptomonedas. <br>
                                somos un grupo de personas comprometidos en la educación e inversión en las nuevas tendencias tecnológicas que abren un mercado competitivo como son las criptodivisas.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="wt-media">
                                <img src="images/servicios/limacoin_moneda.jpg" alt="" class="img-responsive"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- DETALLE DE SERVICIO END --> 

            <?
             include 'includes/estadisticas.php'
             ?>

            <!-- PORQUÉ INVERTIR EN BITCOIN  -->
            <div class="section-full  p-tb80 bg-gray">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <span class="wt-title-subline font-16 text-gray-dark m-b15">Compra y Venta de Bitcoin</span>
                        <h2 class="text-uppercase">PORQUÉ INVERTIR EN BITCOIN</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-primary"></div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- TITLE END-->  
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="row">
                                    <!-- COLUMNS 1 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="m-b30">
                                            <div class="wt-icon-box-wraper  p-a20 center bg-white ">
                                                <div class="icon-md text-primary m-b15">
                                                    <a href="index-4.html#" class="icon-cell"><img src="images/icon/pick-29.png" alt=""></a>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="wt-tilte text-uppercase font-weight-500">Instant Trading</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 2 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="m-b30">
                                            <div class="wt-icon-box-wraper  p-a20 center bg-white">
                                                <div class="icon-md text-primary m-b15">
                                                    <a href="index-4.html#" class="icon-cell"><img src="images/icon/pick-28.png" alt=""></a>
                                                </div>
                                                <div class="icon-content ">
                                                    <h4 class="wt-tilte text-uppercase font-weight-500">Recurring Buying</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 3 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="m-b30">
                                            <div class="wt-icon-box-wraper  p-a20 center bg-white">
                                                <div class="icon-md text-primary m-b15">
                                                    <a href="index-4.html#" class="icon-cell"><img src="images/icon/pick-17.png" alt=""></a>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="wt-tilte text-uppercase font-weight-500">Safe and Secure</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 4 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="m-b30">
                                            <div class="wt-icon-box-wraper  p-a20 center bg-white">
                                                <div class="icon-md text-primary m-b15">
                                                    <a href="index-4.html#" class="icon-cell"><img src="images/icon/pick-19.png" alt=""></a>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="wt-tilte text-uppercase font-weight-500">Investment Planning</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 5 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="m-b30">
                                            <div class="wt-icon-box-wraper  p-a20 center bg-white">
                                                <div class="icon-md text-primary m-b15">
                                                    <a href="index-4.html#" class="icon-cell"><img src="images/icon/pick-12.png" alt=""></a>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="wt-tilte text-uppercase font-weight-500">Covered By Insurance</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 6 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="m-b30">
                                            <div class="wt-icon-box-wraper  p-a20 center bg-white">
                                                <div class="icon-md text-primary m-b15">
                                                    <a href="index-4.html#" class="icon-cell"><img src="images/icon/pick-38.png" alt=""></a>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="wt-tilte text-uppercase font-weight-500">Bitcoin Transaction</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesg.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="bg-secondry">
                                    <div class="contact-caption p-a30">
                                        <!-- TITLE -->
                                        <div class="text-left text-white">
                                            <h3 class="text-uppercase m-b10 m-t0">Necesitas más información</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesg.</p>
                                        </div>
                                        <!-- TITLE -->                                      
                                        <div class="cons-contact-form"><!--  method="post" action="form-handler2.php"> -->
                                            <div id="mail-status"></div>
                                            <div class="form-group">
                                                <input id="nombres" name="nombres" type="text" required class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input id="email" name="email" type="text" class="form-control" required placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input id="telefono" name="telefono" type="text" class="form-control" required placeholder="Telefono">
                                            </div>
                                            <div class="form-group">
                                                <input id="asunto" name="asunto" type="text" class="form-control" required placeholder="Asunto">
                                            </div>
                                            <div class="form-group">
                                                <textarea id="mensaje" name="mensaje" class="form-control" rows="5" placeholder="Message"></textarea>
                                            </div>
                                            <div>
                                                <button name="submit" onClick="sendContact();" class="site-button skew-icon-btn btn-block">
                                                    <span class="font-18 inline-block text-uppercase p-lr15">Contactarme</span> 
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PORQUÉ INVERTIR EN BITCOIN -->    

        </div>
        <!-- CONTENT END -->
        
<?
include 'includes/footer.php'
?>
    </div>
 
<? 
include 'includes/scripts.php'
?>

</body>

</html>
