<!DOCTYPE html>

<html lang="es">

<head>
<? 
include 'includes/head.php'
?>
</head>

<body id="bg" style="margin-right: 0px;">
 
	<div class="page-wraper"> 
       	
                <?
                 include 'includes/header.php';
                ?>

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
