<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--************************************************************************-->
<!--* Tabs Demo                                                            *-->
<!--*                                                                      *-->
<!--* Copyright 2002 by Mike Hall                                          *-->
<!--* Please see http://www.brainjar.com for terms of use.                 *-->
<!--*                                                                      *-->
<!--* Note: A transitional DTD is needed due to the use of link targets.   *-->
<!--************************************************************************-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Tabs para tattersal</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href="css/default.css" rel="stylesheet" type="text/css" />
<link href="css/predifinido.css" rel="stylesheet" type="text/css" />
<link href="css/personalizado.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/activo.js" ></script>
</head>
<body>
<div id="tabs-mev" class="tabBox" style="clear:both;">
	<div class="tabArea">
		<a class="tab" href="tabs-paginas/tab-remates.html" target="tabIframe2">Remates</a>
		<a class="tab" href="tabs-paginas/tab-venta-directa.html" target="tabIframe2">Venta Directa</a>
		<a class="tab" href="tabs-paginas/tab-remate-online.html" target="tabIframe2">Remate On-Line</a>
	</div>
	<div class="tabMain">
	<div class="tabIframeWrapper">
		<iframe class="tabContent" name="tabIframe2" src="tabs-paginas/tab-remates.html" marginheight="8" marginwidth="8" frameborder="0"></iframe>
	</div>
	</div>
</div>

</body>
</html>