<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Sitio Tattersall</title>
<link rel=StyleSheet href="http://kenya.cl/sitio-tattersall/css/reset.css" type="text/css" media="screen">
<link rel=StyleSheet href="http://kenya.cl/sitio-tattersall/css/styles.css" type="text/css" media="screen">
<link rel=StyleSheet href="http://kenya.cl/sitio-tattersall/css/remates.css" type="text/css" media="screen">
<!-- inicio archivos necesarios para los tabs -->
<link href="http://kenya.cl/sitio-tattersall/tabs/css/default.css" rel="stylesheet" type="text/css" />
<link href="http://kenya.cl/sitio-tattersall/tabs/css/predifinido.css" rel="stylesheet" type="text/css" />
<link href="http://kenya.cl/sitio-tattersall/tabs/css/personalizado.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://kenya.cl/sitio-tattersall/tabs/js/activo.js" ></script>
<!-- fin archivos necesarios para los tabs -->
<script	src="http://kenya.cl/sitio-tattersall/js/jquery/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready( function (){
//al tomar el foco el campo, este se borra
	var texto="Buscar";
	$("#buscador")
	.val(texto)
	.focus(function(){ $(this).val('') })
	.blur(function(){ $(this).val() === '' ? $(this).val(texto) : null; });

	//efecto rollover
	$('#galeria_izq.muestra div.contenedor_title').hover(function() {
		$(this).addClass('overtitle');
	}, function() {
		$(this).removeClass('overtitle');
	});

	//efecto rollover
	$('#galeria_der.muestra div.contenedor_title').hover(function() {
		$(this).addClass('overtitle');
	}, function() {
		$(this).removeClass('overtitle');
	});	

	//cambiar el tamaño del iframe
    $('#pag_venta_directa').click(function() {
        //instrucciones
        $('.tabContent').height(1132);
        
    });
    $('#pag_remates').click(function() {
        //instrucciones
        $('.tabContent').height(1450);
        
    });	    
    
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		//Aqui va el código del efecto
		$('#ver_maq_equi_vehiculos').hover(
				function() {
				$('#img_flecha_propiedades').attr("src","http://kenya.cl/sitio-tattersall/images/flecha-circulo-blanco.png");
				},
				function() {
				$('#img_flecha_propiedades').attr("src","http://kenya.cl/sitio-tattersall/images/flecha-circulo.png");
				}
				);
		
	});
</script>
<style type="text/css">
.col_right div#ver_maq_equi_vehiculos {
  background: url("../images/bg_title_col_right66.png") repeat-x scroll 0 0 transparent;
  float: left;
  height: 65px;
  margin-bottom: 10px;
  padding-left: 15px;
  width: 167px;
}
.col_right #ver_maq_equi_vehiculos div.tituProp {
	color: #FFFFFF;
	float: left;
	font-family: Arial,Helmet,Freesans,sans-serif;
	font-size: 17px;
	font-weight: bold;
	height: 57px;
	line-height: 18px;
	padding-top: 4px;
	width: 136px;
}
.col_right #ver_maq_equi_vehiculos div.flecha {
  padding-top: 18px;
}
.col_right .banners #banner_financiamiento {
  border-top: none;
}
a.tab.activeTab, a.tab.activeTab:visited {
  background: url("../images/bg_tab_active2.jpg") repeat-x scroll 0 2px transparent !important;
  border-color: #B090E0 #7050A0 #7050A0 #B090E0;
  color: #FFFFFF;
}
a.tab:hover {
  background-color: #00abe6;
}
div.tabMain {
  background-color: transparent;
  border-color: #00abe6 #EDEDED #EDEDED;
  border-style: solid;
  border-width: 4px 2px 2px;
  padding: 0;
}

</style>
</head>

<body>
	<div id="sec_menu">
		<div class="wrap">
			<nav>
				<ul id="menu_ppal">
					<li><a id="item_home" href=""><span><img
								src="http://kenya.cl/sitio-tattersall/images/icono-casita.png" alt="" /></span></a></li>
					<li class="current"><a href=""><span>TATTERSALL</span></a></li>
					<li><a href=""><span>AREAS DE NEGOCIOS</span></a></li>
					<li><a href=""><span>CONTACTO</span></a></li>
					<li><a href=""><span><img
								style="padding-top: 1px; margin-left: -1px;"
								src="http://kenya.cl/sitio-tattersall/images/icono_ayuda.png" alt="" /></span></a></li>
				</ul>
			</nav>
			<span id="prox_rem">PROXIMOS REMATES</span>
		</div>
	</div>
	<div id="sec_header">
		<div class="wrap">
			<div id="logo">
				<img src="http://kenya.cl/sitio-tattersall/images/logo_ppal_tattersall.png" alt="Logo de Tattersall"
					width="410" height="84" />
			</div>
			<div id="buscar">
				<input id="buscador" name="buscador" type="text" value="Buscar" />
			</div>
			<div id="calendario_remates">
				<iframe id="frm_calendario_remates" src="../calendario/calendario.php" frameborder="0" scrolling="no" width="170" height="140"></iframe>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div id="sec_contenido">
		<div class="wrap">
			<div id="wrap_remates" style="min-height: 700px;">
				<div id="tabs-mev" class="tabBox" style="clear:both;">
					<div class="tabArea">
						<a id="pag_remates" class="tab" href="../tabs/tabs-paginas/tab_remate_fabrica_completa_moldulam.html" target="tabIframe2" style="margin-left: 10px;">Remates</a>
						<a id="pag_venta_directa" class="tab" href="../tabs/tabs-paginas/tab-venta-directa-agricola.html" target="tabIframe2">Venta Directa</a>
						<a class="tab" href="../tabs/tabs-paginas/tab-remate-online.html" target="tabIframe2">Remate On-Line</a>
					</div>
					<div class="tabMain">
					<div class="tabIframeWrapper">
						<iframe class="tabContent" name="tabIframe2" src="../tabs/tabs-paginas/tab_remate_fabrica_completa_moldulam.html" style="height: 1450px;" marginheight="8" marginwidth="8" frameborder="0"></iframe>
					</div>
					</div>
				</div>
				<div class="col_right">
					<div id="ver_maq_equi_vehiculos" style="cursor: pointer;">
						<div class="tituProp">Maquinarias, Equipos y Vehículos</div>
						<div class="flecha"><a href="javascript:void(0);"><img id="img_flecha_propiedades" src="http://kenya.cl/sitio-tattersall/images/flecha-circulo.png" alt="" /></a></div>
						<div class="clearfix"></div>
					</div>
					<div class="banners">
						<img id="banner_financiamiento" src="http://kenya.cl/sitio-tattersall/images/banners/buscamos-la-propiedad-que-ud-necesita181x136.png" alt="Buscamos la propiedad que ud necesita" />
						<img style="margin-top: 11px;" id="banner_financiamiento" src="http://kenya.cl/sitio-tattersall/images/banners/vendemos-su-propiedad181x136.png" alt="Vendemos su propiedad" />
					</div>
					
					<div class="banners" style="margin-top: 14px;">
						<img id="banner_contactenos_rem" src="http://kenya.cl/sitio-tattersall/images/banners/banner3_contactenos182x79.jpg" alt="" />
					</div>		
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div id="sec_footer">
		<div class="wrap">
			<div id="footer_left" class="bloque_footer">
				<div id="contenedor_logo_footer"></div>
				<div id="inf_direc_sup">
					<p>
						Isidora Goyenechea 3600, Piso 5 <br /> Las Condes, Santiago <br />
						Tel. (56 2) 362 30 20 Fax (56 2) 362 30 30
					</p>
				</div>
				<div id="inf_direc_inf">
					<div id="wrap_libreta"></div>
					<p>
						Buzeta 3764 <br /> Estación Central, Santiago <br /> Tel (+56 2)
					</p>
				</div>
			</div>
			<div id="footer_right">
				<div class="bloques_forter_der" style="margin-left: 18px;">
					<ul>
						<li>
							<h2 class="title">Tattersall</h2>
							<ul>
								<li><a href="javascript:void(0);">Equipo de Trabajo</a></li>
								<li><a href="javascript:void(0);">Empresa</a></li>
								<li><a href="javascript:void(0);">Red de Oficinas</a></li>
								<li><a href="javascript:void(0);">Empresa Tattersal</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="bloques_forter_der">
					<ul>
						<li>
							<h2 class="title">Propiedades</h2>
							<ul id="ryl_fam">
								<li><a href="javascript:void(0);">Remates</a></li>
								<li><a href="javascript:void(0);">Venta Directa</a></li>
								<li><a href="javascript:void(0);">Remate Online</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="bloques_forter_der">
					<ul>
						<li>
							<h2 class="title">Maquinarias, Equipos y Vehículos</h2>
							<ul id="ryl_fam">
								<li><a href="javascript:void(0);">Remates</a></li>
								<li><a href="javascript:void(0);">Venta Directa</a></li>
								<li><a href="javascript:void(0);">Arriendo Propiedades</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div id="sec_copyright">
		<div class="wrap">
			<div id="copyright">
				<p>
					Copyright &copy; 2013 Plataforma Group. Todos los Derechos
					Reservados. <span id="lbl_version">Version: 1.3.3.0</span>
				</p>
			</div>
		</div>
	</div>
</body>
</html>