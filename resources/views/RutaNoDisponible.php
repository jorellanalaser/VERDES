<!doctype html>
    <html lang="es">
    <!-- ***************************************************
    ****							  				    ****
    ****    Esta pagina fue elaborada por David Lanz    ****
    ****                29/11/2018                      ****
    ****											    ****
    **************************************************** -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Laser Airlines">
        <meta name="abstract" content="Laser Airlines"><meta name="author" content="David Lanz">
            <title>Laser Airlines</title>
				<style type="text/css">
                    body, html {
                        height: 80%;
						width: 100%;
						background-color: white;
                    }
					.fondo {
						height: 50%;
						width: auto;
						position: relative;
                    }
					.boton {
						height: 60px;
						width: 200px;
						position: relative;
						opacity: 1;
						overflow: visible;
						visibility: visible;
					}
                </style>
    </head>
    <BODY oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
        <!-- ************************************************
		****								             ****
		****  Deshabilita el Click Derecho en la página  ****
		****         protegiendo su codigo fuente	     ****
		****								             ****
		************************************************** -->
    <script language="JavaScript">
		    var msg="¡ATENCIÓN! - El botón derecho está desactivado para este sitio. Copyright 2018 - Laser Airlines";
		    	function disableIE() {
		        if (document.all) {
		            alert(msg);return false;
		        }
		    }
		    function disableNS(e) {
		        if (document.layers||(document.getElementById&&!document.all)) {
		            if (e.which==2||e.which==3) {
		                alert(msg);return false;
		            }
		        }
		    }
		    if (document.layers) {
		        document.captureEvents(Event.MOUSEDOWN);
		        document.onmousedown=disableNS;
		    } 
		    else {
		        document.onmouseup=disableNS;
		        document.oncontextmenu=disableIE;
		    }
		    document.oncontextmenu=new Function("alert(msg);return false")
		</script>
        <section id="fondo">
        	<nav>
                <center><img src="../img/Compra_LaserAirlines_RutaNoDisponible.png" width="1350" height="543"  alt=""/></center>
                <div id="boton">
                    <center><input type="button" class="boton" onclick="location.href='http://laserairlines.com';" value="Regresar al Inicio" /></center>
                </div>
            </nav>
        </section>
    </body>
</html>