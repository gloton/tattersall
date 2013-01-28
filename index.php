<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Sitio Tattersall</title>
<link rel=StyleSheet href="css/reset.css" type="text/css" media="screen">
<link rel=StyleSheet href="css/styles.css" type="text/css"
	media="screen">
<script	src="js/jquery/jquery.min.js"></script>
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
				<img src="images/logo_ppal_tattersall.png" alt="Logo de Tattersall"
					width="410" height="84" />
			</div>
			<div id="buscar">
				<input id="buscador" name="buscador" type="text" value="Buscar" />
			</div>
			<div id="calendario_remates">
				<iframe id="frm_calendario_remates" src="./calendario/calendario.php" frameborder="0" scrolling="no" width="170" height="140"></iframe>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div id="sec_contenido">
		<div class="wrap">
			<div id="wrap_galery">
				<div id="galeria_izq" class="muestra">
					<div class="muestra_top">
						<div class="wrap_contenedor_title">
							<div class="contenedor_title">
								<div class="muestra_title">Propiedades</div>
							</div>
						</div>
						<div class="galeria_raya"></div>
						<div class="wrap_muestra_main">
							<div class="muestra_main">
								<img src="images/slide-propiedades/propiedades_slide1.jpg"
									alt="Slide Propiedades" width="442" height="332" />
							</div>
						</div>
					</div>
					<div class="muestra_low">
						<div class="muestra_thum">
							<ul id="thums_propiedades">
								<li><img
									src="images/slide-propiedades/propiedades_slide2_thumb.jpg"
									alt="" width="145" height="107" /></li>
								<li><img
									src="images/slide-propiedades/propiedades_slide3_thumb.jpg"
									alt="" width="145" height="107" /></li>
								<li><img
									src="images/slide-propiedades/propiedades_slide4_thumb.jpg"
									alt="" width="145" height="107" /></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="galeria_der" class="muestra">
					<div class="muestra_top">
						<div class="wrap_contenedor_title">
							<div class="contenedor_title">
								<div class="muestra_title">Maquinarias, Equipos y Vehículos</div>
							</div>
						</div>
						<div class="galeria_raya"></div>
						<div class="wrap_muestra_main">
							<div class="muestra_main">
								<img src="images/slide-maquinas/maquinas_slide1.jpg"
									alt="Slide Propiedades" width="442" height="332" />
							</div>
						</div>
					</div>
					<div class="muestra_low">
						<div class="muestra_thum">
							<ul id="thums_propiedades">
								<li><img src="images/slide-maquinas/maquinas_slide2_thumb.jpg"
									alt="" width="145" height="107" /></li>
								<li><img src="images/slide-maquinas/maquinas_slide3_thumb.jpg"
									alt="" width="145" height="107" /></li>
								<li><img src="images/slide-maquinas/maquinas_slide4_thumb.jpg"
									alt="" width="145" height="107" /></li>
							</ul>
						</div>
					</div>
				</div>
			</div>		
			<div class="clearfix"></div>
			<div id="wrap_noti_dest"  style="background-color: #D6D6D6;">
				<div id="cont_noti_destac" class="cont_block">
					<div class="cont_title">NOTICIAS DESTACADAS</div>
					<div class="cont_cuerpo">
						<h4>NUEVA WEB TATTERSALL</h4>
						<div id="img_noti_dest">
							<img src="images/home/noti_dest_1.jpg" alt="" />
						</div>
						<p>Para buscar oportunidades</p>
						<hr />
						<div class="vermas">
							<p>
								<a href="" class="link_vermas"><span>Ver más</span></a>
							</p>
						</div>
					</div>
				</div>
				<div id="cont_prox_rem" class="cont_block">
					<div class="cont_title">
						<div id="cont_title_prox_rem">PROXIMOS REMATES</div>
					</div>
					<ul id="listado_prox_rem">
						<li>
							<h3>Jueves, 17 De Ene, 2013</h3>
							<p>Augue per fringilla aptent egestas convallis vivamus iaculis
								consectetur nam varius, platea augue libero quam ante scelerisque
								a scelerisque ipsum metus.
						
						</li>
						<li>
							<h3>Jueves, 17 De Ene, 2013</h3>
							<p>Augue per fringilla aptent egestas convallis vivamus iaculis
								consectetur nam varius, platea augue libero quam ante scelerisque
								a scelerisque ipsum metus.</p>
						</li>
						<li>
							<h3>Jueves, 17 De Ene, 2013</h3>
							<p>Augue per fringilla aptent egestas convallis vivamus iaculis
								consectetur nam varius.</p>
						</li>
						<li>
							<h3>Jueves, 17 De Ene, 2013</h3>
							<p>Augue per fringilla aptent egestas convallis vivamus iaculis
								consectetur nam varius.</p>
						</li>
					</ul>
					<hr />
					<div class="vermas">
						<p>
							<a class="link_vermas" href="javascript:void(0);"><span>Ver más</span></a>
						</p>
					</div>
				</div>
				<div id="cont_banners">
					<ul id="listado_banners">
						<li><img src="images/banners/banner1_remates.jpg" alt="" /></li>
						<li><img
							src="images/banners/banner2_ofrecimiento_financiamiento.jpg"
							alt="" /></li>
						<li><img src="images/banners/banner3_contactenos.jpg" alt="" /></li>
					</ul>
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