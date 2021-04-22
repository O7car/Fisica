<?php
$z=6;

$x=7030950/$z;
$u=7030950;
echo "Este es el costo por Bulto=> $u <br />";
echo "Este es el costo por unidad=> $x <br />";
print "Estos son los valores calculados por unidad" ;
$y=0.3433;
$w=1.16;
echo "<br />";
$arr= array(($x/(1-$y)), ($x/(1-$y))*$w,'Ganancia estimada',(($x/(1-$y))*$w)-$x);
echo "<br />";
foreach ($arr as $valor)
echo "$valor <br />";
foreach ($arr as $clave => $valor) {
   
echo "$clave Estos son los valores => $valor <br />";
echo "<br />";
}
echo "<br />";
echo "Ingrese Costo por Bulto para la conversion <br />";
echo "<br />";
echo "Luego Ingrese Conversion a CU a C BULTO y los demas datos <br />";
?>

<html>

 <head>
 <title>Ecuacion con MU</title>
 <script>
 function MU()
 {
 a=document.datos.a.value;b=document.datos.b.value;c=document.datos.c.value;
 f=document.datos.f.value;
 disc=((a/(1-b))*c);
 uti=a/6;
 document.datos.d.value=disc;
 document.datos.f.value=uti;
 if (disc<=0) {alert('Perdidas')}
 else
 { x1=(1-b);
 x2=disc-a;
 document.datos.x1.value=x1;
 document.datos.x2.value=x2; }
 }
 </script>
</head>
<body text=purple bgcolor=yelow>
 <form name="datos">

 <input type="text" name="a" size="3">C.BULTO<input type="text" name="b" size="3">
 %MU<input type="text" name="c" size="3">=COSTO E
 <BR>Conversion a CU<input type="text" name="f" size="3"><BR>
 <BR>Utilidad Bruta<input type="text" name="d" size="3"><BR>
 <BR>MU=<input type="text" name="x1" size="3">
 <BR>Ganancia Neta=<input type="text" name="x2" size="3"><BR>
 <input type="button" value="Calcular" onClick="MU()">

 

 
 </form>

 

 </body>
</html> 















