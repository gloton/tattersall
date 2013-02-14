<?php
session_start();
 $DIRBASE="http://www.heavenward.cl/control_obras/";

 header("Content-type: text/html; charset=utf-8");
 //header('Content-Type: text/html; charset=ISO-8859-1');
 $DIRWEB="http://www.heavenward.cl/";
 $DIRLOGIN="http://heavenward.cl/";
 $PCL_LOCAL_HOST="localhost";
 $PCL_LOCAL_BASEDATOS="heavenward2";
 $PCL_LOCAL_GUEST="heavenward";
 $PCL_LOCAL_GUEST_PASS="he.134679";
/* $PCL_LOCAL_GUEST="root";
 $PCL_LOCAL_GUEST_PASS="";*/

$path_fotos = "/home/heavenward/public_html/control_obras/fotos";   //Donde esta la carpeta para subir imagenes
$DIRFOTOS = $DIRBASE."fotos/";   //Directorio para las fotos
$max_size_fotos = 100000;          //Tama�o maximo
/*ini_set("SMTP","smtp.vtr.net");*/
define("CTE_FECHAMINIMA","1969-12-31");

// define perfiles
define("PERFIL_SUPERVISORHW",6);  //
define("PERFIL_SUPERVISORINSTALACIONES",17);  //
define("PERFIL_SUPERVISOR_SUPERHW",20);  //
define("PERFIL_GERENTECLIENTE",18); // 18
define("PERFIL_ADMINISTRADORCLIENTE",19); //19
define("PERFIL_USUARIOCOMUN",21); //21

//define("PERFILES_TODAS_LAS_OBRAS","(".PERFIL_USUARIOCOMUN.",".PERFIL_SUPERVISOR_SUPERHW.")");
/* Constantes */
//require($DIRBASE."include/include_constantes.inc");
require("/home/heavenward/public_html/control_obras/include/include_constantes.inc");
?>
