<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Sitio Tattersall</title>
<link rel=StyleSheet href="../css/reset.css" type="text/css" media="screen">
<link rel=StyleSheet href="../css/styles.css" type="text/css" media="screen">
<link rel=StyleSheet href="../css/remates.css" type="text/css" media="screen">
<!-- inicio archivos necesarios para los tabs -->
<link href="../tabs/css/default.css" rel="stylesheet" type="text/css" />
<link href="../tabs/css/predifinido.css" rel="stylesheet" type="text/css" />
<link href="../tabs/css/personalizado.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../tabs/js/activo.js" ></script>
<!-- fin archivos necesarios para los tabs -->
<script	src="../js/jquery/jquery.min.js"></script>
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
});
</script>
</head>

<body>
	<div id="sec_menu">
		<div class="wrap">
			<nav>
				<ul id="menu_ppal">
					<li><a id="item_home" href=""><span><img
								src="images/icono-casita.png" alt="" /></span></a></li>
					<li class="current"><a href=""><span>TATTERSALL</span></a></li>
					<li><a href=""><span>AREAS DE NEGOCIOS</span></a></li>
					<li><a href=""><span>CONTACTO</span></a></li>
					<li><a href=""><span><img
								style="padding-top: 1px; margin-left: -1px;"
								src="images/icono_ayuda.png" alt="" /></span></a></li>
				</ul>
			</nav>
			<span id="prox_rem">PROXIMOS REMATES</span>
		</div>
	</div>
	<div id="sec_header">
		<div class="wrap">
			<div id="logo">
				<img src="../images/logo_ppal_tattersall.png" alt="Logo de Tattersall"
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
						<a class="tab" href="../tabs/tabs-paginas/tab_remate_fabrica_completa_moldulam.html" target="tabIframe2" style="margin-left: 10px;">Remates</a>
						<a class="tab" href="../tabs/tabs-paginas/tab-venta-directa.html" target="tabIframe2">Venta Directa</a>
						<a class="tab" href="../tabs/tabs-paginas/tab-remate-online.html" target="tabIframe2">Remate On-Line</a>
					</div>
					<div class="tabMain">
					<div class="tabIframeWrapper">
						<iframe class="tabContent" name="tabIframe2" src="../tabs/tabs-paginas/tab_remate_fabrica_completa_moldulam.html" marginheight="8" marginwidth="8" frameborder="0"></iframe>
					</div>
					</div>
				</div>
				<div class="col_right">
					<div id="ver_propiedades">
						<div class="tituProp">Propiedades</div>
						<div class="flecha"><a href="javascript:void(0);"><img src="../images/flecha-circulo.png" alt="" /></a></div>
						<div class="clearfix"></div>
					</div>
					<div class="banners">
						<img id="banner_financiamiento" src="../images/banners/banner_necesita_financiamiento181X132.jpg" alt="" />
					</div>
					<div id="prox_rem_side">
						<h3 class="title_rem">PROXIMOS REMATES</h3>
						<ul id="lst_rem">
							<li>
								<div class="info_rem_side">
									<h4 class="date_rem">Jueves 17 de Ene 2013</h4>
									<p class="detalle">Fábrica Completa Modulan. Por término de giro se remata: galpones, Maquinas 
									Juntas Finger Joint,
									</p>
								</div>
							</li>
							<li>
								<div class="info_rem_side">
									<h4 class="date_rem">Jueves 17 de Ene 2013</h4>
									<p class="detalle">Parcelas Colchagua, Camarico 5 Parcelas: Parcela n°62, 6.146m2; Parcela n°63, 
									8,128m2: Parcela
									</p>
								</div>							
							</li>
							<li>
								<div class="info_rem_side">
									<h4 class="date_rem">Jueves 17 de Ene 2013</h4>
									<p class="detalle">Valdivia, Terreno Insdustrial/Habitacional Zona ZU-6, Superficie: 114.000m2, 
									Frente a calle
									</p>
								</div>							
							</li>
							<li>
								<div class="info_rem_side">
									<h4 class="date_rem">Jueves 17 de Ene 2013</h4>
									<p class="detalle" style="margin-bottom: 0;">Paillaco, Unidad Económica Aserradero - Galpones - Oficinas, Completo Inventario, 
									Superficie
									</p>
								</div>							
							</li>
						</ul>
						<div id="ver_mas_rem"><a href="javascript:void(0);" id="link_vermas_remates"><img src="../images/read_more8px.png" alt="" style="float: right;" /></a></div>
					</div>
					<div class="banners" style="margin-top: 10px;">
						<img id="banner_contactenos_rem" src="../images/banners/banner3_contactenos182x79.jpg" alt="" />
					</div>		
					<div class="banners" style="margin-top: 10px;">
						<img id="banner_contactenos_rem" src="../images/banners/como_participar_remate182x132.jpg" alt="" />
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