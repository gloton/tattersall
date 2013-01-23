<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Calendario estilizado con CSS - CSSBlog ES</title>
	<link href="css/calendario.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			border: 0;
		}
	</style>
</head>
<body>
	<table id="calendar" summary="This month's calendar" cellpadding="0" cellspacing="2">
	<caption><a href="#" title="previous month" class="nav" style="display: none;">«</a>Marzo 2013<a href="#" title="next month" class="nav" style="display: none;">»</a></caption>
		<tbody>
			<tr style="height: 13px;">
				<th scope="col" abbr="Lunes" title="Lunes">Lu</th>
				<th scope="col" abbr="Martes" title="Martes">Ma</th>
				<th scope="col" abbr="Miercoles" title="Miercoles">Mi</th>
				<th scope="col" abbr="Jueves" title="Jueves">Ju</th>
				<th scope="col" abbr="Viernes" title="Viernes">Vi</th>
				<th scope="col" abbr="Sabado" title="Sabado">Sa</th>
				<th scope="col" abbr="Domingo" title="Domingo">Do</th>
			</tr>
			<tr>
				<td class="fueradelmes_top">&nbsp;</td>
				<td class="diadelmes">1</td>
				<td class="diadelmes">2</td>
				<td class="diadelmes">3</td>
				<td class="today" class="diadelmes"><a href="#">4</a></td>
				<td class="diadelmes">5</td>
				<td class="diadelmes">6</td>
			</tr>
			<tr>
				<td class="diadelmes">7</td>
				<td class="diadelmes">8</td>
				<td class="diadelmes">9</td>
				<td class="diadelmes">10</td>
				<td class="diadelmes">11</td>
				<td class="diadelmes">12</td>
				<td class="diadelmes">13</td>
			</tr>
			<tr>
				<td class="diadelmes">14</td>
				<td class="diadelmes">15</td>
				<td class="diadelmes">16</td>
				<td class="diadelmes">17</td>
				<td class="diadelmes">18</td>
				<td class="diadelmes">19</td>
				<td class="diadelmes">20</td>
			</tr>
			<tr>
				<td class="diadelmes">21</td>
				<td class="diadelmes">22</td>
				<td class="diadelmes">23</td>
				<td class="diadelmes">24</td>
				<td class="diadelmes">25</td>
				<td class="diadelmes">26</td>
				<td class="diadelmes">27</td>
			</tr>
			<tr>
				<td class="diadelmes">28</td>
				<td class="diadelmes">29</td>
				<td class="diadelmes">30</td>
				<td class="diadelmes">31</td>
				<td class="fueradelmes_low">&nbsp;</td>
				<td class="fueradelmes_low">&nbsp;</td>
				<td class="fueradelmes_low">&nbsp;</td>
			</tr>
		</tbody>
	</table>
</body>
</html>