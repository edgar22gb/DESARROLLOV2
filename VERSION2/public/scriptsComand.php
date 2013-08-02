<?php
//COMANDO PARA VER LAS BASES DE DATOS
if($this->id[0]=="v" and $this->id[1]=="e" and $this->id[2]=="r" and $this->id[3]==" " and $this->id[4]=="b" and $this->id[5]=="a" and $this->id[6]=="s" and $this->id[7]=="e" and $this->id[8]=="s")
{
	$enlace = mysql_connect('localhost', 'root', '');
	if(!$enlace)
	{
		die('No pudo conectarse: ' . mysql_error());

	}

	$sql = mysql_query("show databases",$enlace);
	
 	while($db= mysql_fetch_row($sql)){
		echo $db[0]."<br/>";
	}

}


//COMANDO PARA CREAR LAS BASES DE DATOS
if($this->id[0]=="c" and $this->id[1]=="r" and $this->id[2]=="e" and $this->id[3]=="a" and $this->id[4]==" " and $this->id[5]=="b" and $this->id[6]=="a" and $this->id[7]=="s" and $this->id[8]=="e" and $this->id[9]==" " and $this->id[10]!="" and $this->id[10]!=" ")
{
	$tama=strlen($this->id);
	$bd="";
	for($c=10;$c<$tama;$c++)
	{
		$bd=$bd.$this->id[$c];
	}

	$enlace = mysql_connect('localhost', 'root', '');
	if (!$enlace)
	{
		die('No pudo conectarse: ' . mysql_error());
	}

	$sql = 'CREATE DATABASE '.$bd;
	if (mysql_query($sql, $enlace)) 
	{
		echo "La base de datos ".$bd." fue creada correctamente";
	} 
	else 
	{
		echo 'Error al crear la base de datos: ' . mysql_error() . "\n";
	}
}
//COMANDO PARA CREAR TABLAS
if($this->id[0]=="c" and $this->id[1]=="r" and $this->id[2]=="e" and $this->id[3]=="a" and $this->id[4]==" " and $this->id[5]=="t" and $this->id[6]=="a" and $this->id[7]=="b" and $this->id[8]=="l" and $this->id[9]=="a" and $this->id[10]==" "  and $this->id[11]!=" "  and $this->id[11]!="")
{
	$tama=strlen ($this->id);
	$bd="";
	for($c=11;$c<$tama;$c++)
	{
	$bd=$bd.$this->id[$c];
	}
	$tabla="";
	for($c=0;$c<strlen($bd);$c++){
		if($bd[$c]==" "){
			break;
		}
		else{
		$tabla=$tabla.$bd[$c];
		}
	}
	
	$base="";
	for($c=$c+1;$c<strlen($bd);$c++){
			$base=$base.$bd[$c];
	}
	$enlace = mysql_connect('localhost', 'root', '');
	mysql_select_db($base) or die(mysql_error());
	if(mysql_query("CREATE TABLE $tabla (id int auto_increment primary key)")){
	echo "tabla creada correctamente";
	}
	else{
	echo mysql_error();	
	}
	//alter table tabla1 add campo1 varchar(3)
}


//COMANDO PARA CREAR UN PROYECTO DE TIPO ZEND FRAMEWORK

if($this->id[0]=="c" and $this->id[1]=="r" and $this->id[2]=="e" and $this->id[3]=="a" and $this->id[4]==" " and $this->id[5]=="p" and $this->id[6]=="r" and $this->id[7]=="o" and $this->id[8]=="y" and $this->id[9]=="e" and $this->id[10]=="c" and $this->id[11]==" " and $this->id[12]!=" " and $this->id[12]!="")
{
	
	
	$tama=strlen ($this->id);
	$bd="";
	for($c=12;$c<$tama;$c++)
	{
	$bd=$bd.$this->id[$c];
	}
	
	
	$ruta="/home/edgar/Documentos/ZEND";
	mkdir($ruta);
	$ruta2="/home/edgar/Documentos/ZEND/ZF";
	mkdir($ruta2);
	//$rutaApp="/home/edgar/Documentos/PROYECTOS/ZF/Aplication";
	//mkdir($rutaApp);*/
	$ruta3="/home/edgar/Documentos/ZEND/ZF/Application/";
	mkdir($ruta3);
	$rutaAp="/home/edgar/Documentos/ZEND/ZF/Application/Controllers";
	mkdir($rutaAp);
	$rutaConf="/home/edgar/Documentos/ZEND/ZF/Application/Configs";
	mkdir($rutaConf);
	$rutaForms="/home/edgar/Documentos/ZEND/ZF/Application/Forms";
	mkdir($rutaForms);
	$rutaLayo="/home/edgar/Documentos/ZEND/ZF/Application/Layouts";
	mkdir($rutaLayo);
	$rutaModel="/home/edgar/Documentos/ZEND/ZF/Application/Models";
	mkdir($rutaModel);
	$rutaDbTabla="/home/edgar/Documentos/ZEND/ZF/Application/Models/DbTable";
	mkdir($rutaDbTabla);
	$rutaVista="/home/edgar/Documentos/ZEND/ZF/Application/View";
	mkdir($rutaVista);
	$rutaDoc="/home/edgar/Documentos/ZEND/ZF/Docs";
	mkdir($rutaDoc);
	
	$rutaLibreria="/home/edgar/Documentos/ZEND/ZF/Library";
	mkdir($rutaLibreria);
	$rutaPublica="/home/edgar/Documentos/ZEND/ZF/Public";
	mkdir($rutaPublica);
	$rutaTestings="/home/edgar/Documentos/ZEND/ZF/Test";
	mkdir($rutaTestings);
	
	//$ruta4="/home/edgar/Documentos/PROYECTOS/ZF/Public";
	//mkdir($ruta4);
	//$ruta5="/home/edgar/Documentos/PROYECTOS/ZF/test";
	//mkdir($ruta5);
	
	//CREACION DE LOS ARCHIVOS DENTRO DE LA CARPETA DE APPLICACION DE ZF
	fopen('/home/edgar/Documentos/ZEND/ZF/Docs/README.txt','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Controllers/exec.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Controllers/IndexController.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Controllers/ErrorController.php','w');
	
	
	//CREACION DE LOS ARCHIVOS PARA LOS FORMULARIOS
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Forms/Cliente.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Forms/Desarrollador.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Forms/Recursos.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Forms/RegistraProyecto.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Forms/Shell.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Forms/Version.php','w');
	
	//CREACION DE LOS ARCHIVOS PARA LA BASE DE DATOS
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/Clientes.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/Consultas.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/Desarrollador.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/Regrecusro.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/Regproyec.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/Versiones.php','w');
	
	//CREACION DE LOS ARCHIVOS PARA LAS TABLAS

	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/DbTable/Clientes.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/DbTable/Desarrolladores.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/DbTable/Pro.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/DbTable/Recurso.php','w');
	fopen('/home/edgar/Documentos/ZEND/ZF/Application/Models/DbTable/Version.php','w');
	
	echo "PROYECTO  ZEND CREADO CORRECTAMENTE <br>";

}
//COMANDO PARA CREAR PROYECTO DE TIPO RUBY RAILS
if($this->id[0]=="c" and $this->id[1]=="r" and $this->id[2]=="e" and $this->id[3]=="a" and $this->id[4]=="r" and $this->id[5]==" " and $this->id[6]=="p" and $this->id[7]=="r" and $this->id[8]=="o" and $this->id[9]=="y" and $this->id[10]=="e" and $this->id[11]==" " and $this->id[12]!=" " and $this->id[12]!="")
{
	$tama= strlen($this->id);
	$bd="";
	for($c=12;$c<$tama;$c++)
	{
		$bd=$bd.$this->id[$c];
	}
	$ruta="/home/edgar/Documentos/RUBYRAILS";
	mkdir($ruta);
	$ruta1="/home/edgar/Documentos/RUBYRAILS/RR";
	mkdir($ruta1);
	$ruta2="/home/edgar/Documentos/RUBYRAILS/RR/App";
	mkdir($ruta2);
	$ruta3="/home/edgar/Documentos/RUBYRAILS/RR/Config";
	mkdir($ruta3);
	$ruta4="/home/edgar/Documentos/RUBYRAILS/RR/Db";
	mkdir($ruta4);
	$ruta5="/home/edgar/Documentos/RUBYRAILS/RR/Lib";
	mkdir($ruta5);
	$ruta6="/home/edgar/Documentos/RUBYRAILS/RR/Log";
	mkdir($ruta6);
	$ruta7="/home/edgar/Documentos/RUBYRAILS/RR/Public";
	mkdir($ruta7);
	$ruta8="/home/edgar/Documentos/RUBYRAILS/RR/Script";
	mkdir($ruta8);
	$ruta9="/home/edgar/Documentos/RUBYRAILS/RR/Test";
	mkdir($ruta9);
	$ruta10="/home/edgar/Documentos/RUBYRAILS/RR/Tmp";
	mkdir($ruta10);
	$ruta11="/home/edgar/Documentos/RUBYRAILS/RR/Vendor";
	mkdir($ruta11);
	
	
	
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/Config/Database.txt','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/Config/Routers.txt','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/Db/seeds.txt','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/Config/Routers.txt','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/Log/git.txt','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/Public/index1.html','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/Public/index2.html','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/Public/Index3.php','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/Public/Principal.php','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/Script/rails.txt','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/README.txt','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/GEMFILE.txt','w');
	fopen('/home/edgar/Documentos/RUBYRAILS/RR/CONFIG.txt','w');
	echo"PROYECTO RUBY RAILS CREADO CORRECTAMENTE <br>";
	
	
} 

//COMANDO PARA REALIZAR PROYECTO PAYTON
if($this->id[0]=="p" and $this->id[1]=="a" and $this->id[2]=="y" and $this->id[3]=="t" and $this->id[4]=="o" and $this->id[5]=="n")
{
	
	
	$tama= strlen($this->id);
	$bd="";
	for($c=5;$c<$tama;$c++)
	{
		$bd=$bd.$this->id[$c];
	}

	$rutapay="/home/edgar/Documentos/PAYTON";
	mkdir($rutapay);
	$rutaProyec="/home/edgar/Documentos/PAYTON/Proyecto";
	mkdir($rutaProyec);
	$rutaPrincipal="/home/edgar/Documentos/PAYTON/Principal";
	mkdir($rutaPrincipal);

	//CREACION DE ARCHIVOS
	fopen('/home/edgar/Documentos/PAYTON/Proyecto/Init.txt','w');
	fopen('/home/edgar/Documentos/PAYTON/Proyecto/Models.php','w');
	fopen('/home/edgar/Documentos/PAYTON/Proyecto/Test.txt','w');
	fopen('/home/edgar/Documentos/PAYTON/Proyecto/Vistas.php','w');

	fopen('/home/edgar/Documentos/PAYTON/Principal/Ini.txt','w');
	fopen('/home/edgar/Documentos/PAYTON/Principal/Setting.txt','w');
	fopen('/home/edgar/Documentos/PAYTON/Principal/Urls.php','w');
	fopen('/home/edgar/Documentos/PAYTON/Principal/Url.txt','w');
	fopen('/home/edgar/Documentos/PAYTON/Principal/Seting.php','w');
	fopen('/home/edgar/Documentos/PAYTON/Principal/Ini.php','w');

	fopen('/home/edgar/Documentos/PAYTON/Manage.php','w');

	echo "PROYECTO PAYTON CREADO CORRECTAMENTE<br>";
	
}



//COMANDO PARA VER PROYECTOS DE TIPO ZED
if($this->id[0]=="v" and $this->id[1]=="e" and $this->id[2]=="r" and $this->id[3]==" " and $this->id[4]=="c" and $this->id[5]=="a" and $this->id[6]=="r" and $this->id[7]=="p" and $this->id[8]=="e" and $this->id[9]=="t" and $this->id[10]=="a")
{
	$path="/home/edgar/Documentos/ZEND/ZF";
	$directorio=dir($path);
	echo "Directorio <br>".$path."<br>";
	while ($archivo = $directorio->read())
	{
		echo $archivo."";
	}
	$directorio->close();
}
//COMANDO PARA VER PROYECTOS DE TIPO RUBY RAILS
if($this->id[0]=="v" and $this->id[1]=="e" and $this->id[2]=="r" and $this->id[3]==" " and $this->id[4]=="p" and $this->id[5]=="r" and $this->id[6]=="o" and $this->id[7]=="y" and $this->id[8]=="e" and $this->id[9]=="c" and $this->id[10]=="t")

{
	$rutaCrea="/home/edgar/Documentos/RUBYRAILS/RR";
	$direcRails=dir($rutaCrea);
	echo "Directorio<br>".$rutaCrea."";
	while ($archivo=$direcRails->read())
	{
		echo $archivo."";
	}
	$direcRails->close();
	
}
//COMANDO PARA VER PROYECTOS PAYTON

if($this->id[0]=="p" and $this->id[1]=="r" and $this->id[2]=="o" and $this->id[3]==" " and $this->id[4]=="p" and $this->id[5]=="a" and $this->id[6]=="y" and $this->id[7]=="t" and $this->id[8]=="o" and $this->id[9]=="n")
{
	$verPay="/home/edgar/Documentos/PAYTON";
	$direcPyton=dir($verPay);
	echo "Directorio<br>".$verPay."";
	while ($archivo=$direcPyton->read())
	{
		echo $archivo."";
	}
	$direcPyton->close();
}


 

?>