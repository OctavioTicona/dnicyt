
<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Bienvenido</title>
		<meta charset="utf-8" />
        <LINK REL="Shortcut Icon" HREF="imagenes/ico/icono_ssi.ico">

	
	</head>
     
     <script type="text/javascript">
var pepe;
function ini() {
  pepe = setTimeout('location="precisaq_sistema/yaykuy_index.php"',1000); // 5 segundos
}
function parar() {
  clearTimeout(pepe);
  pepe = setTimeout('location="precisaq_sistema/yaykuy_indexphp"',1000); // 5 segundos
}

</script>
	<body class="landing" onLoad="ini()" onkeypress="parar()" onclick="parar()">
		<div id="page-wrapper">

			<!-- Header -->
				

			<!-- Banner -->
				<section id="banner">
					<div class="content">
                      <p align="center"><img src="imagenes/logo/logo_azul.png" width="20%" height="auto" alt="minisur"></p>
						
										 
                      
                                          <font size="45">
										   <div align="center">
                                            
                                               <span class="parpadea text">
                                             <strong>Bienvenido al Sistema</strong>
        
                        </div>
         </font>
                                           <p align="center">
                                        <img src="imagenes/logo/cargando2.gif" width="20%" height="auto" alt="cargando"></p>
					    
 
						</header>
					
					</div>
					
		<!-- Scripts -->
		<?php
				include('confi_bd/conexion.php');

	 function obtenerip()
	{
    	if ($_SERVER) 
		{  
       		if ( @$_SERVER["HTTP_X_FORWARDED_FOR"] ) 
	   		{  
           		$realip = @$_SERVER["HTTP_X_FORWARDED_FOR"];  
       		} 
	   		elseif ( @$_SERVER["HTTP_CLIENT_IP"] ) 
	   		{  
           		$realip = @$_SERVER["HTTP_CLIENT_IP"];  
       		}
	   		else 
	   		{  
           		$realip = $_SERVER["REMOTE_ADDR"];  
       	}  
	}
	else 
	{  
    	if ( @getenv( 'HTTP_X_FORWARDED_FOR' ) ) 
		{
        	$realip = @getenv( 'HTTP_X_FORWARDED_FOR' );  
        } 
		elseif ( @getenv( 'HTTP_CLIENT_IP' ) ) 
		{
        	$realip = @getenv( 'HTTP_CLIENT_IP' );  
        } 
		else 
		{  
        	$realip = getenv( 'REMOTE_ADDR' );  
        }
    }
	return $realip;
}
$ipr = obtenerip();
					date_default_timezone_set('America/La_Paz');
		
		$actual = date("Y-m-d H:i:s");
				
$sql="INSERT INTO contador_visitas(cont_ip, cont_fecha) VALUES ('".$ipr."', '".$actual."')";

					$query_update = mysqli_query($con,$sql);
 ?>
	</body>
</html>