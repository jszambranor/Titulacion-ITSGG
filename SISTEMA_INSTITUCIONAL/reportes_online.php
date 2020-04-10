<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../icono.jpg" type="image/x-icon" />
    <title>Fundación Ecuador People - Reportes de ingresos online</title>
    <link rel="stylesheet" href="./styles/main.css" media="screen">
</head>
<body class="loader-active" style="background-image: url('imagen/fondo_negro3.jpg'); background-position: center center;      
      background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
<br>
<br>
<script language="javascript"> 
function checar()
{
with (document.forms['ingresodatos'])
{
if(fini.value=="")
{
alert("No se permiten campos en Fecha Desde");
return false;
}
else if(ffin.value=="")
{
alert("No se permiten campos en Fecha Hasta");
return false;
}
else
return true
}
}
</script>


<link type='text/css' href='calendario/css/ui-lightness/jquery-ui-1.7.2.custom.css' rel='stylesheet' /><script type='text/javascript' src='calendario/js/jquery-1.3.2.min.js'></script>
<script type='text/javascript' src='calendario/js/jquery-ui-1.7.2.custom.min.js'></script>
<script type='text/javascript' src='jquery.jtime_.js'></script>


<div id="container">
    <div id="header">
      <p><img src="imagen/mega-menu.jpg" width="145" height="47"></p>
	  <br>
	  <p><span>Filtro</span> de ingreso Online</p>
	  </div>
    <ul id="nav">
      <li></li>
      <li><a class="new_ticket" href="document.php?func=close">Salir</a></li>
      <li><a class="home" href="prereportes.php">Atrás</a></li>
    </ul>
    <div id="content">
<div>
  </div>
<div style="margin:5px 0px 100px 0;text-align:center; width:100%;">
    
	
	
    <p style="font-size: 15px;" align="center">Aplique los filtros de acuerdo a su gusto:<strong></strong></p>
	
	<form name="ingresodatos" action="reportes.php" method="POST" target='_blank'>
    
	<table cellspacing="1" cellpadding="5" border="0"  align="center">
           		
			<tr bgcolor="#ccc">
			<td>Fecha Desde (AAAA-MM-DD):</td>
           	<td>
			<script type='text/javascript'>	$(function() {
			$('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' });
			})
			</script>

			<div class='demo'>
			<input type='text'name='date_star'id='datepicker'size='10' maxlength='10'value=''><font color='#235784'size='2' face='arial'>
			</div>
			</td>
			</tr>
			
			<tr bgcolor="#ccc">			
			<td>Fecha Hasta (AAAA-MM-DD):</td>
            <td>
					<script type='text/javascript'>	$(function() {
					$('#datepicker2').datepicker({ dateFormat: 'yy-mm-dd' });
					})</script>
					<div class='demo'>
					<input type='text'name='date_finish'id='datepicker2'size='10'maxlength='10'value=''><font color='#235784'size='2' face='arial'>
					</div>
				</td>
			</tr>
			
			<tr bgcolor="#ccc">
			<td>Ingresos online de estudiantes y pasantes:</td>
			<td>
			<select name="registros online">
			<option value="" selected>Elija opción</option>
			<option  value="est">Estudiantes Online</option>
			<option  value="pst">Pasantes online</option>
			</select>
			</td>
			</tr>
		</table>
	<table cellspacing="1" cellpadding="5" border="0"  align="center">	
	<td>
	<center>
	<tr bgcolor="#0fadf0"> 
		<td width="200"><input class="button" type="submit" value="Generar"></td>
	</tr>
	</center>
	</td>
    </table>
	</form>
</div>
</div>
 <div style="clear:both"></div> 
<div id="footer">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Fundación Ecuador People - Tesis de Titulación <i class="fa fa-hand-peace-o" aria-hidden="true"></i></div>
</body>
</html>
