<!DOCTYPE html>
<html>
<head>
	<title>
		Examen Diagnostico
	</title>
	<link rel="stylesheet" href="Main2.css">
	
</head>

<body>

<div class="contenedor">
         
<h1><?php $nombre = $_POST['name'];?>
Bienvenido
<?php
    echo $nombre;
?></h1>

  </div>
 

	<div class='contenedor'>
		
		<button  id="boton" onclick="crearTabla()">¿Que numero desea generar?</button>
		<input type="number" name="n" size="25" id="numero">
	</div>
   
    


	<script  language="JavaScript">
		function crearTabla()
		{
			var col=2;
			var filas=parseInt(document.getElementById("numero").value)+1;
			var tabla="<table class =\"numeros\">";
			var suma='1';
			var res=1;


			for(i=0;i<filas;i++){ 
				if(i==0)
				{
					tabla+="<tr class =\"titulo\">";
    		tabla+="<td> Número </td>";//numero
    		tabla+="<td> Procedimiento </td>";//Procedimiento
    		tabla+="<td> Resultado </td>";//Resultado
    		tabla+="</tr>";
    	}
    	else
    	{
    		if(i==1)
    		{
    			tabla+="<tr>";
        tabla+="<td>"+(i)+ "</td>";//numero
        suma+='x'+(i);
        tabla+="<td class=\"calculo\">"+suma+"</td>";//calculo
        res=res*(i);
        tabla+="<td class=\"resultado\">"+res+"</td>";//resultado
        tabla+="</tr>";
        suma='1';
    }
    else
    {
    	tabla+="<tr>";
        tabla+="<td>"+(i)+ "</td>";//numero
        suma+='x'+(i);
        tabla+="<td class=\"calculo\">"+suma+"</td>";//calculo
        res=res*(i);

        tabla+="<td class=\"resultado\">"+res+"</td>";//resultado
        
        tabla+="</tr>";
    }
}
}
tabla+="</table>";
document.getElementById("resultado").innerHTML=tabla;
}	
</script>
<div  id="resultado" class="centrar"></div>


</body>
</html>