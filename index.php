<?php
session_start();
?>

<!DOCTYPE html>
<!--
    Copyright (c) 2012-2014 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <!--<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />-->
		<meta name="viewport" content="user-scalable=no, target-densitydpi=device-dpi">
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <title>WFC 2015</title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css">
        
        <script src="js/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script>
        <script type="text/javascript" charset="utf-8" src="cordova.js"></script>

<script type="text/javascript" charset="utf-8">
    var pictureSource;   // picture source
    var destinationType; // sets the format of returned value
    document.addEventListener("deviceready",onDeviceReady,false);
    function onDeviceReady() {
        pictureSource=navigator.camera.PictureSourceType;
        destinationType=navigator.camera.DestinationType;
    }
    function onPhotoDataSuccess(imageData) {
      var smallImage = document.getElementById('smallImage');
      smallImage.style.display = 'block';
      smallImage.src = "data:image/jpeg;base64," + imageData;
    }
    function onPhotoURISuccess(imageURI) {
      var largeImage = document.getElementById('largeImage');
      largeImage.style.display = 'block';
      largeImage.src = imageURI;
    }
    function capturePhoto() {
      navigator.camera.getPicture(onPhotoDataSuccess, onFail, { quality: 50,
        destinationType: destinationType.DATA_URL });
    }
    function onFail(message) {
      alert('Failed because: ' + message);
    }

</script>

    </head>
    
    <body style="min-width:750px" onLoad="iniciar()">
        

 <!--///////////INICIO///////////-->
        	
            <div id="screem" style="opacity:0.0; display:none">
                <img src="imagenes/fondo.jpg" width="100%" height="100%" alt="fondo" style="position:absolute"/>
                <div class="plecas" style="top:0px;">
                    <img src="imagenes/plecas.png" style="height:100%; position:absolute"/>
                </div>
                <div id="pleca_abajo" class="plecas" style="top:100%;">
                    <img src="imagenes/plecas.png" style="height:100%; position:absolute"/>
                </div>
                <img id="logo" src="imagenes/logo.png"/>
                <img id="cargar" src="imagenes/cargar.png"/>
                <div id="naranja"></div> 
                <div id="cargando" class="texto_carbon">CARGANDO</div>
            </div>

 
 <!--///////////LOGIN///////////-->           
  
            
            <div id="login" style="min-height:800px; display:none;"> 
            <div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
  			   <img src="imagenes/fondo3.jpg" width="100%" height="100%" alt="fondo" style="position:absolute"/>
  			  <div class="plecas2" style="top:0px">
  				<img src="imagenes/plecas.png" style="height:100%; position:absolute"/>
  			  </div>
              <div class="boton_login"> <img src="imagenes/log.png" height="100%"/> </div>
              <div class="tes texto_carbon" style="top:11%; font-size:4rem; line-height:4rem">SIGN IN TO<br>
                CONTINUE</div>
              <div class="tes_chico" style="top:30%; opacity:0.0">.</div>
              <div class="tes_chico texto_helvetica" style="top:30%; font-size:1.5rem">Use the same info with wich was<br>
                registred in the congress.</div>
              <div id="resp" class="tes_chico texto_helvetica" style="top:62%; font-size:2rem; display:none; font-size:1.2rem">*Forgot your password? Press here.</div>
              
              <div class="plecas2" style="top:79%; margin-top:-6px;">
                <img src="imagenes/plecas.png" style="height:100%; position:absolute"/>
              </div>
              <div id="boton_linkedin" class="bt_blanco texto_helvetica" style="top:86%; margin-top:-4px;">
                <div class="t_bt_log tes_chico2" style="font-size:1.7rem">Log in usign linkedIn</div>
                <img src="imagenes/flechita.png" style="position:absolute; height:40%; top:30%; position:absolute; left:90%"/>
              </div>
              <div id="boton_registro" class="bt_blanco texto_helvetica" style="top:93%; margin-top:-2px;">
                <div class="t_bt_log tes_chico2" style="font-size:1.5rem">New to WFC 2015 Sign up now!</div>
                <img src="imagenes/flechita.png" style="position:absolute; height:40%; top:30%; position:absolute; left:90%"/>
              </div>
              <form name="forma_login" id="forma_login" method="post" action="http://marlonruo.com/wfc2015/phps/enviar_login.php">
              <div class="email_caja">
                    <input id="email" name="email" type="text" class="email_caja_campo" value="E-mail" onFocus="borrar()" onBlur="checar()" style="font-size:1.9rem">
              </div>
              <div class="pass_caja">
                    <input id="pass" name="pass" type="text" class="pass_caja_campo" value="Password" onFocus="borrar2()" onBlur="checar2()" style="font-size:1.9rem">
              </div>
              		<input id="bt_login" type="submit" style="background:none; border:none; background:url(imagenes/bt_login.png) no-repeat; background-position:center; background-size:auto 90%" value="">
              </form>
              <div class="email_error" style="visibility:hidden">
                <img id="im_error" src="imagenes/error_email.png" height="100%"/>
              </div>
              <div class="pass_error" style="visibility:hidden">
                <img src="imagenes/error_pass.png" height="100%"/>
              </div>
        </div>
		</div> <!--///////////fin login///////////--> 
        
        
        <iframe id="linkedd" style="position:absolute; width:100%; height:100%; border:none;" scrolling="no" frameborder="0" style="display:none"></iframe>
   
   		 <script>
		 
		 
		 $('#boton_linkedin').click(function(){
			$('#linkedd').fadeIn() 
			document.getElementById('linkedd').src = "http://marlonruo.com/wfc2015/login.php"
		 })
		 
		$('#forma_login').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                	if(data=="no pasa"){
						$('#resp').fadeIn()
						$('#resp').html('*Forgot your password? Press here.');
						$('.email_error').css('visibility','visible')
						document.getElementById('email').value=''
						$('.pass_error').css('visibility','visible')
						document.getElementById('pass').value=''
					}else{
						$('#resp').fadeOut()
						  window.location.href = '#home'
						  $('#login').fadeOut(400)
						  $('#home').fadeIn(400)
						  ini_hom()
					}
					
					//var id_us = document.getElementById("respuesta").innerHTML
					/*if(id_us == "no pasar"){
						document.getElementById('respuesta').innerHTML='este correo <font color="#000000">ya ha sido utilizado</font>';
					}else{
						
					}*/
            }
        })
        
        return false;
   	 	});
		 
		 function borrar(){
			if(document.getElementById('email').value=='E-mail'){
				document.getElementById('email').value=''
			}
			$('.email_error').css('visibility','hidden')
		}
		function checar(){
			if(document.getElementById('email').value==''){
				document.getElementById('email').value='E-mail'
			}
		}
		function borrar2(){
			if(document.getElementById('pass').value=='Password'){
				document.getElementById('pass').value=''
			}
			$('#pass').attr('type','password');
			$('.pass_error').css('visibility','hidden')
		}
		function checar2(){
			if(document.getElementById('pass').value==''){
				document.getElementById('pass').value='Password'
				$('#pass').attr('type','text');
			}
		}
		
		$("#entrar").click(function(){
		  if(document.getElementById('email').value=='E-mail' || document.getElementById('pass').value=='Password'){
				if(document.getElementById('email').value=='E-mail'){
					$('.email_error').css('visibility','visible')
					document.getElementById('email').value=''
				}
				if(document.getElementById('pass').value=='Password'){
					$('.pass_error').css('visibility','visible')
					document.getElementById('pass').value=''
				} 
		  }else{
		  	window.location.href = 'home.html'
		  }
	    });
		
		$('.email_error').click(function(){
			$('.email_error').css('visibility','hidden')
			document.getElementById('email').focus()
		});
		$('.pass_error').click(function(){
			$('.pass_error').css('visibility','hidden')
			document.getElementById('pass').focus()
		});
		 
		 
		 
         	
		 
         </script>
   
   
   
        
  <!--///////////REGISTRO///////////-->         
        
        <div id="registro" style="display:none; min-height:800px">
        	<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
                <img src="imagenes/fondo4.jpg" width="100%" height="100%" alt="fondo" style="position:absolute"/>

              <div id="t_reg" class="texto_carbon">REGISTER AN<br>ACCOUNT</div>
              <div id="t_ple" class="texto_helvetica" style="display:none">* Password does not match</div>
          
           
              <img id="pass2" src="imagenes/pass.png"/>
              <img class="campo" src="imagenes/campo.png" style="top:22%"/>
           	  
              <form name="forma_registro" id="forma_registro" method="post" action="http://marlonruo.com/wfc2015/phps/enviar.php">
              <div class="caja" style="top: 22%;">
           		<input id="f_nombre" name="nombre" type="text" class="caja_campo" value="First name" onFocus="fborrar1()" onBlur="fchecar1()">
              </div>
              <div class="caja" style="top: 30.6%;">
           		<input id="f_apellido" name="apellido" type="text" class="caja_campo" value="Last name" onFocus="fborrar2()" onBlur="fchecar2()">
              </div>
              <div class="caja" style="top: 39.4%;">
           		<input id="f_telefono" name="telefono" type="text" class="caja_campo" value="Phone number" onFocus="fborrar3()" onBlur="fchecar3()">
              </div>
              <div class="caja" style="top: 48.4%;">
           		<input id="f_email" name="correo" type="text" class="caja_campo" value="E-mail" onFocus="fborrar4()" onBlur="fchecar4()">
              </div> 
              <div class="caja" style="top: 60%;">
           		<input id="f_pass" name="pass" type="text" class="caja_campo" value="Password" onFocus="fborrar5()" onBlur="fchecar5()">
              </div> 
              <div class="caja" style="top: 68.5%;">
           		<input id="f_pass2" name="pass2" type="text" class="caja_campo" value="Confirm your password" onFocus="fborrar6()" onBlur="fchecar6()">
              </div>   
              <input type="submit" id="bt_registro" style="cursor:pointer" value="">
              </form>

              </div>
		</div>
        
        
        
 
  <!--///////////EXITO///////////-->
        
        
        <div id="exito" style="opacity:0.0; min-height:800px; display:none">
        	<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
                <img src="imagenes/fondo4.jpg" width="100%" height="100%" alt="fondo" style="position:absolute"/>

              <div id="t_exi" class="texto_carbon">YOUR REGISTRATION<br>WAS SUCCESSFUL</div>
              <div id="t_here" class="texto_helvetica">Here is your QR code that will<br>give you acces to events.</div>
           
                
                <iframe id="if_qr" style="position:absolute; width:314px; height:314px; border:none; background-color:#fff; top:50%; left:50%; margin-left:-157px; margin-top:-140px;" scrolling="no" frameborder="0"></iframe>
                <img id="bt_start" src="imagenes/bt_start.png"/>
            </div>
		</div>
        
        
        <script>
		
        $('#forma_registro').submit(function() {
		
		var email = document.getElementById("f_email").value
		
		if(document.getElementById("f_nombre").value == 'First name'){
			$('#t_ple').fadeIn()
			$('#t_ple').html('* Name required')
      		return false;
		}
		if(document.getElementById("f_apellido").value == 'Last name'){
			$('#t_ple').fadeIn()
			$('#t_ple').html('* Last name required')
      		return false;
		}
		
		var filtro = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;	
		if (!filtro.test(email)) {
			$('#t_ple').fadeIn()
			$('#t_ple').html('* Checks the e-mail')
		   return false;
		}
		if(document.getElementById("f_pass").value != document.getElementById("f_pass2").value){
			$('#t_ple').fadeIn()
			$('#t_ple').html('* Password does not match')
      		return false;
		}
		if(document.getElementById("f_telefono").value == 'Phone number'){
			document.getElementById("f_telefono").value = ""
		}
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
				
					document.getElementById('if_qr').src = "qr.php?datos="+document.getElementById("f_nombre").value+", "+document.getElementById("f_apellido").value+", "+document.getElementById("f_email").value+", "+document.getElementById("f_telefono").value
                	
				  window.location.href = '#exito'
				  $('#exito').fadeIn(400)
				  $('#registro').fadeOut(400)
				  ini_exi()

					
					//$('#respuesta').html(data);
					//var id_us = document.getElementById("respuesta").innerHTML
            }
        })
        return false;
    }); 
        
        function fborrar1(){
			if(document.getElementById('f_nombre').value=='First name'){
				document.getElementById('f_nombre').value=''
			}
		}
		function fchecar1(){
			if(document.getElementById('f_nombre').value==''){
				document.getElementById('f_nombre').value='First name'
			}
		}
		function fborrar2(){
			if(document.getElementById('f_apellido').value=='Last name'){
				document.getElementById('f_apellido').value=''
			}
		}
		function fchecar2(){
			if(document.getElementById('f_apellido').value==''){
				document.getElementById('f_apellido').value='Last name'
			}
		}
		function fborrar3(){
			if(document.getElementById('f_telefono').value=='Phone number'){
				document.getElementById('f_telefono').value=''
			}
		}
		function fchecar3(){
			if(document.getElementById('f_telefono').value==''){
				document.getElementById('f_telefono').value='Phone number'
			}
		}
		function fborrar4(){
			if(document.getElementById('f_email').value=='E-mail'){
				document.getElementById('f_email').value=''
			}
		}
		function fchecar4(){
			if(document.getElementById('f_email').value==''){
				document.getElementById('f_email').value='E-mail'
			}
		}
		function fborrar5(){
			if(document.getElementById('f_pass').value=='Password'){
				document.getElementById('f_pass').value=''
			}
			$('#f_pass').attr('type','password');
		}
		function fchecar5(){
			if(document.getElementById('f_pass').value==''){
				document.getElementById('f_pass').value='Password'
				$('#f_pass').attr('type','text');
			}
		}
		function fborrar6(){
			if(document.getElementById('f_pass2').value=='Confirm your password'){
				document.getElementById('f_pass2').value=''
			}
			$('#f_pass2').attr('type','password');
		}
		function fchecar6(){
			if(document.getElementById('f_pass2').value==''){
				document.getElementById('f_pass2').value='Confirm your password'
				$('#f_pass2').attr('type','text');
			}
		}
        </script>
        

        
  <!--///////////HOME///////////-->        
        
        
        <div id="home" style="opacity:0.0; min-height:800px; display:none">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
              <div style="height:44%; position:absolute; width:100%; background-color:#fff;">
           			<div style="width:22%; height:7%; position:absolute; right:5%; top:2%">
                    	<img id="salir" src="imagenes/salir.png" height="100%" style="position:absolute; right:0%; cursor:pointer"/>
                    </div>
                    <div style="width:40%; height:10%; position:absolute; left:5%; top:9%">
                    	<img id="casita" src="imagenes/casita.png" height="100%" style="position:absolute"/>
                        <div id="t_hom" class="texto_carbon">HOME</div>
                    </div>
                <div class="plecas3" style="top:30%;">
                        <img src="imagenes/plecas.png" style="height:100%; position:absolute"/>
                    </div>
                    
                <div id="t_wel" class="texto_helvetica">Welcome to the official app of the<br><b>Global Conference of Central<br>Securities Depositories</b>, WFC 2015.
</div>
                    
                <div class="plecas3" style="top:90%;">
                        <img src="imagenes/plecas.png" style="height:100%; position:absolute"/>
                    </div>
          	  </div>
              <div id="boton_horarios" class="bt_home" style="background-color:#7bcdcb; top:46%; margin-top:-10px; cursor:pointer">
              	  <img src="imagenes/icono1.png" class="iconos"/>
                  <div class="texto_carbon t_bthome">SCHEDULES</div>
              </div>
              <div id="boton_expositores" class="bt_home" style="background-color:#8dc63f; top:55%; margin-top:-8px; cursor:pointer">
              	  <img src="imagenes/icono2.png" class="iconos"/>
                  <div class="texto_carbon t_bthome">SPEAKERS</div>
              </div>
              <div id="boton_mapa" class="bt_home" style="background-color:#008dc4; top:64%; margin-top:-6px; cursor:pointer">
              	  <img src="imagenes/icono3.png" class="iconos"/>
                  <div class="texto_carbon t_bthome">MAP</div>
              </div>
              <div id="boton_social" class="bt_home" style="background-color:#f7941e; top:73%; margin-top:-4px; cursor:pointer">
                  <img src="imagenes/icono4.png" class="iconos"/>
                  <div class="texto_carbon t_bthome">SOCIAL</div>
              </div>
              <div id="boton_qr" class="bt_home" style="background-color:#df0388; top:82%; margin-top:-2px; cursor:pointer">
              	  <img src="imagenes/icono5.png" class="iconos" style="height:50%; top:25%"/>
                  <div class="texto_carbon t_bthome">QR CODES</div>
              </div>
              <div id="boton_share" class="bt_home" style="background-color:#85358b; top:91%">
                  <img src="imagenes/icono6.png" class="iconos" style="height:45%; top:27%; cursor:pointer"/>
                  <div class="texto_carbon t_bthome">SHARE YOUR EXPERIENCE</div>
              </div>
   			</div>
		</div>
        
        
        
<!--------------------HORARIOS------------------>        
        
        
  <div id="horarios" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios">SHEDULES</div>
                        <div class="texto_neo fecha_horarios">May 2015</div>
                    </div> 
                    <div id="dia1" class="dia" style="background-color:#ebfbfc">
                    	 <div class="texto_neo dia_dia">
                         	  <div class="day texto_neo" style="color:#e30b90">Day</div>
                              <div class="day_numero texto_neo" style="color:#e30b90"><b>01</b></div>
                         </div>
                         <div class="dia_linea"></div>
                         <div class="dia_fecha">
                         	   <div class="day_fecha texto_neo"><span style="color:#e30b90">Wednesday, 20</span><br>May 2015</div>
                         </div>
                         <div class="dia_flecha"></div>
                    </div>
                    
                    
                    <div id="dia2" class="dia">
                    	  <div class="texto_neo dia_dia">
                         	  <div class="day texto_neo" style="color:#7ec773">Day</div>
                              <div class="day_numero texto_neo" style="color:#7ec773"><b>02</b></div>
                         </div>
                         <div class="dia_linea"></div>
                         <div class="dia_fecha">
                         	   <div class="day_fecha texto_neo"><span style="color:#7ec773">Thursday, 21</span><br>May 2015</div>
                         </div>
                         <div class="dia_flecha"></div>
                    </div>
                    
                    
                    <div id="dia3" class="dia" style="background-color:#ebfbfc">
                    	  <div class="texto_neo dia_dia">
                         	  <div class="day texto_neo" style="color:#9f6ead">Day</div>
                              <div class="day_numero texto_neo" style="color:#9f6ead"><b>03</b></div>
                         </div>
                         <div class="dia_linea"></div>
                         <div class="dia_fecha">
                         	   <div class="day_fecha texto_neo"><span style="color:#9f6ead">Friday, 22</span><br>May 2015</div>
                         </div>
                         <div class="dia_flecha"></div>
                    </div>
                    
                    
              </div>

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
              
             
   			</div>
		</div>  
        
        
 
  
 
 
 <!--------------------HORARIOS DIA1------------------>
 
 
 
 <div id="dia_uno" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios2a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios2a">Wednesday, 20 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center">Day</div>
                            <div class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">01</div>
                        </div> 
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b>Registration</b></div>
                    </div>
                    
                    <div class="horario_conferencia">
                    	<div class="horario_temas"><b>Meeting of the World Forum of CSDs (WFC) Board</b></div>
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b>Lunch</b></div>
                    </div>>
                    
                    <div id="bt_tema1"  class="horario_conferencia horario_conferencia_flecha">
                    	<div class="horario_temas"><b>Welcoming remarks</b></div>
                    </div>
                    
                    <div id="bt_tema2" class="horario_conferencia horario_conferencia_flecha" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b>Keynote address:</b><br><span style="color:#333">View of the Global Securities</span></div>
                    </div>
                    
                    <div id="bt_tema3" class="horario_conferencia horario_conferencia_flecha">
                    	<div class="horario_temas"><b>Session 1: </b><br><span style="color:#333">Promoting settlement efficiency and the move to shorter settlement cycles</span></div>
                    </div>
                    
                    <div id="bt_tema4" class="horario_conferencia horario_conferencia_flecha" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b>Session 2:</b><br><span style="color:#333">Collateral Management</span></div>
                    </div>

              </div>

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
              
 			</div>
		</div>



 <!--------------------HORARIOS DIA2------------------>
 
 
 
 <div id="dia_dos" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios3a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios3a">Thursday, 21 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita2" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita2" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">02</div>
                        </div>  
                    </div>
                    
                    <div id="bt_tema5" class="horario_conferencia horario_conferencia_flecha" style="background-color:#ebfbfc">
                    	<div class="horario_temas" style="color:#7ec773"><b>Keynote address:</b><br><span style="color:#333">“Importance of the Payment System in Mexico from the Central Bank perspective”</span></div>
                    </div>
                    
                    <div id="bt_tema6" class="horario_conferencia horario_conferencia_flecha">
                    	<div class="horario_temas"><b style="color:#7ec773">Session 3:</b><br><span style="color:#333">CPSS IOSCO</span></div>
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b style="color:#7ec773">Refreshment Break</b></div>
                    </div>
                    
                    <div id="bt_tema7" class="horario_conferencia horario_conferencia_flecha">
                    	<div class="horario_temas"><b style="color:#7ec773">Session 4:</b><br><span style="color:#333">Prevention of Fraud / Security Threats</span></div>
                    </div>
                    
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b style="color:#7ec773">Lunch</b></div>
                    </div>
                    
                    <div id="bt_tema8" class="horario_conferencia horario_conferencia_flecha">
                    	<div class="horario_temas"><b style="color:#7ec773">Session 5:</b><br><span style="color:#333">Investor and Asset Protection</span></div>
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b style="color:#7ec773">Refreshment break</b></div>
                    </div>
                    
                    <div id="bt_tema9" class="horario_conferencia horario_conferencia_flecha">
                    	<div class="horario_temas"><b style="color:#7ec773">Session 6: </b><br><span style="color:#333">CSD Innovation</span></div>
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b style="color:#7ec773">Gala Dinner</b></div>
                    </div>

              </div>

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
              
 			</div>
		</div>
        
        
<!--------------------HORARIOS DIA3------------------>
 
 
 
 <div id="dia_tres" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios4a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios4a">Friday, 22 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita3" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita3" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">03</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_temas" style="color:#9f6ead"><b>Opening Remarks</b></div>
                    </div>
                    
                    <div id="bt_tema10" class="horario_conferencia horario_conferencia_flecha">
                    	<div class="horario_temas"><b style="color:#9f6ead">Session 7:</b><br><span style="color:#333">Technology</span></div>
                    </div>
                    
                    <div id="bt_tema11" class="horario_conferencia horario_conferencia_flecha" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b style="color:#9f6ead">Session 8:</b><br><span style="color:#333">The impact of regulation on CSD activities</span></div>
                    </div>
                    
                    <div class="horario_conferencia">
                    	<div class="horario_temas"><b style="color:#9f6ead">Refreshment Break</b></div>
                    </div>
                    
                    <div id="bt_tema12" class="horario_conferencia horario_conferencia_flecha" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b style="color:#9f6ead">Session 9:</b><br><span style="color:#333">CSD Collaboration</span></div>
                    </div>
                    
                    <div class="horario_conferencia">
                    	<div class="horario_temas"><b style="color:#9f6ead">Lunch</b></div>
                    </div>
                    
                    <div id="bt_tema13" class="horario_conferencia horario_conferencia_flecha" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b style="color:#9f6ead">Final Session:</b><br><span style="color:#333">Changes in the CSD landscape (Senior Executive Panel)</span></div>
                    </div>
                    
                    <div class="horario_conferencia">
                    	<div class="horario_temas"><b style="color:#9f6ead">Closing remarks</b></div>
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_temas"><b style="color:#9f6ead">Presentation by the hosts of WFC 2017</b></div>
                    </div>

              </div>

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
              
 			</div>
		</div>

 
 
 <!-----------TEMA 1------------>
 
 
 
 
 
 <div id="tema1" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios5a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios5a">Wednesday, 20 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita4" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita4" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">01</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#ff0099"><span id="t3_titulo">Welcoming remarks</span></b><br>
                        	<span id="te_expositor"><b>Roberto Gonzalez Barrera</b>, CEO - Indeval</span><br>
                            <span id="te_expositor"><b>Jorge Jaramillo</b>, President - ACSDA</span><br>
                            <span id="te_expositor"><b>Eddie Astanin</b>, Chairman - WFC</span><br>
                            <span id="te_expositor"><b>TBA*</b>, BMV Group</span><br>
                            <span id="te_expositor"><b>TBA*</b>, Government Representative</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    
                                    
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
             
   			</div>
		</div>
        
 
 
 <!----------------TEMA 2----------->
        
        
  <div id="tema2" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios6a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios6a">Wednesday, 20 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita5" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita5" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">01</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#ff0099"><span id="t3_titulo">Keynote address:</span></b><br>
                            <span id="te_expositor">View of the Global Securities Markets</span><br><br>
                        	<span id="te_expositor"><b>Fernando Yañez</b>, General Manager - DCV Chile</span><br>
                            <span id="te_expositor"><b>Jaime de la Barra</b>, Compass Group - Partner, Senior Investment Strategist and Regional Head of Business
Development, Chile</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
             
   			</div>
		</div>
        


<!-------TEMA 3------>        
        
        <div id="tema3" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios7a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios7a">Wednesday, 20 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita6" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita6" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">01</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#ff0099"><span id="t3_titulo">Session 1:</span></b><br>
                            <span id="te_expositor"><b>Promoting settlement efficiency and the move to shorter settlement cycles</b></span><br><br>
                        	
                            <span id="te_expositor">Expert operational practitioners will discuss the lessons learnt from the “big bang” migration to T+2 in Europe, the prospects for achieving global convergence in settlement cycles, as well as ways to reduce fails and to promote timely settlement. They will also address the following questions: Should CSD participants be financially penalised when they repeatedly fail to deliver securities on time? How can a CSD promote market discipline and create incentives for early matching and settlement? How far can we go in reducing settlement cycles? and can we ever reach same day settlement for all securities?</span><br><br>
                            <span id="te_expositor"><b>Mathias Papenfuss</b>, Chairman - ECSDA, Member of the Executive Board - Clearstream</span><br>
                            <span id="te_expositor"><b>Dan Thieke</b>, Managing Director and General Manager Settlement and Asset Services - DTCC</span><br>
                            <span id="te_expositor"><b>Lum Yong Teng</b>, Senior Vice President, Head, Depository Services - Singapore SE Group</span><br>
                            <span id="te_expositor"><b>Göran Fors</b>, Head of GTS Banks, SSC Member - SEB</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
             
   			</div>
		</div>
        
        
        
        <!-------TEMA 4------>        
        
        <div id="tema4" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios8a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios8a">Wednesday, 20 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita7" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita7" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">01</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#ff0099"><span id="t3_titulo">Session 2:</span></b><br>
                            <span id="te_expositor"><b>Collateral Management</b></span><br><br>
                        	
                            
                            <span id="te_expositor"><b>Michael Barrett</b>, Vice President - Genpact Headstrong Capital Markets</span><br>
                            <span id="te_expositor"><b>Alessandro Zignani</b>, Head of Sales - LSE Group</span><br>
                            <span id="te_expositor"><b>Andrew White</b>, General Manager - Settlement Services - ASX - Australia</span><br>
                            <span id="te_expositor"><b>Maria Ivanova</b>, Vice President, Director for Development and Client Relations - National Settlement Depository (NSD) - Russia</span><br>
                            
                            <span id="te_expositor"><b>Ivan Nicora</b>, Director and Head of Product Management for Investment Funds and International Markets - Euroclear</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
             
   			</div>
		</div>
        
        
        
        
        <!-------TEMA 5------>        
        
        <div id="tema5" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios9a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios9a">Thursday, 21 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita8" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita8" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">02</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#7ec773"><span id="t3_titulo">Keynote address:</span></b><br>
                            <span id="te_expositor"><b>“Importance of the Payment System in Mexico from the Central Bank perspective”</b></span><br><br>
                        	
                            
                            <span id="te_expositor"><b>Roberto Gonzalez Barrera</b>, CEO - Indeval - México</span><br>
                            <span id="te_expositor"><b>TBD*</b>, Representative of the Central Bank of Mexico</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
            </div> 
   
		</div>
        
        <!-------TEMA 6------>        
        
        <div id="tema6" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios10a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios10a">Thursday, 21 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita9" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita9" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">02</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#7ec773"><span id="t3_titulo">Session 3:</span></b><br>
                            <span id="te_expositor"><b>CPSS IOSCO</b></span><br><br>
                            
                            <span id="te_expositor">An update on developments since the introduction of the Principles for FMIs. Among the subjects to be discussed; how is the self-assessment process being implemented, and how are CSDs dealing with the question of recovery and resolution?</span><br><br>
                        	
                            
                            <span id="te_expositor"><b>Mohamed Abdel Salam</b>, Managing Director- MCSD - Egypt</span><br>
                            <span id="te_expositor"><b>Froukelien Wendt</b>, IMF</span><br>
                            <span id="te_expositor"><b>David Stanton</b>, Chief Risk Officer - CDS - Canada</span><br>
                            <span id="te_expositor"><b>Daniela Russo</b>, European Central Bank</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
             
   			</div>
		</div>
        
        
        
        <!-------TEMA 7------>        
        
        <div id="tema7" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios11a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios11a">Thursday, 21 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita10" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita10" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">02</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#7ec773"><span id="t3_titulo">Session 4:</span></b><br>
                            <span id="te_expositor"><b>Prevention of Fraud / Security Threats</b></span><br><br>
                            
                            <span id="te_expositor">A panel of experts will examine this subject in an effort to help us better understand how big a risk is it, and what
CSDs are or should be doing about it.</span><br><br>
                        	
                            
                            <span id="te_expositor"><b>Jorge Jaramillo</b>, CEO - Deceval - Colombia</span><br>
                            <span id="te_expositor"><b>Arturo Castillo</b>, Partner - KPMG- Colombia</span><br>
                            <span id="te_expositor"><b>Mark Clancy</b>, Chief Executive Officer - Soltra; Chief Information Security Officer - DTCC</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
             
   			</div>
		</div>
        
        
        
        <!-------TEMA 8------>        
        
        <div id="tema8" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios12a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios12a">Thursday, 21 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita11" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita11" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">02</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#7ec773"><span id="t3_titulo">Session 5:</span></b><br>
                            <span id="te_expositor"><b>Investor and Asset Protection</b></span><br><br>               	
                            
                            <span id="te_expositor"><b>Simon Thomas</b>, CEO - Thomas Murray</span><br>
                            <span id="te_expositor"><b>George Zinner</b>, Director Capital Market Services - OEKB - Austria</span><br>
                            <span id="te_expositor"><b>Mohammad Hanif</b>, CDC - Pakistan</span><br>
                            <span id="te_expositor"><b>Urs Staehli</b>, Secretariat - ISSA</span><br>
                            <span id="te_expositor"><b>Gennadiy Zhurov</b>, CEO - National Depository of Ukraine</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                   <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
            </div> 
   
		</div>
        
        
        
        <!-------TEMA 9------>        
        
        <div id="tema9" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios13a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios13a">Thursday, 21 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita12" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita12" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">02</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#7ec773"><span id="t3_titulo">Session 6:</span></b><br>
                            <span id="te_expositor"><b>CSD Innovation</b></span><br><br>               	
                            
                            <span id="te_expositor"><b>Jean Desgagné</b>, President and CEO - CDS - Canada</span><br>
                            <span id="te_expositor"><b>Gokce Iliris</b>, Head of International Relations - MKK - Turkey</span><br>
                            <span id="te_expositor"><b>Monica Singer</b>, CEO - Strate - South Africa</span><br>
                            <span id="te_expositor"><b>Danny Missotten</b>, Director - Corporate Strategy & Business Development - Euroclear</span><br>
                            <span id="te_expositor"><b>Jorge Jaramillo</b>, President and CEO - Deceval - Colombia</span><br>
                            <span id="te_expositor"><b>Jaehoon Yoo</b>, Chairman and CEO - KSD - Korea</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
             </div>  
       
		</div>
        
        
        
        
        
        <!-------TEMA 10------>        
        
        <div id="tema10" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios14a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios14a">Friday, 22 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita13" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita13" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">03</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#9f6ead"><span id="t3_titulo">Session 7:</span></b><br>
                            <span id="te_expositor"><b>Technology</b></span><br><br>
                            
                            <span id="te_expositor">An expert in CSD related technology will provide an overview of the challenges being faced by CSDs in areas such as; managing the cost of their IT investment, addressing operational risk associated with technology, and the development of a cohesive IT strategy. CSD executives will then share their experiences and challenges in this area.</span><br><br>               	
                            
                            <span id="te_expositor"><b>TBA*</b></span><br>
                            <span id="te_expositor"><b>Kelly Mavros</b>, Vice President - Strategy</span><br>
                            <span id="te_expositor"><b>Henri Bergström</b>, Head of Global Post Trade Solutions - NASDAQ OMX</span><br>
                            <span id="te_expositor"><b>Nageshwar Rao*</b>, Managing Director - NSDL - India</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
           	</div>  
   
		</div>
        
        
        <!-------TEMA 11------>        
        
        <div id="tema11" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios15a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios15a">Friday, 22 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita14" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita14" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">03</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#9f6ead"><span id="t3_titulo">Session 8:</span></b><br>
                            <span id="te_expositor"><b>The impact of regulation on CSD activities</b></span><br><br>
                            
                            <span id="te_expositor">Regulators and CSD executives discuss how changes in regulation are impacting the CSD landscape, and what the
future may hold.</span><br><br>               	
                            
                            <span id="te_expositor"><b>Daniela Peterhoff</b>, Oliver Wyman</span><br>
                            <span id="te_expositor"><b>Paul Symons</b>, Head of Public Affairs - Euroclear</span><br>
                            <span id="te_expositor"><b>TBD*</b></span><br>
                            <span id="te_expositor"><b>Sergey Shvetsov</b>, First Deputy Governor - Bank of Russia</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
             
   			</div>
		</div>
        
        
        
        
        <!-------TEMA 12------>        
        
        <div id="tema12" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios16a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios16a">Friday, 22 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita15" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita15" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">03</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#9f6ead"><span id="t3_titulo">Session 9:</span></b><br>
                            <span id="te_expositor"><b>CSD Collaboration</b></span><br><br>
                            
                            <span id="te_expositor">CSD executives will present experiences through case studies illustrating how their CSDs have successfully collaborated with one another in unique and mutually beneficial ways. Highlighting how the ideas came about, what obstacles were overcome and share the positive outcomes they have achieved.</span><br><br>               	
                            
                            <span id="te_expositor"><b>Chris Church</b>, Chief Executive Americas and Global Head of Securities - SWIFT</span><br>
                            <span id="te_expositor"><b>Jesus Benito</b>, CEO - Iberclear - Spain</span><br>
                            <span id="te_expositor"><b>Jian Liu</b>, Senior Business Manager - CSDC - China</span><br>
                            <span id="te_expositor"><b>Tanya Knowles</b>, Head of Projects, Innovation and Business Services - Strate - South Africa (WFC)</span><br>
                            <span id="te_expositor"><b>Eddie Astanin</b>, Chairman of the Executive Board - NSD - Russia</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
           	</div>  
   
		</div>
 
 
  
  
          <!-------TEMA 13------>        
        
        <div id="tema13" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios17a">SHEDULES</div>
                        <div class="texto_neo fecha_horarios17a">Friday, 22 May 2015</div>
               
                        <img class="regresa" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                        <img class="bolita16" src="imagenes/bolita.png" height="60%" style="position:absolute; left:40%; top:20%"/>
                        <div class="contiene_bolita16" style="position:absolute; left:40%; top:20%">
                        	<div class="bolita_day texto_neo" style="width:100%; height:25%; top:10%; text-align:center;">Day</div>
                            <div id="te_dia" class="bolita_numero texto_neo" style="width:100%; height:37%; top:41%; text-align:center">03</div>
                        </div>  
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%">
                        	<b style="font-size:28px; color:#9f6ead"><span id="t3_titulo">Final Session:</span></b><br>
                            <span id="te_expositor"><b>Changes in the CSD landscape (Senior Executive Panel)</b></span><br><br>
                            

                            <span id="te_expositor"><b>Josef Landolt</b>, CEO - ISSA</span><br>
                            <span id="te_expositor"><b>Jeff Tesler</b>, CEO - Clearstream</span><br>
                            <span id="te_expositor"><b>Valerie Urbain</b>, CEO - Euroclear Bank</span><br>
                            <span id="te_expositor"><b>Murray Pozmanter</b>, Managing Director and Head of Clearing Agency Services - DTCC - USA</span><br>
                            <span id="te_expositor"><b>Lee Waite</b>, Global Head of Direct Custody & Clearing, Citi Transaction Services - CITI</span><br>
                            <span id="te_expositor"><b>Gottfried Leibrandt</b>, CEO - SWIFT</span><br><br>
                            

<b>Room:</b> <span id="te_sala">Conference Room JW Marriott</span>
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc; height:320px;">
                        <div class="horario_todo">	
                            <img class="ir_map" src="imagenes/ver_mapa.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:70px;"/>
                            <img src="imagenes/agregar_calendario.png" width="60%" style="position:absolute; max-width:450px; margin-left:20px; top:180px;"/>
                        </div>
                   	</div>
                    
                    <div class="horario_conferencia" style="height:300px;">
                       <div class="horario_todo">
                            <div class="texto_carbon" style="position:absolute; max-width:450px; margin-left:20px; top:20px; text-align:center; font-size:50px; width:60%; color:#333">SHARE</div>
                            <div style="position:absolute; max-width:450px; margin-left:20px; top:100px; text-align:center; font-size:50px; width:60%; color:#333">
                                    <a href="mailto:?Subject=Welcoming remarks&Body=http://www.wfc-2015.net/"><img src="imagenes/correo.png" width="115" height="115" style="position:absolute; left:0px;"/>
                                    
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.wfc-2015.net/" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/linkedin.png" width="115" height="115" style="position:absolute; left:50%; margin-left:-57px;"/></a> 
                                    
                                    <a href="http://twitter.com/share?url=http://www.wfc-2015.net/&text=Welcoming remarks&hashtags=wfc2015" target="popup" onClick="window.open(this.href, this.target, 'width=400,height=400'); return false;"><img src="imagenes/twitter.png" width="115" height="115" style="position:absolute; right:0px;"/></a>
                                </div>	 
                     		</div>
                   	</div>
              </div>
 
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:12%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
          	</div>   
   
		</div>
        
        
        
        
        
        
        <!--------------------EXPOSITORES------------------>       
        
        
        <div id="expositores" style="opacity:0.0; min-height:900px; display:none;">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios1b">SPEAKERS</div>
                    </div>
                    
                    <div id="bt_exp1" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Alessandro Zignani</b><br>
                            <b>LSE Group</b>, Head of Sales</b> | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp2" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Andrew White</b><br>
                            <b>ASX – Australia</b>, General Manager of Settlement Services | Wed, 20
                        </div>
                    </div>
                    
                    <div  id="bt_exp3" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Arturo del Castillo</b><br>
                            <b>KPMG</b>- Colombia, Partner | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp4" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Chris Church </b><br>
                            <b>SWIFT</b>, Chief Executive Americas and Global Head of Securities | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp5" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Dan Thieke</b><br>
                            <b>DTCC</b>, Managing Director and General Manager, Settlement & Asset Services  | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp6" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Daniela Peterhoff</b><br>
                            <b>Oliver Wyman’s</b>, Market Infrastructure Practice | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp7" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Danny Missotten</b><br>
                            <b>Euroclear</b>, Director Corporate Strategy & Business Development  | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp8" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Eddie Astanin</b><br>
                            <b>Chairman</b>, WFC | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp9" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Fernando Yáñez</b><br>
                            <b>DCV Chile</b>,  General Manager  | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp10" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">G V Nageswara Rao</b><br>
                            <b>NSDL – India</b>, Managing Director  | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp11" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Georg Zinner</b><br>
                            <b>OEKB – Austria</b>, Director Capital Market Services | Wed, 20
                        </div>
                    </div>
                    <div id="bt_exp12" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Gokce Iliris</b><br>
                            <b>MKK – Turkey</b>, Head of International Relations. | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp13" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Göran Fors</b><br>
                            <b>SEB</b>, Head of GTS Banks, SSC Member | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp14" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Henri Bergström</b><br>
                            <b>NASDAQ OMX</b>, Head of Global Post Trade Solutions | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp15" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Ivan Nicora</b><br>
                            <b>Euroclear</b>, Director and Head of Product Management for Investment Funds and International Markets | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp16" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Jae Hoon Yoo</b><br>
                            <b>KSD – Korea</b>, Chairman and CEO | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp17" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Jaime de la Barra</b><br>
                            <b>Compass Group – Partner - Chile</b>, Senior Investment Strategist and Regional Head of Business Development | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp18" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Jean Desgagné</b><br>
                            <b>CDS – Canadá</b>,  President and CEO  | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp19" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Jeffrey Tessler</b><br>
                            <b>Chief Executive Officer Clearstream</b> | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp20" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Jesús Benito</b><br>
                            <b>Iberclear – Spain</b>, CEO | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp21" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Josef Landolt</b><br>
                            <b>ISSA</b>, CEO  | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp22" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Lee R. Waite</b><br>
                            <b>CITI</b>, Global Head of Direct Custody & Clearing, Citi Transaction Services | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp23" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Gottfried Leibbrandt</b><br>
                            <b>SWIFT</b>, CEO | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp24" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Liu Jian</b><br>
                            <b>CSDC – China</b>, Senior Business Manager | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp25" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Mark Clancy</b><br>
                            <b>Chief Executive Officer</b>, Soltra | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp26" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Mathias Papenfuß </b><br>
                            <b>Clearstream</b>, Chairman - ECSDA, Member of the Executive Board | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp27" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Mohammed S. Abdel Salam</b><br>
                            <b>MCSD – Egypt</b>, Managing Director | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp28" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Monica Singer</b><br>
                            <b>Strate - South Africa</b>, CEO | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp29" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Muhammad Hanif </b><br>
                            <b>Central Depository Company of Pakistan Limited</b>, Chief Executive Officer | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp30" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Murray Pozmanter</b><br>
                            <b>DTCC</b>, Managing Director and Head of Clearing Agency Services | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp31" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Paul Symons</b><br>
                            <b>Euroclear</b>, Head of Public Affairs  | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp32" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Sergey Shvetsov</b><br>
                            <b>Bank of Russia</b>, First Deputy Governor  | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp33" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Tanya Knowles</b><br>
                            <b>Strate - South Africa</b>, Head of Projects, Innovation and Business Services  | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp34" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Urs Stähli</b><br>
                            <b>ISSA</b>, Secretariat  | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp35" class="horario_conferencia" style="background-color:#ebfbfc">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Valerie Urbain</b><br>
                            <b>Euroclear Bank</b>, CEO | Wed, 20
                        </div>
                    </div>
                    
                    <div id="bt_exp36" class="horario_conferencia">
                    	<div class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%">
                        	<b style="font-size:28px; color:#003366; font-family:helveticaBold">Froukelien Wendt</b><br>
                            <b>IMF</b>, Senior Financial Sector Expert | Wed, 20
                        </div>
                    </div>
                    
                   </div> 
                    
             

            
              
              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:24%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
              
              </div>
   
		</div>
        
        
    <!--------------------EXPOSITORES 2------------------>     
        
        
        <div id="expositores2" style="opacity:0.0; min-height:900px; display:none">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios2b">SHEDULES</div>
                        <img id="atras_exp" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                </div>
                    
                    
                    
                    
                    <!--EXPOSITOR1-->
                    <div id="expo1">
                        <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:10px; background-image:url(imagenes/fotos/Alessandro_Zignani.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Alessandro Zignani</b><br>
                                <span style="font-size:18px;"><b>LSE Group</b>, Head of Sales</span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-family:14px;">
                                Alessandro joined the London Stock Exchange Group as General Manager of Monte Titoli in 2010 to support the development of the CSD and implement a strategy to become an investor CSD and strength relationship with International Financial Institutions  in the light of the entrance in the first wave of T2S. In January 2013 he was appointed Global Head of Sales and RM for the Post Trade Division for the services offered by Monte Titoli and CC&G, the Central Counterparty of the Italian market. <br><br>

He started in Citibank where he spent 11 years between Milan and London covering different roles in Securities Services offered to domestic and international Banks and Brokers. <br><br>

In 2000 he joined Unicredit as Senior Product Manager where he was responsible for electronic equity brokerage services and the start-up of EuroTLX, an MTF for bond trading offered to retail Banks. He then was responsible for the spin-off project of EuroTLX and the transformation into a regulated market and was after appointed in 2002 Managing Director till 2009. <br><br>

Alessandro holds a BA degree in Business Administration at Bocconi University in Milan

                      </div>
                    </div>
                </div>
                
                
                
                
                <!--EXPOSITOR2-->
                    <div id="expo2" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/andrew.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Andrew White</b><br>
                                <span style="font-size:18px;"><b>ASX – Australia</b>, General Manager of Settlement Services</span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-family:14px;">
                                Andrew White is the General Manager of Settlement Services at ASX.  He is responsible for ASX’s two central securities depositories, which between them provide services for over $3 trillion of fixed income and equity assets. <br><br> 

He is also responsible for the development of those services, including initiatives such as ASX Collateral (a centralised collateral management and tri-party repo service), Corporate Actions STP (a service to enhance how listed entities announce corporate events to deliver clear, consistent, accurate, timely and informative data to the market) and its RMB settlement service (a joint initiative with the Bank of China, which enables customers to carry out high-value electronic cash transfers in real time in Renminbi in Australia). <br><br> 

Prior to starting at ASX in 2007, Andrew spent nine years at LCH.Clearnet and five years at the Bank of England. <br><br> 

Andrew is a graduate of Oxford University where he read P.P.E.


                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR3-->
                    <div id="expo3" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/arturo.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Arturo del Castillo</b><br>
                                <span style="font-size:18px;"><b>KPMG- Colombia</b>, Partner</span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                                Professional Profile<br><br>
In 2006, Arturo joined KPMG Mexico, as a Manager of the Forensic Practice. In 2011, he was transferred to KPMG Colombia to support the consolidation of the local Forensic Practice and improve the presence of the forensic services in the region. In 2013 he was appointed as a Partner and Lead Partner of the Forensic Practice in Colombia. 
Since 2010, Arturo has coordinated the KPMG’s Fraud Survey for Latin America that nowadays includes the local surveys of Mexico, Colombia, Argentina, Brazil, Chile and Uruguay. Arturo has a strong experience in the design of corruption indexes and mechanism to measure economic crimes.<br><br>
Arturo has been consultant of several international organizations in accountability and anti-corruption controls, such as the World Bank and Transparency International. In 2009, Arturo has participated in the OECD Working Group to design the Anti-Bribery Guide for the Private Sector. <br><br>
Prior to joining KPMG, Arturo was a Partner in CEI Consulting, a Mexican firm of economic crime analysis. He has been Research Fellow in the Center for Research and Teaching Economics (CIDE), in Mexico, and at the Christian Michelsen Research Center, in Norway. <br><br>
Professional and Industry Experience<br><br>
Arturo’s relevant experience is focus on forensic investigations of financial fraud, misappropriation of assets and corruption.  He has also a strong experience in fraud risk management, data analysis and corporate intelligence.<br><br>
Arturo has lead fraud investigations for both, local and transnational companies, specially for bank and financial institutions, oil & gas companies, manufactures, entertainment companies, health institutions (including hospitals) and educational organizations (including universities, publishers and educational funds). <br><br>
Arturo has also lead FCPA-Due Diligence and bribery investigations for clients of different industries, such as real estate, oil & gas, mines, pharmaceutical, manufacture, and educational companies. His participation in such projects, include the coordination of the field-work teams, the analysis of main findings, forensic interviews to detect/corroborate FCPA violations and reporting to the external counsels, in a context of attorney-client privilege.<br><br>
Arturo has also lead and coordinate compliance analysis of Colombian’s subsidiaries to Ant-Bribery and Corruption international regulations (e.g. the UK Bribery Act 2010, the Canadian Corruption of Foreign Public Officials Act, and the Brazil Anti-Corruption Act).<br><br>
Arturo has participated, as external consultant, of the Mexican and the Colombian Governments to design and improve their national anti-corruption policies. His advisory had included the analysis of anti-corruption controls in governmental procurement processes and national disasters funds allocations.



                      </div>
                    </div>
                </div>
                
                
              <!--EXPOSITOR4-->
                    <div id="expo4" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/chris.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold"> Chris Church </b><br>
                                <span style="font-size:18px;"><b>SWIFT</b>, Chief Executive Americas and Global Head of Securities </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                                Chris Church joined SWIFT in August 2008 as Chief Executive Americas and Global Head of Securities. He is also member of SWIFT’s Executive Committee. He is responsible for SWIFT’s business in the Americas region and also has executive responsibility for SWIFT’s global securities business. <br><br>

Previously, he served as Managing Director of Radianz Services, a division of BT Global Financial Services. In this role, he was responsible for global sales, marketing, customer service, finance, product development and operations of the Radianz Shared Market Infrastructure. <br><br>

Chris was part of the executive team that founded Radianz, Inc. in 2000, responsible for Global Sales & Marketing until its acquisition by BT in 2005. He began his business career in 1987 at Reuters in sales, later taking on senior sales management roles in London and San Francisco where he managed Reuters Western Region. <br><br>

Chris holds an MBA from the London Business School. He is a former professional yachtsman and Americas Cup sailor, and lives in Connecticut with his family.<br><br> 

<b>About SWIFT</b> <br><br>
SWIFT is a member-owned cooperative that provides the communications platform, products and services to connect more than 10,800 banking organisations, securities institutions and corporate customers in over 200 countries and territories. SWIFT enables its users to exchange automated, standardised financial information securely and reliably, thereby lowering costs, reducing operational risk and eliminating operational inefficiencies. SWIFT also brings the financial community together to work collaboratively to shape market practice, define standards and debate issues of mutual interest.




                      </div>
                    </div>
                </div>  
                
                
                <!--EXPOSITOR5-->
                    <div id="expo5" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/dan.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Dan Thieke</b><br>
                                <span style="font-size:18px;"><b>DTCC</b>, Managing Director and General Manager, Settlement & Asset Services </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                                Dan Thieke is Managing Director and General Manager for Settlement & Asset Services at DTCC, responsible for overseeing services for these businesses globally and driving the strategic development of key company initiatives such as its corporate actions transformation effort, dematerialization of physical securities, and leading continued structural changes to the U.S. settlement processes.<br><br>

Thieke currently serves as a member of DTCC’s Operating Committee, Management Risk Committee, and Anti Money Laundering (AML) Oversight Committee. He is also an Executive Committee member of the Americas’ Central Securities Depositories Association (ACSDA) and an active member of the Securities Industry Financial Markets Association (SIFMA) Capital Markets Committee. <br><br>

Prior to this role, Thieke served as Managing Director for DTCC’s Asset Services business responsible for various products and services including: underwriting, securities processing, corporate actions processing, issuer services and global tax services. <br><br>

Thieke joined The Depository Trust Company in 1997 in the Participant Services Department, serving as Relationship Manager for custodian bank and broker-dealer clients. He was promoted to Director, Product Management for underwriting and securities processing before being named Vice President in 2009. <br><br>

Thieke earned a Bachelor’s degree in finance from the University of Notre Dame and holds a Masters of Business Administration from New York University’s Stern School of Business.




                      </div>
                    </div>
                </div>
                
                
                
                
                
                <!--EXPOSITOR6-->
                    <div id="expo6" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/daniela.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Daniela Peterhoff</b><br>
                                <span style="font-size:18px;"><b>Oliver Wyman’s</b>, Market Infrastructure Practice </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                                Dr Daniela Peterhoff is a Partner in Oliver Wyman’s Zurich Office. Daniela leads our market infrastructure work in EMEA and joined the firm following her employment with Eurex (Deutsche Börse Group). She specialises in strategy and implementation projects for exchanges, clearinghouses as well as (I)CSDs, data & analytics providers and custodians.<br><br>

In the (I)CSD space, she has been at the forefront advising leading players globally in the context of strategic, product development, sales and transformation projects. Specifically, her work focuses around the impact of new regulations, blurring boundaries between (I)CSDs and custodians, risk management for (I)CSDs and inorganic opportunities.<br><br>

Daniela holds an MBA and a PhD in Business Administration. She led the development and publication of the Oliver Wyman/SWIFT report related to the future of the post trade industry globally, released at SIBOS 2014. She is a frequent speaker at industry conference on market infrastructure topics and has authored multiple papers in the post trade area. 





                      </div>
                    </div>
                </div>
                
                
                
                
                <!--EXPOSITOR7-->
                    <div id="expo7" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/danny.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Danny Missotten</b><br>
                                <span style="font-size:18px;"><b>Euroclear</b>, Director Corporate Strategy & Business Development  </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                                Danny Missotten, Director, is a senior executive within the Corporate Strategy & Public Affairs division for the Euroclear group. In this capacity, he spearheads Euroclear’s cooperative and advisory activities with capital market infrastructure providers, governmental entities, central banks and other relevant stakeholders from securities markets around the world.<br><br>

Mr Missotten joined Euroclear in 1999 and worked for five years in several IT departments. In 2005, he joined the Corporate Strategy & Public Affairs division and held various managerial positions in market research, business development and mergers and acquisitions.<br><br>

Mr Missotten holds Master’s degrees in Mechanical and in Electrical Engineering from the Katholieke Universiteit van Leuven (Belgium) and a Master’s degree in Business Administration from INSEAD (France and Singapore).

                      </div>
                    </div>
                </div>
                
                
                <!--EXPOSITOR8-->
                    <div id="expo8" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/eddie.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Eddie Astanin</b><br>
                                <span style="font-size:18px;"><b>Chairman</b>, WFC  </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                                Education:<br> <br>
1984 – the Mozhayskiy Military Engineering Institute<br> 
1996 – Institute of Retraining and Advanced Training for Financial and Banking Specialists of the Financial Academy under the Government of the Russian Federation<br> 
1992 – PhD degree in Engineering<br><br>

Employment history: <br><br>
2005–2009 – Deputy Director, National Depository Center Non-Profit Partnership<br>
2009–2010 – Deputy General Director, General Director, National Depository Center CJSC<br><br>

Member of the Board of Directors of the Saint-Petersburg Currency Exchange (SPCEX) and the National Securities Market Association (NSMA)<br>
Chairman of the World Forum of Central Securities Depositories (WFC)

                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR10-->
                    <div id="expo9" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/fernando.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Fernando Yáñez</b><br>
                                <span style="font-size:18px;"><b>DCV Chile</b>,   General Manager </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                                From January 1993, Fernando Yáñez is the CEO of Chile’s Central Securities Depository and was the former president of the Americas’ Securities Depository Association (ACSDA) from September 2005 to March 2007.<br><br>  
Fernando Yáñez worked for Citibank N.A. from 1982 to 1992, in which was in charge of several responsibilities, including the treasurer manager position of La Paz, Bolivia branch.<br><br>
He is Civil Engineer from the Universidad de Chile. 


                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR10-->
                    <div id="expo10" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/nages.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">G V Nageswara Rao</b><br>
                                <span style="font-size:18px;"><b>NSDL – India</b>, Managing Director  </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                                G V Nageswara Rao is presently the MD & CEO of National Securities Depository Limited (NSDL). Mr. Rao has over 26 years of experience in various sectors of financial services including life insurance, retail banking, corporate banking and capital markets. Prior to this assignment, Mr. Rao was MD & CEO of IDBI Federal Life Insurance since its inception in 2007 till June 2013. <br><br>

IDBI Federal was amongst very few life insurance companies which achieved break-even in the fifth year of its operations, with consistently better than industry growth in business, being amongst the top companies in persistency and among the companies with lowest cost ratios. Prior to that from 2003 till 2007, Mr. Rao was the MD & CEO of IDBI Bank Limited, a new generation technology savvy bank established in 1994 and one of the fastest growing banks of its generation.<br><br>

 Following its merger with IDBI Limited, he was the CEO of the commercial banking SBU of IDBI Limited. Mr. Rao was the first MD & CEO of IDBI Capital Market Services Limited (from 1997 till 2003) which was the largest primary dealer by Turnover, Net Profit and Return on Net Worth for three years in a row when he left the Company. In his early career at IDBI, Mr. Rao held key positions in Corporate Finance, Business Development, Investment Banking, Resources and Infrastructure Finance.<br><br> 

He led the team that launched IDBI’s highly successful and innovative bond offering ‘Flexibonds’.<br><br>

 He was part of a core team that worked on setting up SEBI, the country’s securities regulator. Mr. Rao is a Chartered Accountant, Cost Accountant and PGDM from the Indian Institute of Management, Ahmedabad.


                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR11-->
                    <div id="expo11" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/zinner.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Georg Zinner</b><br>
                                <span style="font-size:18px;"><b>OEKB – Austria</b>, Director Capital Market Services </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                                Georg Zinner is Managing Director of OeKB CSD, Austria’s Central Securities Depository, belonging to the OeKB Group. Before that he was Head of Capital Market Services at Oesterreichische Kontrollbank AG (OeKB), responsible for the numerous services OeKB provided in this business field, such as acting as CSD in Austria, cash market clearing operations for the Austrian Central Counterparty and providing, inter alia, clearing and risk management services to entities managing the balancing power in the Austrian gas and electricity markets.<br><br>
Mr. Zinner joined OeKB in 1990 as manager of the project to introduce an electronic trading system at the Vienna Stock Exchange. He played a leading role in the implementation of the Austrian Options and Futures Exchange. <br><br>
Next to memberships in the boards of several institutions in the Austrian energy market he is member of the Supervisory Board of KELER Zrt and Member of the Board of Directors of Budapest Stock Exchange Ltd.<br><br>
Mr. Zinner holds a Master’s degree in Law from the University of Vienna.



                      </div>
                    </div>
                </div>
                
                
                
                
                <!--EXPOSITOR12-->
                    <div id="expo12" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/gokce.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Gokce Iliris</b><br>
                                <span style="font-size:18px;"><b>MKK – Turkey</b>, Head of International Relations. </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                                Gokce ILIRIS has been a part of the capital markets and post-trade services industry more than a decade. During his tenure at Citibank Turkey (“Deputy Operations Manager” - Securities & Fund Services.<br><br> 

He had the opportunity to work closely with some of the major Global Custodians, Broker-dealers and intermediary institutions, leading some of the key automation projects and product launch projects, also helped him to understand the priorities and needs of the market players. Furthermore, moving to MKK (Turkish CSD) responsible for the management of “International Relations and Corporate Communications” gave him the ability to see the world from market infrastructure institution point of view, and hence made him sit on both sides of the table.<br><br> 

At his current position, in addition to this Relationship Management role, he is also actively working in collaboration with the Operations and Technology departments for the development of new value added services for capital markets and investors.




                      </div>
                    </div>
                </div>
                
                
                
                
                <!--EXPOSITOR13-->
                    <div id="expo13" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/goran.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Göran Fors</b><br>
                                <span style="font-size:18px;"><b>SEB</b>, Head of GTS Banks, SSC Member </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                                Head of Market Developments, SEB, Sweden. <br><br>

SWIFT Director since 2009 and Chairman of Swift Board Securities Committee. <br><br>
Serves as a Chairman of Euroclear Sweden Market Advisory Committee,T2S National User Group Sweden and the Swedish SWIFT National member group. Member of EuroCCP Advisory Committee and Member of VPS Advisory Board.





                      </div>
                    </div>
                </div>
                
                
                <!--EXPOSITOR14-->
                    <div id="expo14" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/henri.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Henri Bergström</b><br>
                                <span style="font-size:18px;"><b>NASDAQ OMX</b>, Head of Global Post Trade Solutions </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                               Henri Bergström has more than 20 years’ experience in exchange business including clearing and settlement industry. Further Henri has been assigned as an advisor to deliver advice and strategies to a number of global exchanges and post trade institutions. <br><br>

Board memberships<br><br>

Henri Bergström is Chairman of the Board of NASDAQ OMX Armenian Exchange and CSD. Previously serving as a member of the Board of a number of European exchanges and post trade institutions.<br><br>

Memberships in industry associations<br><br>

Henri is a member of Management Board of Federation of European Stock Exchanges as well as for Federation of East-Asian Stock Exchanges. Henri is a frequent invited speaker in international post trade conferences and writer of articles. <br><br>

He is a former member and chairman of special focus working groups of the European CSD Association.
                      </div>
                    </div>
                </div>
                
                
                
                
                <!--EXPOSITOR15-->
                    <div id="expo15" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/ivan.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Ivan Nicora</b><br>
                                <span style="font-size:18px;"><b>Euroclear</b>, Director and Head of Product Management for Investment Funds and International Markets </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                               Ivan Nicora is Head of Product Management for Investment Funds and International Markets with prime responsibility for all product strategy and related developments.<br><br>
 
Before this, Mr. Nicora led a team of relationship managers covering U.S. global custodians and clients based in Southern Europe, Latin America, North America, the Middle East and Africa. <br><br>
 
Mr. Nicora has also headed Network Management at Euroclear Bank, where he was responsible for managing Euroclear Bank’s relationships with more than 60 central securities depositories, appointed agents and cash correspondents around the world.<br><br>  
 
Mr. Nicora joined Euroclear in 1990 and has held management positions in the Custody Services and Risk Management departments before moving to Network Management. <br><br> 
 
Mr. Nicora holds a degree in Commercial Engineering from the Solvay Business School (Belgium).
                      </div>
                    </div>
                </div>
                
                
                
                
                <!--EXPOSITOR16-->
                    <div id="expo16" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/jae.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Jae Hoon Yoo</b><br>
                                <span style="font-size:18px;"><b>KSD – Korea</b>, Chairman and CEO </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Mr. Jae Hoon Yoo was appointed Chairman and CEO of Korea Securities Depository in November 2013. Prior to this post, he served as the Standing Commissioner of the Securities and Futures Commission from April 2012, as Director General of the Treasury Bureau at the Ministry of Strategy and Finance from December 2009 to March 2011 and as Spokesperson for the Financial Services Commission from 2008 to 2009.<br><br>

Since first taking up public office in 1983 at the Ministry of Finance, he has worked in a number of departments at the ministry and the Financial Services Commission, including International Affairs, Banking Supervision, and Securities Supervision. From 1997 to 2000, he worked as an economist at the Asian Development Bank in Manila. He was also a senior securities market specialist at the World Bank and International Finance Corporation between 2005 and 2008. During his 30 year career in public service, he worked on a variety of projects related to capital market development, financial policy, and international aid for developing countries. <br><br>

He is an honorary member of the French Korean Chamber of Commerce and Industry. He currently serves as Founding Chair of the China Capital Market Society, which was established in 2009 to conduct studies on the Chinese capital market and promote private-sector cooperation between Korea and China’s capital markets. He is also Co-chair of Social Finance Research Forum of Korea.<br><br>

He has a BA in economics and an MA in public administration from Seoul National University, and an MA (DEA) in international economics at Science-Po de Paris. He also graduated from the Ecole Nationale d’Administration(ENA) in France. He obtained a Ph.D. in economics from Kyonggi University in 2011.

                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR17-->
                    <div id="expo17" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/jaime.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Jaime de la Barra</b><br>
                                <span style="font-size:18px;"><b>Compass Group – Partner - Chile</b>, Senior Investment Strategist and Regional Head of Business Development. 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                               Mr. de la Barra is a founding partner of Compass Group in Chile, and he is currently Head of Business Development and Senior Investment Strategist. Between 1992 and 1996, he created and was the Head of Investment Research for Grupo Santander in Chile. <br><br>

Previously, he was a Vice President in Investment Banking at Citicorp Chile. Mr. de La Barra has been a member of the Capital Markets Advisory Council of the Chilean Ministry of Finance between 2006 and 2013 and is currently a member of the Advisory Board of Endeavor-Chile. <br><br>

He teaches Capital Markets and Financial Institutions at Universidad de Los Andes and is a founding partner and director of InBest. He was one of the founders and Chairman of the Chilean Investment Fund Managers Association. Mr. de La Barra has more than 29 years of experience in the investment industry in Latin America. <br><br>

Mr. de la Barra has a Bachelor´s degree in Business Administration from Pontificia Universidad Católica de Chile and an MBA (Palmer Scholar) from the Wharton School of the University of Pennsylvania.


                      </div>
                    </div>
                </div>
                
                
                <!--EXPOSITOR18-->
                    <div id="expo18" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/jean.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Jean Desgagné</b><br>
                                <span style="font-size:18px;"><b>CDS – Canadá</b>,  President and CEO 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Jean Desgagné is President and Chief Executive Officer of The Canadian Depository for Securities Limited (CDS), Canada’s national securities depository, clearing and settlement hub for equity, fixed income and money markets.<br><br> 

Mr. Desgagné is responsible for the equities clearing and settlement business of TMX Group, including the following subsidiaries of CDS: CDS Clearing and Depository Services Inc., CDS Securities Management Solutions Inc., CDS Innovations Inc. and CDS INC. Mr. Desgagné is a member of TMX Group’s executive management committee and is an Officer of the Corporation.<br><br>

Mr. Desgagné joined CDS in 2013 from TD Bank Group where he was Senior Vice President, Trading Risk Services, holding responsibility for the independent oversight of valuation, market risk, liquidity and collateral for TD’s global trading business. Prior to TD Bank, he held increasingly senior positions at some of Canada’s leading financial institutions including Bank of Montreal and Union Bank of Switzerland (Canada) in areas such as treasury operations, technology, trading support and risk management.<br><br>

Mr. Desgagné is a Chartered Accountant and a graduate of the University of Ottawa. He currently serves on the Board of the Jean Tweed Centre and has been active in a number of other community organizations. He is a member of the President’s Advisory Council for the University of Ottawa and was awarded the Trudeau Medal by the Telfer School of Management and the Queen’s Jubilee Medal in 2002 in recognition of his community service.



                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR19-->
                    <div id="expo19" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/jeffrey.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Jeffrey Tessler</b><br>
                                <span style="font-size:18px;"><b>Chief Executive Officer Clearstream</b>
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px">
                               Jeffrey Tessler joined Deutsche Börse Group in October 2004 following a 25-year career with The Bank of New York Company Inc., where he held a number of key management positions. Mr. Tessler has been a Member of the Executive Board of Deutsche Börse AG since he joined Deutsche Börse Group. He is the Chief Executive Officer of Clearstream and responsible for Deutsche Börse Group's post-trade business. <br><br>

In his previous role, Mr. Tessler served as Executive President of BNY Securities Group. He also served as General Manager of The Bank of New York in Europe from 1998 to 2003 and as Head of The Bank of New York’s Securities Industry Banking Division from 1988 to 1998. Mr. Tessler began his career in 1979 at the Irving Trust Company, which merged with The Bank of New York in 1988. His experience includes roles as a money market trader and dealer in U.S. government bonds. <br><br>

Mr. Tessler holds an MBA from Seton Hall University, New Jersey.

                      </div>
                    </div>
                </div>
                
                
                <!--EXPOSITOR20-->
                    <div id="expo20" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/jesus.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Jesús Benito</b><br>
                                <span style="font-size:18px;"><b>Iberclear – Spain</b>, CEO
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Jesús Benito is Chief Executive Officer of Iberclear, the Spanish Central Securities Depository.<br><br>
He has been Managing Director of REGIS-TR, the trade repository joint venture with Clearstream, in which currently he is a Board Member. <br><br>
Additionally, Mr. Benito participates in the T2S Advisory Group, in the T2S Harmonization Steering Group, in the CSD Steering Group (CSG), where he serves as chairman.<br><br>
He has recently been designated as part of the ESMA Post- Trading Consultative Working Group He has worked actively with a number of pan-industry working groups such as CESAME and CESAMEII, the EGMI, the MOG, and the Consultative Working Group for the ESMA Post-Trading Standing Committee. He has been Member of the ECSDA Board and Board Member and Secretary of the Board of Link-Up Markets. <br><br>
Jesús Benito joined Iberclear in 2000, first as Director of Strategy and Promotion, then as Deputy General Director, and has been CEO since 2006. <br><br>
Formerly, from 1988-2000 he worked for the Banco de España.


                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR21-->
                    <div id="expo21" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/josef.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Josef Landolt</b><br>
                                <span style="font-size:18px;"><b>ISSA</b>, CEO 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Josef Landolt started work in 1979 for UBS and stayed exclusively with this institution until he officially retired in 2012. More than 20 years he held the leadership for UBS' Securities Services activities. He represented the firm in local and international securities industry organizations like the domestic CSD (SIX SIS), Swift and Clearstream as a securities expert or as a Board Member. He was also the Chairman of ISSA (International Securities Services Association (ISSA) for more than 20 years.<br><br>
Since 2012 Josef is an independent Consultant for the Securities Services Industry. In this role he keeps a couple of industry mandates which currently include to be a Member of the Clearstream International Advisory Board and to be a Board Member of SIX SIS and SIX x-clear which comprises also the responsibility to chair the Risk Committee for SIX x-clear. In addition the ISSA Excecutive Board elected Josef as the CEO of ISSA. <br><br>
Josef Landolt is a graduate in Economics and Banking of the graduate school of Business Economics, Law and Sciences, St. Gallen (Switzerland).



                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR22-->
                    <div id="expo22" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/lee.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Lee R. Waite</b><br>
                                <span style="font-size:18px;"><b>CITI</b>, Global Head of Direct Custody & Clearing, Citi Transaction Services 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Lee is a Managing Director within Citi’s Markets and Securities Services Business. He is Global Head of Direct Custody and Clearing (DCC) which predominately caters to the needs of intermediaries including broker/dealers, global custodians and market infrastructures. Mr. Waite serves on the Board of the International Securities Services Association (ISSA).<br><br>

Prior to joining the Transactional Bank, Lee was the Global Chief Operating Officer for the Equities Division at Citi. As COO, he was responsible for technology, middle-office and operations. He was also very involved in strategy and acquisitions. <br><br>

Lee joined the Firm in July, 1983, as a trainee manager in the Retail Division. Lee has worked in the retail, fixed income and equity divisions in various capacities, including three years in London in the late 1990s. Other previous positions include: Head of Global Equity Sales, CAO/CFO for Global Equities, Head of Retail TFI, Head of Retail Capital Markets, Head of National Sales and Regional Sales Manager, Northeast Region. <br><br>

Lee holds a degree in Business Administration and Economics from Towson State University and an M.B.A. from the Fuqua School of Business, Duke University. He resides in Rye, NY with his wife and two children. 




                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR23-->
                    <div id="expo23" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/gott.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Gottfried Leibbrandt</b><br>
                                <span style="font-size:18px;"><b>SWIFT</b>, CEO 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Gottfried joined SWIFT in 2005 to focus on the development of the SWIFT2010 strategy. Upon completion of the strategy, he was appointed Head of Standards. In 2007, he was promoted to Head of Marketing. Gottfried ran a global organisation responsible for the development and delivery of SWIFT’s strategic initiatives spanning products & services, standards, innovation, banking, corporate and securities market segments. More recently, Gottfried was a key architect behind the creation of the SWIFT2015 strategy, which is being implemented and remains a priority for the co-operative. He was appointed CEO in July 2012.<br><br> 

Prior to joining SWIFT, Gottfried worked for McKinsey & Company for 18 years as a partner in the Amsterdam office and a co-leader of the European payments practice.<br><br> 

He holds a Masters degree in Econometrics and Statistics from the Vrije Universteit Amsterdam and an MBA from the Stanford Graduate School of Business.<br><br> 

Gottfried also holds a PhD in Economics from Maastricht University where his thesis was "Payment instruments and network effects: adoption, harmonization and succession of network technologies across countries". <br><br>

Gottfried is Dutch and married with three children. <br><br>

About SWIFT<br><br> 

SWIFT is a member-owned cooperative that provides the communications platform, products and services to connect more than 10,800 banking organisations, securities institutions and corporate customers in over 200 countries and territories. SWIFT enables its users to exchange automated, standardised financial information securely and reliably, thereby lowering costs, reducing operational risk and eliminating operational inefficiencies. SWIFT also brings the financial community together to work collaboratively to shape market practice, define standards and debate issues of mutual interest.

                      </div>
                    </div>
                </div>
                
                
                <!--EXPOSITOR24-->
                    <div id="expo24" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/liu.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Liu Jian</b><br>
                                <span style="font-size:18px;"><b>CSDC – China</b>, Senior Business Manager 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Mr. Liu Jian (Jason) is a senior manager of China Securities Depository and Clearing Corporation Limited (CSDC). <br><br>

He graduated from Shanghai University of Finance and Economics and got a master degree of Finance. From 2004 to 2005, Mr. Liu worked at Hong Kong and then joined ChinaClear Shanghai Branch in 2006. <br><br>

Since then, he has worked in Settlement Administration Department and Business Development Department successively. <br><br>

As one of the key members of Shanghai-Hong Kong Stock Connect Program, Mr. Liu has participated in all the important works of the project, including the program’s business planning, rules formulation, agreements negotiation, system development, etc.


                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR25-->
                    <div id="expo25" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/mark.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Mark Clancy</b><br>
                                <span style="font-size:18px;"><b>Chief Executive Officer</b>, Soltra 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Mark Clancy is Chief Information Security Officer of DTCC. He is also the Chief Executive officer of Soltra, DTCC’s joint venture with the Financial Services Information and Analysis Center (FS-ISAC) to automate the sharing of information about cyber security threats<br><br>

Active in the financial services and critical infrastructure communities, Clancy participates in the FS-ISAC and Financial Services Sector Coordinating Council (FSSCC). In addition, he serves in a leadership capacity as a Vice Chair of FS-ISAC’s board of directors; as a member of FSSCC’s executive committee, and leads the international coordination for FSSCC.<br><br>

Clancy has spoken on cyber security to attendees at the Air War College National Security Forum, as well as at events sponsored by U.S. Government agencies, such as the Committee on National Security Systems and the US Army Enterprise Solutions Competency Center. He has also testified before the US Congress House Financial Services subcommittee on Capital Markets and Government Sponsored Entities and Senate Commerce Committee on cyber security issues.<br><br>

Before joining DTCC in 2009, Clancy was executive vice president of Information Technology Risk at Citigroup.   His responsibilities included developing IT Risk strategy and managing the company’s information security polices and standards. He also directed company-wide efforts around third-party access, data protection, infrastructure protection, and vulnerability and threat assessment.  



                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR26-->
                    <div id="expo26" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/mathias.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Mathias Papenfuß </b><br>
                                <span style="font-size:18px;"><b>Clearstream</b>, Chairman - ECSDA, Member of the Executive Board 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Mathias has been Member of the Group Executive Management of Clearstream International SA, Luxembourg and Chief Operating Officer of Clearstream since 2010 in addition to his role as member of the Executive Board of Clearstream Banking Frankfurt (CBF). <br><br>
His career path took him through a variety of management positions in the field of Operations and Network Management.  Mathias Papenfuß joined Deutscher Kassenverein AG, the forerunner to Clearstream Banking AG, in 1995 following a term of 8 years in BHF-Bank´s German subcustody and Securities Lending business.<br><br>
 Mathias Papenfuß is Chairman of ECSDA since May 2013.

                      </div>
                    </div>
                </div>
                
                
                
                
                <!--EXPOSITOR27-->
                    <div id="expo27" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/mohammet.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Mohammed S. Abdel Salam </b><br>
                                <span style="font-size:18px;"><b>MCSD – Egypt</b>, Managing Director
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Mohammed S. Abdel Salam, Misr for Central Clearing, Depository and Registry – MCDR, Egypt Chairman and Managing Director, AMEDA President and Ex-Chairman of the WFC for two successful years.<br><br> 

Previously, he headed Egypt Stock Exchange - EGX in two different periods. He headed the Egyptian French project to establish the automated depository including the DVP system for the Egyptian market and headed the Egyptian Financial Supervisory Authority – EFSA - information technology sector.<br><br>

His areas of expertise are in information technology, project management, strategic & operational planning, quality & performance improvement, turnaround and crisis management, budget & financial reporting, process re-engineering, multi site technology operations, relationship and team building, decision making & problem solving,<br><br>
 
He holds MBA in Information Management and advanced diploma in Computer Science.<br><br> 

He has obvious footmark in the Egyptian capital market for he has actively been in the market for more than 25 years during which he introduced new systems and techniques related to clearing and settlement and finally set the legal infrastructure of the capital market by assisting in phrasing and issuing the Depository & Registry law no 93 for year 2000. <br><br>

Regionally, he conducted the implementation of the Arab Stock Exchange systems being the Chair of the designing committee.


                      </div>
                    </div>
                </div>
                
                
                
                
                <!--EXPOSITOR28-->
                    <div id="expo28" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/monica.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Monica Singer </b><br>
                                <span style="font-size:18px;"><b>Strate - South Africa</b>, CEO
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Monica Singer is a Chartered Accountant (SA) and a Fellow of the Institute of Directors. <br><br>
She is the first CEO of South Africa’s Central Securities Depository (CSD), Strate (Pty) Ltd which she set up in 1998. Strate has grown to provide electronic clearing, settlement and depository services for all listed companies on the JSE as well as for bonds and money market instruments. Strate also provides services in Swift, Gateway, corporate actions and investor information.<br><br>
The company provides one of the most robust IT infrastructures for CSDs in the world and achieved a AA- Rating from Thomas Murray, a UK based rating agency. Strate’s IT infrastructure consistently maintains an average uptime of 99.995% on all IT services.<br><br>
Today, Strate has grown to a company employing over 120 staff members and is a multiple winner of various categories in the Deloitte’s Best Company to Work For competition.<br><br>
Monica holds numerous board and advisory positions. She is the Vice President of the African Middle East Regional Association of CSDs (AMEDA) and a member of the Association of CSDs in the Americas (ACSDA) and the World Forum of CSDs (WFC). She is also involved in a number of charitable organisations including Strate Charity Shares and Ma-Afrika Tikkun.<br><br>
Monica previously worked at the World Bank in Washington DC and was the Technical Director of the South African Institute of Chartered Accountants (SAICA) from 1990 to 1996. She has a BAcc in Accounting and Auditing from the University of the Witwatersrand in Johannesburg, South Africa. She is fluent in English and Spanish and has two children, Stefanie (24) and Jonty (30).

                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR29-->
                    <div id="expo29" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/muha.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Muhammad Hanif  </b><br>
                                <span style="font-size:18px;"><b>Central Depository Company of Pakistan Limited</b>, Chief Executive Officer
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                               Mr. Muhammad Hanif is the Chief Executive Officer of Central Depository Company of Pakistan Limited (CDC).  He is also serving on the Boards of Pakistan Mercantile Exchange, Pakistan Institute of Corporate Governance and Institute of Capital Market.  He has also been elected as Chairman of the Executive Committee of Asia Pacific Central Securities Depositories Group for the term 2013 -2016 and also serving as Board member of the World Forum of CSDs.  He has represented both CDC and Pakistan Capital market on various national, regional and international forums.<br><br>
He is considered amount the senior most leaders of the Pakistan Capital Market and has been a strong advocated of investor cultivation, awareness and protection for the past two decades.  In January 2015, he has been chosen by Securities and Exchange Commission of Pakistan (SECP) as the head of a committee which will develop a pilot project for setting up ‘Capital Market Hubs’ in small cities of Pakistan to attract savings for investments in capital market.


                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR30-->
                    <div id="expo30" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/murray.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Murray Pozmanter</b><br>
                                <span style="font-size:18px;"><b>DTCC</b>, Managing Director and Head of Clearing Agency Services
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                              Murray Pozmanter is Managing Director and General Manager in charge of all DTCC’s SIFMU (Systemically Important Financial Market Utility) businesses. He also leads a consolidated Clearing Agency Services team, where he has responsibility for the development and marketing of products and services related to DTCC's post-trade processing of transactions. In addition, Pozmanter oversees DTCC’s Global Operations & Client Services teams.<br><br>

Prior to joining DTCC in 2007 as Managing Director, Pozmanter was at Nomura Securities for 18 years, where the last position he held was Managing Director and Head of US Operations. At Nomura, Pozmanter was responsible for all fixed income, equity, and derivatives operations for all U.S. subsidiaries of Nomura Holding America. Before joining Nomura, Pozmanter spent six years at Salomon Brothers Inc.<br><br>

He is a member of the Treasury Market Practices Group, as well as SIFMA’s Funding Division Executive Committee and Operations and Technology Steering Committee. He has also been a member of the DTCC’s Operations Advisory Committee.



                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR31-->
                    <div id="expo31" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/paul.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Paul Symons</b><br>
                                <span style="font-size:18px;"><b>Euroclear</b>, Head of Public Affairs 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                              Paul Symons is Global Head of Government Relations at Euroclear. <br><br> 

He is responsible for managing Euroclear’s relationships with those stakeholders that influence the regulatory and political context in which Euroclear operates (e.g. the Commission, the ECB, etc). He is a board member of the European Central Securities Depositories Association.<br><br>
 
Mr Symons joined Euroclear in 2002, following the merger with CRESTCo (now Euroclear UK & Ireland), the central securities depository for UK and Irish securities. At CRESTCo, he was Head of the Retail and Public Affairs department. Previously, Mr Symons spent seven years at the Bank of England.




                      </div>
                    </div>
                </div>
                
                
                
                <!--EXPOSITOR32-->
                    <div id="expo32" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/sergey.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Sergey Shvetsov</b><br>
                                <span style="font-size:18px;"><b>Bank of Russia</b>, First Deputy Governor 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                              Born: 27 December 1970; Moscow.<br><br>

Education:<br><br>
1993: Graduated from the M.V. Lomonosov Moscow State University (economics-mathematics).<br><br>
Speaks English.<br><br>
 
1988–1993: student of the M.V. Lomonosov Moscow State University.<br><br> 

1993–1996: economist of the 2nd category, senior economist, chief of the section with the International Finance Division of the Bank of Russia Foreign Operations Department. <br><br>

1996–2001: deputy head, head of the Ost-West Handelsbank AG representative office, Moscow. <br><br>

2001–2003: director of the Bank of Russia Open Market Operations Department.<br><br>

2003–2011: director of the Bank of Russia Market Operations Department.<br><br>

2003–2014: Member, Chairman of the Supervisory Board of the Moscow Exchange.<br><br>

2011–2013: Deputy Governor of the Bank of Russia.<br><br>

From September 1, 2013 to March 2, 2014: First Deputy Governor of the Bank of Russia – Head of the Bank of Russia Financial Markets Service.<br><br>

From March 3, 2014: First Deputy Governor of the Bank of Russia.<br><br>

Member of the Bank of Russia Board of Directors (since 2009).<br><br>

Member of the Supervisory Board of Sberbank of Russia (since 2012).





                      </div>
                    </div>
                </div>
                
                
                <!--EXPOSITOR33-->
                    <div id="expo33" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/tania.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Tanya Knowles</b><br>
                                <span style="font-size:18px;"><b>Strate - South Africa</b>, Head of Projects, Innovation and Business Services 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                              Tanya joined Strate Pty Ltd in 2001 having previously worked at Investec Bank.<br><br> 

She has held various positions in the organisation and is currently Head of Projects, Innovation and Business Services where she oversees the Project Management Office, Strategy, International Relations, Marketing and Human Resources. <br><br>

Tanya is also the Secretariat for the World Forum of CSDs (WFC) and a Member of the Institute of Directors of South Africa. <br><br>

She holds a BA, PDM and MBA Degree all from the University of the Witwatersrand. Situated in Sandton, Strate is South Africa’s authorised Central Securities Depository providing electronic settlement of equities and bonds transactions concluded on the Johannesburg Stock Exchange.<br><br>

 It also settles transactions in money market securities and has recently introduced a collateral management service. In her private capacity, Tanya is a members of the Vuleka Schools Board, Strate Charity Shares and Chairman of the Jeppe High School for Girls Association. <br><br>

She is involved in a number of women’s leadership initiatives aimed at professional business women. 
                      </div>
                    </div>
                </div>
                
                
                <!--EXPOSITOR34-->
                    <div id="expo34" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/urs.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Urs Stähli</b><br>
                                <span style="font-size:18px;"><b>ISSA</b>, Secretariat 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                              Professional History<br>
Joined Union Bank of Switzerland (predecessor of UBS AG) as apprentice in 1969, where he stayed until his retirement in fall 2012. During his 43-year career, Urs Stähli worked predominantly for Securities Services and Collateral Loans and assumed various assignments in Switzerland and abroad.<br><br>

For the past 15 years he coordinated UBS external mandates in Securities Services related industry associations and initiatives, the last 10 years as Managing Director. He was also leading the ISSA Secretariat.<br><br>

Retired from UBS to found his own company, Urs Stähli, Advisory.<br><br>

Board Mandates<br>
Board Member and Secretary of ISSA<br><br>

Personal Information<br>
Born in 1953.<br><br>
Father of two daughters.

                      </div>
                    </div>
                </div>
                
                
                <!--EXPOSITOR35-->
                    <div id="expo35" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/valerie.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Valerie Urbain</b><br>
                                <span style="font-size:18px;"><b>Euroclear Bank</b>, CEO 
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                              Valérie Urbain is Chief Executive Officer of Euroclear Bank, with responsibility for Euroclear Bank’s Operations, Commercial, Client Service, Banking and Network Management divisions worldwide. <br><br>

Between 2009 and year end 2014, Ms. Urbain was the CEO of the three ESES central securities depositories (CSDs), namely Euroclear Belgium, Euroclear France and Euroclear Nederland.<br><br>

Prior to this, she was Managing Director and head of the Human Resources division of the Euroclear group from 2005 until 2009.<br><br>

Earlier in her career, Ms. Urbain was head of Product Management at Euroclear UK & Ireland (formerly CRESTCo), the central securities depository for UK domestic securities and Irish equities. Ms. Urbain was also a member of the Euroclear UK & Ireland Executive Committee.<br><br>

Before moving to Euroclear UK & Ireland in 2003, Ms. Urbain was head of Network Management at Euroclear Bank’s headquarters in Brussels. She and her team were responsible for managing Euroclear Bank’s relationships with its worldwide network of cash and securities correspondents, including agent banks, other central securities depositories and transfer agents. <br><br> 

Previously, Ms. Urbain was head of a team of relationship managers in Euroclear’s Commercial division, with responsibility for Euroclear’s clients in France, southern Europe and Latin America. Before this, she headed a Commercial team covering France, Ireland, the Channel Islands, the UK, the Netherlands and Scandinavia.  She joined Euroclear in 1992 as an Account Officer.<br><br>

Before joining Euroclear, Ms. Urbain worked in the Investment Banking and Bond Sales departments of Banco Hispano Americano and in the Corporate Banking division of Continental Bank (both in Brussels).<br><br>
  
Ms. Urbain holds a degree in Commercial Engineering from the Solvay Business School (Belgium). 


                      </div>
                    </div>
                </div>
                
                
                <!--EXPOSITOR36-->
                    <div id="expo36" style="display:none">
                         <div class="horario_conferencia" style="background-color:#ebfbfc">
                            <div class="horario_todo" style="width:42%; padding-left:50%; padding-top:20px; padding-bottom:20px;">
                            	<div class="redonda" style="left:28%; top:20px; background-image:url(imagenes/fotos/wen.jpg)"></div>
                                <b style="font-size:22px; color:#339900; font-family:helveticaBold">Froukelien Wendt</b><br>
                                <span style="font-size:18px;"><b>IMF</b>, Senior Financial Sector Expert
 </span>
                          </div>
                        </div>
                    <div class="horario_conferencia" style="background-color:#ebfbfc">
                      <div class="horario_todo" style="width:60%; padding-bottom:90px; font-size:14px;">
                              Froukelien Wendt is a Senior Financial Sector Expert at the IMF, specialized in Financial Market Infrastructures (FMIs).<br><br> 

She regularly reviews central securities depositories, central counterparties and other FMIs in the context of FSAP missions and Technical Assistance projects. <br><br>

She participates in the CPMI-IOSCO Steering Group and was actively involved in the development of the assessment methodology for the new FMI principles. She currently participates in the CPMI-IOSCO implementation monitoring exercise. <br><br>

Before joining the IMF she worked at the World Bank as a Senior Securities Settlement Expert. <br><br>

Until 2010 she was with De Nederlandsche Bank, where she was responsible for oversight of payment and securities settlement systems and in particular central counterparties. <br><br>

Froukelien also worked for six years within a large exchange group, where she worked in the strategy and cash market development departments.



                      </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                 
                
         </div> 
                

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:24%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
            
        </div>
        
	</div>
    
    
    
    
    
    <!--------------------REDES------------------>     
        
        
        <div id="redes" style="opacity:0.0; min-height:900px; display:none">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios1c">REDES</div>
                    </div>

                    
                        	<div class="horario_conferencia" style="height:1200px;">
                      			<div class="horario_todo" style="width:60%; padding-bottom:90px;">
              						<div id="agrandar">
                                    
                                    <a class="twitter-timeline" href="https://twitter.com/2015wfc" data-widget-id="588165466188713984" data-theme="light" data-link-color="#FFFFF" width="300" height="900" lang="EN" data-chrome="noborders transparent" data-tweet-limit="10">Tweets for @2015wfc</a>
			  						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                    
									</div>
                      			</div>
                     		</div>

     
         </div> 
                

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:36%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
            
        
        	</div>
	</div>
    
    
    
    <!--------------------MAPA------------------>     
        
        
        <div id="mapa" style="opacity:0.0; min-height:900px; display:none">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios1d">MAP</div>
                    </div>

                    
                    <div class="horario_conferencia" style="overflow:scroll">
                    	<div class="horario_todo" style="padding:0px; padding-left:210px; text-align:center">
                   	    <img src="imagenes/mapa.png" width="2500px"/> </div>
                    </div>
                    
                    <div class="horario_conferencia" style="background-color:#ebfbfc; margin-top:-10px;">
                    	<div class="horario_todo" style="width:60%;">
                        	<b style="font-size:40px; color:#003366; font-family:helveticaBold">Conference Room JW Marriott</b><br><br>
                            Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.
                        </div>
                    </div>

     
         </div> 
                

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:48%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
              
             </div>
	</div>
    
    
    
    <!--------------------QR------------------>     
        
        
        <div id="qr" style="opacity:0.0; min-height:900px; display:none">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		<div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios1e">QR CODES</div>
                    </div>

                    
                   <div class="horario_conferencia" style="background-color:#e5f4f7">
                    	<div id="bt_myqr" class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%; padding-top:80px; padding-bottom:80px;">
                        	<b style="font-size:40px; color:#003366; font-family:helveticaBold;">My Qr Code</b><br>
                            In this section you could find your QR code that was assigned to you.
                        </div>
                    </div>
                    <div class="horario_conferencia" style="background-color:#f2fafb">
                    	<div  id="bt_scan" class="horario_todo" style="width:60%; background:url(imagenes/flechita2.png) no-repeat; background-position:100%; padding-top:80px; padding-bottom:80px;">
                        	<b style="font-size:40px; color:#003366; font-family:helveticaBold;">Scan Qr Codes</b><br>
                            In this section you can scan other codes.
                        </div>
                    </div>

     
         </div> 
                

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:60%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
            
        </div>
        
	</div>
    
    
    
    <!--------------------MYQR------------------>     
        
        
        <div id="myqr" style="opacity:0.0; min-height:900px; display:none">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		
                    
                    <div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios1f">QR CODES</div>
                        <div class="texto_neo fecha_horarios1f">My QR code</div>
                        <img class="atr_qr" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                    </div>

                    
                   <div class="myqr">
                    	<img src="imagenes/qr.png" width="511" height="511" style="position:absolute; top:50%; margin-top:-255px; left:50%; margin-left:-175px"/>
                    </div>

     
         </div> 
                

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:60%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
            
        
        	</div>
	</div>
    
    
    
    <!--------------------QR SCAN------------------>     
        
        
        <div id="scan" style="opacity:0.0; min-height:900px; display:none">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		
                    
                    <div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios2f">QR CODES</div>
                        <div class="texto_neo fecha_horarios2f">Scan codes</div>
                        <img class="atr_qr" src="imagenes/atras.png" height="30%" style="position:absolute; left:30%; top:35%"/>
                    </div>

                   <div class="myqr">
                    	<a onclick="scanear();" href="#"><img src="imagenes/scan.png" width="446" height="500" style="position:absolute; top:50%; margin-top:-250px; left:50%; margin-left:-125px"/></a>
                    </div>
                    
                    <span id="resultado"> #ERROR</span>

     
         </div> 
                

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:60%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
            
        	</div>
        
	</div>
    
    
    
    <!--------------------CAMARA------------------>     
        
        
        <div id="camara" style="opacity:0.0; min-height:900px; display:none">
			<div class="publi"></div>
            <div style="width:100%; height:93%; position:absolute; top:7%">
			  <div class="contenido">
              		
                    
                    <div class="titulo_horarios2">
                        <div class="texto_carbon titulo_horarios1g">SHARE YOUR<BR>EXPERIENCE</div>
                    </div>

                    <img style="height:100%;" id="smallImage" src="" />
                   
                   <div class="share" onClick="capturePhoto();">
                    	<img src="imagenes/share.png" width="446" height="500" style="position:absolute; top:50%; margin-top:-295px; left:50%; margin-left:-125px"/>
                    </div>
         </div> 
                

              <div class="menu" style="max-width:140px;">
              		<div class="seleccionado" style="top:72%"></div>
              		<div id="botones_menu1" class="botones_menu bt_menu1"></div>
                    <div id="botones_menu2" class="botones_menu bt_menu2"></div>
                    <div id="botones_menu3" class="botones_menu bt_menu3"></div>
                    <div id="botones_menu4" class="botones_menu bt_menu4"></div>
                    <div id="botones_menu5" class="botones_menu bt_menu5"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu6" class="botones_menu bt_menu6"></div>
                    <div id="botones_menu7" class="botones_menu bt_menu7"></div>
                    <div style="position:relative; float:left; width:80%; left:10%; height:4px; background-color:#FFFFFF"></div>
                    <div id="botones_menu8" class="botones_menu bt_menu8"></div>
              </div>
            
        	</div>
        
	</div>
    
    
    
    <div id="publicidad" style="display:none">
    	<div id="publi_imagen"></div>
        <div id="tache"></div>
    </div>
    
    
    
    
    
  
  
  
  <script>	
  		$('.publi').click(function(){
			$('#publicidad').fadeIn()
		})
		$('#publicidad').click(function(){
			$('#publicidad').fadeOut()
		})

		var ancho_logo
		var ancho_logo2
		var alto_pleca
		var alto_cargando
		var ancho_logo_texto
		var ancho_logo_texto2
		var alto_text_bt
		var pollo = 1
		var pagina = window.location.hash
		var pagina2 = window.location.hash
		

		function cambio(){
			pagina2 = window.location.hash
			if(pagina2 != pagina){
				pagina = window.location.hash
				iniciar()
			}
		}
		var t = setInterval(cambio,200);
		
		function iniciar(){
			if(pagina==""){
				$('#screem').fadeIn(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_scr()
			}else if(pagina=="#login"){
				$('#screem').fadeOut(400)
				$('#login').fadeIn(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_log()
			}else if(pagina=="#registro"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeIn(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_reg()
			}else if(pagina=="#exito"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeIn(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_exi()
			}else if(pagina=="#home"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeIn(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_hom()
			}else if(pagina=="#horarios"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeIn(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_hor()
			}else if(pagina=="#dia1"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeIn(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_dia1()
			}else if(pagina=="#dia2"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeIn(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_dia2()
			}else if(pagina=="#dia3"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeIn(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_dia3()
			}else if(pagina=="#tema1"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeIn(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem1()
			}else if(pagina=="#tema2"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeIn(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem2()
			}else if(pagina=="#tema3"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeIn(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem3()
			}else if(pagina=="#tema4"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeIn(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem4()
			}else if(pagina=="#tema5"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeIn(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem5()
			}else if(pagina=="#tema6"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeIn(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem6()
			}else if(pagina=="#tema7"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeIn(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem7()
			}else if(pagina=="#tema8"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeIn(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem8()
			}else if(pagina=="#tema9"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeIn(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem9()
			}else if(pagina=="#tema10"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeIn(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem10()
			}else if(pagina=="#tema11"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeIn(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem11()
			}else if(pagina=="#tema12"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeIn(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem12()
			}else if(pagina=="#tema13"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeIn(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_tem13()
			}else if(pagina=="#expositores"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeIn(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_exp()
			}else if(pagina=="#expositores2"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeIn(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_exp2()
			}else if(pagina=="#redes"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeIn(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_red()
			}else if(pagina=="#mapa"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeIn(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_map()
			}else if(pagina=="#qr"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeIn(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_qr()
			}else if(pagina=="#myqr"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeIn(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeOut(400)
				ini_myqr()
			}else if(pagina=="#scan"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeIn(400)
				$('#camara').fadeOut(400)
				ini_sca()
			}else if(pagina=="#camara"){
				$('#screem').fadeOut(400)
				$('#login').fadeOut(400)
				$('#registro').fadeOut(400)
				$('#exito').fadeOut(400)
				$('#home').fadeOut(400)
				$('#horarios').fadeOut(400)
				$('#dia_uno').fadeOut(400)
				$('#dia_dos').fadeOut(400)
				$('#dia_tres').fadeOut(400)
				$('#tema1').fadeOut(400)
				$('#tema2').fadeOut(400)
				$('#tema3').fadeOut(400)
				$('#tema4').fadeOut(400)
				$('#tema5').fadeOut(400)
				$('#tema6').fadeOut(400)
				$('#tema7').fadeOut(400)
				$('#tema8').fadeOut(400)
				$('#tema9').fadeOut(400)
				$('#tema10').fadeOut(400)
				$('#tema11').fadeOut(400)
				$('#tema12').fadeOut(400)
				$('#tema13').fadeOut(400)
				$('#expositores').fadeOut(400)
				$('#expositores2').fadeOut(400)
				$('#redes').fadeOut(400)
				$('#mapa').fadeOut(400)
				$('#qr').fadeOut(400)
				$('#myqr').fadeOut(400)
				$('#scan').fadeOut(400)
				$('#camara').fadeIn(400)
				ini_cam()
			}
		};
		
		


		function ini_scr(){
				pollo=1
				$('#screem').stop().animate({opacity: '1'}, 800);
				ancho_logo = $( "#logo" ).width()
				ancho_logo2 = ancho_logo/2
				$('#cargar').css('width',ancho_logo+'px')
				$('#logo, #cargar').css('margin-left', -ancho_logo2+'px')
				$('#naranja').css('width', '0px')
				$('#naranja').css('margin-left', -(ancho_logo2-15)+'px')
				$('#naranja').css('margin-top', ($("#cargar").height()/2)-1+'px')
				
				$('#naranja').animate({width: (ancho_logo-30)+'px'}, 3000);
				
				alto_pleca = $( "#pleca_abajo" ).height()
				$('#pleca_abajo').css('margin-top', -alto_pleca+'px')
				
				alto_cargando = $( "#cargando" ).height()
				$('#cargando').css('font-size', alto_cargando+'px')
				
				setTimeout("window.location.href = '#login'", 3000);
				setTimeout("$('#screen').fadeOut()", 3000)
				setTimeout("$('#login').fadeIn()", 3000)
				setTimeout("ini_log()", 3000)
		}
		
		
		function ini_log(){
				pollo=1
				$('#login').animate({opacity: '1'}, 800);
				$('.email_caja, .pass_caja').css('width',$('#im_error').width()+'px');
				$('.email_caja, .pass_caja').css('margin-left',-($('#im_error').width()/2)+'px');
		}
		
		
		
		
		
		function ini_reg(){
				pollo=1
				$('#registro').animate({opacity: '1'}, 800);
				$('#pass2').css('margin-left', -($("#pass2").width()/2)+'px')
				$('.campo').css('margin-left', -($(".campo").width()/2)+'px')
				
				$('#t_reg').css('font-size', ($("#t_reg").height()/2)+'px')
				$('#t_ple').css('font-size', ($("#t_ple").height()/2)+'px')
				
				$('.caja').css('width',$('.campo').width()+'px');
				$('.caja').css('margin-left',-($('.campo').width()/2)+'px');
				$('#bt_registro').css('width',$('.campo').width()+'px');
				$('#bt_registro').css('margin-left', -($("#bt_registro").width()/2)+'px')
		}
		
		function ini_exi(){
			pollo=1
				$('#exito').animate({opacity: '1'}, 800);
				$('#c_qr').css('margin-left', -($("#c_qr").width()/2)+'px')
				$('#bt_start').css('margin-left', -($("#bt_start").width()/2)+'px')
				$('#t_exi').css('font-size', ($("#t_exi").height()/2)+'px')
				$('#t_here').css('font-size', ($("#t_here").height()/2)+'px')
		}
		
		
		
		function ini_hom(){
			pollo=1
				$('#home').animate({opacity: '1'}, 800);
				$('#t_hom').css('font-size', $("#t_hom").height()+'px')
				$('#t_hom').css('left', $("#casita").width()+15+'px')
				$('#t_wel').css('font-size', ($("#t_wel").height()/3)+'px')
				$('.t_bthome').css('font-size', $(".t_bthome").height()+'px')
		}
		
		function ini_hor(){
			pollo=1
				$('#horarios').animate({opacity: '1'}, 800);
				$('.titulo_horarios').css('font-size', $(".titulo_horarios").height()+'px')
				$('.fecha_horarios').css('font-size', $(".fecha_horarios").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
		}
		
		
		

		
		
		function ini_dia1(){
			pollo=1
				$('#dia_uno').animate({opacity: '1'}, 800);
				$('.titulo_horarios2a').css('font-size', $(".titulo_horarios2a").height()+'px')
				$('.fecha_horarios2a').css('font-size', $(".fecha_horarios2a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita').css('width', $(".bolita").width()+'px')
				$('.contiene_bolita').css('height', $(".bolita").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		
		function ini_dia2(){
			pollo=1
				$('#dia_dos').animate({opacity: '1'}, 800);
				
				$('.titulo_horarios3a').css('font-size', $(".titulo_horarios3a").height()+'px')
				$('.fecha_horarios3a').css('font-size', $(".fecha_horarios3a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita2').css('width', $(".bolita2").width()+'px')
				$('.contiene_bolita2').css('height', $(".bolita2").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		
		function ini_dia3(){
			pollo=1
				$('#dia_tres').animate({opacity: '1'}, 800);
				
				$('.titulo_horarios4a').css('font-size', $(".titulo_horarios4a").height()+'px')
				$('.fecha_horarios4a').css('font-size', $(".fecha_horarios4a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita3').css('width', $(".bolita3").width()+'px')
				$('.contiene_bolita3').css('height', $(".bolita3").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		
		function ini_tem1(){
			pollo=1
				$('#tema1').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios5a').css('font-size', $(".titulo_horarios5a").height()+'px')
				$('.fecha_horarios5a').css('font-size', $(".fecha_horarios5a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita4').css('width', $(".bolita4").width()+'px')
				$('.contiene_bolita4').css('height', $(".bolita4").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem2(){
			pollo=1
				$('#tema2').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios6a').css('font-size', $(".titulo_horarios6a").height()+'px')
				$('.fecha_horarios6a').css('font-size', $(".fecha_horarios6a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita5').css('width', $(".bolita5").width()+'px')
				$('.contiene_bolita5').css('height', $(".bolita5").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem3(){
			pollo=1
				$('#tema3').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios7a').css('font-size', $(".titulo_horarios7a").height()+'px')
				$('.fecha_horarios7a').css('font-size', $(".fecha_horarios7a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita6').css('width', $(".bolita6").width()+'px')
				$('.contiene_bolita6').css('height', $(".bolita6").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem4(){
			pollo=1
				$('#tema4').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios8a').css('font-size', $(".titulo_horarios8a").height()+'px')
				$('.fecha_horarios8a').css('font-size', $(".fecha_horarios8a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita7').css('width', $(".bolita7").width()+'px')
				$('.contiene_bolita7').css('height', $(".bolita7").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem5(){
			pollo=1
				$('#tema5').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios9a').css('font-size', $(".titulo_horarios9a").height()+'px')
				$('.fecha_horarios9a').css('font-size', $(".fecha_horarios9a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita8').css('width', $(".bolita8").width()+'px')
				$('.contiene_bolita8').css('height', $(".bolita8").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem6(){
			pollo=1
				$('#tema6').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios10a').css('font-size', $(".titulo_horarios10a").height()+'px')
				$('.fecha_horarios10a').css('font-size', $(".fecha_horarios10a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita9').css('width', $(".bolita9").width()+'px')
				$('.contiene_bolita9').css('height', $(".bolita9").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem7(){
			pollo=1
				$('#tema7').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios11a').css('font-size', $(".titulo_horarios11a").height()+'px')
				$('.fecha_horarios11a').css('font-size', $(".fecha_horarios11a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita10').css('width', $(".bolita10").width()+'px')
				$('.contiene_bolita10').css('height', $(".bolita10").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem8(){
			pollo=1
				$('#tema8').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios12a').css('font-size', $(".titulo_horarios12a").height()+'px')
				$('.fecha_horarios12a').css('font-size', $(".fecha_horarios12a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita11').css('width', $(".bolita11").width()+'px')
				$('.contiene_bolita11').css('height', $(".bolita11").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem9(){
			pollo=1
				$('#tema9').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios13a').css('font-size', $(".titulo_horarios13a").height()+'px')
				$('.fecha_horarios13a').css('font-size', $(".fecha_horarios13a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita12').css('width', $(".bolita12").width()+'px')
				$('.contiene_bolita12').css('height', $(".bolita12").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem10(){
			pollo=1
				$('#tema10').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios14a').css('font-size', $(".titulo_horarios14a").height()+'px')
				$('.fecha_horarios14a').css('font-size', $(".fecha_horarios14a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita13').css('width', $(".bolita13").width()+'px')
				$('.contiene_bolita13').css('height', $(".bolita13").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem11(){
			pollo=1
				$('#tema11').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios15a').css('font-size', $(".titulo_horarios15a").height()+'px')
				$('.fecha_horarios15a').css('font-size', $(".fecha_horarios15a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita14').css('width', $(".bolita14").width()+'px')
				$('.contiene_bolita14').css('height', $(".bolita14").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem12(){
			pollo=1
				$('#tema12').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios16a').css('font-size', $(".titulo_horarios16a").height()+'px')
				$('.fecha_horarios16a').css('font-size', $(".fecha_horarios16a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita15').css('width', $(".bolita15").width()+'px')
				$('.contiene_bolita15').css('height', $(".bolita15").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		function ini_tem13(){
			pollo=1
				$('#tema13').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios17a').css('font-size', $(".titulo_horarios17a").height()+'px')
				$('.fecha_horarios17a').css('font-size', $(".fecha_horarios17a").height()+'px')
				$('.day').css('font-size', $(".day").height()+'px')
				$('.day_numero').css('font-size', $(".day_numero").height()+'px')
				$('.day_fecha').css('font-size', ($(".day_fecha").height()/2)+'px')
				
				$('.contiene_bolita16').css('width', $(".bolita16").width()+'px')
				$('.contiene_bolita16').css('height', $(".bolita16").height()+'px')
				
				$('.bolita_day').css('font-size', $(".bolita_day").height()+'px')
				$('.bolita_numero').css('font-size', $(".bolita_numero").height()+'px')
		}
		
		
		function ini_exp(){
			pollo=1
				$('#expositores').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios1b').css('font-size', $(".titulo_horarios1b").height()+'px')	
		}
		
		function ini_exp2(){
			pollo=1
				$('#expositores2').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios2b').css('font-size', $(".titulo_horarios2b").height()+'px')	
		}
		function ini_red(){
			pollo=1
				$('#redes').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios1c').css('font-size', $(".titulo_horarios1c").height()+'px')	
		}
		function ini_map(){
			pollo=1
				$('#mapa').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios1d').css('font-size', $(".titulo_horarios1d").height()+'px')	
		}
		function ini_qr(){
			pollo=1
				$('#qr').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios1e').css('font-size', $(".titulo_horarios1e").height()+'px')	
		}
		function ini_myqr(){
			pollo=1
				$('#myqr').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios1f').css('font-size', $(".titulo_horarios1f").height()+'px')
				$('.fecha_horarios1f').css('font-size', $(".fecha_horarios1f").height()+'px')	
		}
		function ini_sca(){
			pollo=1
				$('#scan').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios2f').css('font-size', $(".titulo_horarios2f").height()+'px')
				$('.fecha_horarios2f').css('font-size', $(".fecha_horarios2f").height()+'px')	
		}
		function ini_cam(){
			pollo=1
				$('#camara').stop().animate({opacity: '1'}, 800);
				$('.titulo_horarios1g').css('font-size', $(".titulo_horarios1g").height()+'px')
				$('.titulo_horarios1g').css('line-height', $(".titulo_horarios1g").height()-10+'px')
		}
		

		
		
		
		
		
		
		$(".atr_qr").click(function(){
		  window.location.href = '#qr'
		  $('#qr').fadeIn(400)
		  $('#myqr').fadeOut(400)
		  $('#scan').fadeOut(400)
		  ini_qr()
	    });
		
		$("#bt_myqr").click(function(){
		  window.location.href = '#myqr'
		  $('#qr').fadeOut(400)
		  $('#myqr').fadeIn(400)
		  ini_myqr()
	    });
		$("#bt_scan").click(function(){
		  window.location.href = '#scan'
		  $('#qr').fadeOut(400)
		  $('#scan').fadeIn(400)
		  ini_sca()
	    });
		
		$("#dia1").click(function(){
		  window.location.href = '#dia1'
		  $('#horarios').fadeOut(400)
		  $('#dia_uno').fadeIn(400)
		  ini_dia1()
	    });
		
		
		$("#bt_tema1").click(function(){
		  window.location.href = '#tema1'
		  $('#dia_uno').fadeOut(400)
		  $('#tema1').fadeIn(400)
		  ini_tem1()
	    });
		$("#bt_tema2").click(function(){
		  window.location.href = '#tema2'
		  $('#dia_uno').fadeOut(400)
		  $('#tema2').fadeIn(400)
		  ini_tem2()
	    });
		$("#bt_tema3").click(function(){
		  window.location.href = '#tema3'
		  $('#dia_uno').fadeOut(400)
		  $('#tema3').fadeIn(400)
		  ini_tem3()
	    });
		$("#bt_tema4").click(function(){
		  window.location.href = '#tema4'
		  $('#dia_uno').fadeOut(400)
		  $('#tema4').fadeIn(400)
		  ini_tem4()
	    });
		
		
		
		
		
		$("#dia2").click(function(){
		  window.location.href = '#dia2'
		  $('#horarios').fadeOut(400)
		  $('#dia_dos').fadeIn(400)
		  ini_dia2()
	    });
		
		$("#bt_tema5").click(function(){
		  window.location.href = '#tema5'
		  $('#dia_dos').fadeOut(400)
		  $('#tema5').fadeIn(400)
		  ini_tem5()
	    });
		$("#bt_tema6").click(function(){
		  window.location.href = '#tema6'
		  $('#dia_dos').fadeOut(400)
		  $('#tema6').fadeIn(400)
		  ini_tem6()
	    });
		$("#bt_tema7").click(function(){
		  window.location.href = '#tema7'
		  $('#dia_dos').fadeOut(400)
		  $('#tema7').fadeIn(400)
		  ini_tem7()
	    });
		$("#bt_tema8").click(function(){
		  window.location.href = '#tema8'
		  $('#dia_dos').fadeOut(400)
		  $('#tema8').fadeIn(400)
		  ini_tem8()
	    });
		$("#bt_tema9").click(function(){
		  window.location.href = '#tema9'
		  $('#dia_dos').fadeOut(400)
		  $('#tema9').fadeIn(400)
		  ini_tem9()
	    });
		
		
		
		
		$("#dia3").click(function(){
		  window.location.href = '#dia3'
		  $('#horarios').fadeOut(400)
		  $('#dia_tres').fadeIn(400)
		  ini_dia3()
	    });
		
		$("#bt_tema10").click(function(){
		  window.location.href = '#tema10'
		  $('#dia_tres').fadeOut(400)
		  $('#tema10').fadeIn(400)
		  ini_tem10()
	    });
		$("#bt_tema11").click(function(){
		  window.location.href = '#tema11'
		  $('#dia_tres').fadeOut(400)
		  $('#tema11').fadeIn(400)
		  ini_tem11()
	    });
		$("#bt_tema12").click(function(){
		  window.location.href = '#tema12'
		  $('#dia_tres').fadeOut(400)
		  $('#tema12').fadeIn(400)
		  ini_tem12()
	    });
		$("#bt_tema13").click(function(){
		  window.location.href = '#tema13'
		  $('#dia_tres').fadeOut(400)
		  $('#tema13').fadeIn(400)
		  ini_tem13()
	    });
		
		$("#atras_exp").click(function(){
		  window.location.href = '#expositores'
		   $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp()
	    });
		
		
		$("#bt_exp1").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').show()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp2").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').show()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp3").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').show()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp4").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').show()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp5").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').show()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp6").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').show()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp7").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').show()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp8").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').show()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp9").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').show()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		
		$("#bt_exp10").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').show()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		

		$("#bt_exp11").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').show()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp12").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').show()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp13").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').show()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp14").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').show()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp15").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').show()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp16").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').show()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp17").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').show()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp18").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').show()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp19").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').show()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp20").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').show()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp21").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').show()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp22").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').show()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp23").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').show()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp24").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').show()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp25").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').show()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp26").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').show()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp27").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').show()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp28").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').show()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp29").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').show()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp30").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').show()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp31").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').show()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp32").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').show()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp33").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').show()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp34").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').show()
		  $('#expo35').hide()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp35").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').show()
		  $('#expo36').hide()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		$("#bt_exp36").click(function(){
		  window.location.href = '#expositores2'
		  $('#expo1').hide()
		  $('#expo2').hide()
		  $('#expo3').hide()
		  $('#expo4').hide()
		  $('#expo5').hide()
		  $('#expo6').hide()
		  $('#expo7').hide()
		  $('#expo8').hide()
		  $('#expo9').hide()
		  $('#expo10').hide()
		  $('#expo11').hide()
		  $('#expo12').hide()
		  $('#expo13').hide()
		  $('#expo14').hide()
		  $('#expo15').hide()
		  $('#expo16').hide()
		  $('#expo17').hide()
		  $('#expo18').hide()
		  $('#expo19').hide()
		  $('#expo20').hide()
		  $('#expo21').hide()
		  $('#expo22').hide()
		  $('#expo23').hide()
		  $('#expo24').hide()
		  $('#expo25').hide()
		  $('#expo26').hide()
		  $('#expo27').hide()
		  $('#expo28').hide()
		  $('#expo29').hide()
		  $('#expo30').hide()
		  $('#expo31').hide()
		  $('#expo32').hide()
		  $('#expo33').hide()
		  $('#expo34').hide()
		  $('#expo35').hide()
		  $('#expo36').show()
		  $('#expositores').fadeOut(400)
		  $('#expositores2').fadeIn(400)
		  ini_exp2()
	    });
		
		
		
		$(".regresa").click(function(){
		  window.location.href = '#horarios'
		  $('#horarios').fadeIn(400)
		  $('#dia_uno, #dia_dos, #dia_tres, #tema1, #tema2').fadeOut(400)
		  ini_hor()
	    });
		
		$(".bt_menu1").click(function(){
		  window.location.href = '#home'
		  $('#home').fadeIn(400)
		  $('#horarios').fadeOut(400)
		  ini_hom()
	    });
		$(".bt_menu2").click(function(){
		  window.location.href = '#horarios'
		  $('#home').fadeOut(400)
		  $('#horarios').fadeIn(400)
		  $('#expositores').fadeOut(400)
		  $('#redes').fadeOut(400)
		  $('#mapa').fadeOut(400)
		  $('#qr').fadeOut(400)
		  $('#camara').fadeOut(400)
		  ini_hor()
	    });
		$(".bt_menu3").click(function(){
		  window.location.href = '#expositores'
		  $('#home').fadeOut(400)
		  $('#horarios').fadeOut(400)
		  $('#expositores').fadeIn(400)
		  $('#redes').fadeOut(400)
		  $('#mapa').fadeOut(400)
		  $('#qr').fadeOut(400)
		  $('#camara').fadeOut(400)
		  ini_exp()
	    });
		$(".bt_menu4").click(function(){
		  window.location.href = '#redes'
		  $('#home').fadeOut(400)
		  $('#horarios').fadeOut(400)
		  $('#expositores').fadeOut(400)
		  $('#redes').fadeIn(400)
		  $('#mapa').fadeOut(400)
		  $('#qr').fadeOut(400)
		  $('#camara').fadeOut(400)
		  ini_red()
	    });
		$(".bt_menu5, .ir_map").click(function(){
		  window.location.href = '#mapa'
		  $('#home').fadeOut(400)
		  $('#horarios').fadeOut(400)
		  $('#expositores').fadeOut(400)
		  $('#redes').fadeOut(400)
		  $('#mapa').fadeIn(400)
		  $('#qr').fadeOut(400)
		  $('#camara').fadeOut(400)
		  ini_red()
	    });
		$(".bt_menu6").click(function(){
		  window.location.href = '#qr'
		  $('#home').fadeOut(400)
		  $('#horarios').fadeOut(400)
		  $('#expositores').fadeOut(400)
		  $('#redes').fadeOut(400)
		  $('#mapa').fadeOut(400)
		  $('#qr').fadeIn(400)
		  $('#camara').fadeOut(400)
		  ini_qr()
	    });
		$(".bt_menu7").click(function(){
		  window.location.href = '#camara'
		  $('#home').fadeOut(400)
		  $('#horarios').fadeOut(400)
		  $('#expositores').fadeOut(400)
		  $('#redes').fadeOut(400)
		  $('#mapa').fadeOut(400)
		  $('#qr').fadeOut(400)
		  $('#camara').fadeIn(400)
		  ini_cam()
	    });
		
		$(".bt_menu8").click(function(){
		  window.location.href = '#login'
		  $('#home').fadeOut(400)
		  $('#horarios').fadeOut(400)
		  $('#dia_uno').fadeOut(400)
		  $('#dia_dos').fadeOut(400)
		  $('#dia_tres').fadeOut(400)
		  $('#tema1').fadeOut(400)
		  $('#tema2').fadeOut(400)
		  $('#tema3').fadeOut(400)
		  $('#tema4').fadeOut(400)
		  $('#tema5').fadeOut(400)
		  $('#tema6').fadeOut(400)
		  $('#tema7').fadeOut(400)
		  $('#tema8').fadeOut(400)
		  $('#tema9').fadeOut(400)
		  $('#tema10').fadeOut(400)
		  $('#tema11').fadeOut(400)
		  $('#tema12').fadeOut(400)
		  $('#tema13').fadeOut(400)
		  $('#expositores').fadeOut(400)
		  $('#redes').fadeOut(400)
		  $('#mapa').fadeOut(400)
		  $('#qr').fadeOut(400)
		  $('#camara').fadeOut(400)
		  $('#login').fadeIn(400)
		  ini_log()
	    });
		
		
		
		$("#salir").click(function(){
		  window.location.href = '#login'
		  $('#home').fadeOut(400)
		  $('#login').fadeIn(400)
		  ini_log()
	    });
		
		
		
		
		/*$("#boton_linkedin").click(function(){
		  window.location.href = '#exito'
		  $('#login').fadeOut(400)
		  $('#exito').fadeIn(400)
		  ini_exi()
	    });*/

		$("#boton_registro").click(function(){
		  window.location.href = '#registro'
		  $('#login').fadeOut(400)
		  $('#registro').fadeIn(400)
		  ini_reg()
	    });
		
		$("#bt_start").click(function(){
		  window.location.href = '#home'
		  $('#exito').fadeOut(400)
		  $('#home').fadeIn(400)
		  ini_hom()
	    });
		
		
		$("#salir").click(function(){
		  window.location.href = '#login'
		  $('#home').fadeOut(400)
		  $('#login').fadeIn(400)
		  ini_log()
	    });
		
		$("#boton_horarios").click(function(){
		  window.location.href = '#horarios'
		  $('#home').fadeOut(400)
		  $('#horarios').fadeIn(400)
		  ini_hor()
	    });
		$("#boton_expositores").click(function(){
		  window.location.href = '#expositores'
		  $('#home').fadeOut(400)
		  $('#expositores').fadeIn(400)
		  ini_exp()
	    });
		$("#boton_mapa").click(function(){
		  window.location.href = '#mapa'
		  $('#home').fadeOut(400)
		  $('#mapa').fadeIn(400)
		  ini_map()
	    });
		$("#boton_social").click(function(){
		  window.location.href = '#redes'
		  $('#home').fadeOut(400)
		  $('#redes').fadeIn(400)
		  ini_red()
	    });
		$("#boton_qr").click(function(){
		   window.location.href = '#qr'
		  $('#home').fadeOut(400)
		  $('#qr').fadeIn(400)
		  ini_qr()
	    });
		$("#boton_share").click(function(){
		  window.location.href = '#camara'
		  $('#home').fadeOut(400)
		  $('#camara').fadeIn(400)
		  ini_cam()
	    });
	
	
		




		$(function() {
			var $window = $(window);
			var width = $window.width();
			var height = $window.height();

			setInterval(function () {
				if ((width != $window.width()) || (height != $window.height())) {
					if(pollo==1){
						$('#screem, #login').stop().animate({opacity: '0.0'}, 0);
						width = $window.width();
						height = $window.height();
						setTimeout("iniciar()", 300);
						pollo=0
					}
				}
			}, 10);
		});
        </script>
        <script src="js/ui.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript">
            app.initialize();
        </script>
    </body>
</html>
