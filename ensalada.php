<?php
If(isset($_POST['botonsirris'])){
$msg = "Hola alguien pidio una ensalada ". $_POST['tam'] . ", que lleva: ".$_POST['msg']." a nombre de: ". $_POST['name'] ." ,teléfono: ". $_POST['tel'] ." a la dirección: " . $_POST['dir'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if(mail("betompiates@gmail.com","Pedido de ensalada",$msg))
{
?>
<script>
	alert("Tu pedido ha sido enviado :D");
</script>
<?php	
}
else
{
?>
<script>
	alert("Tu pedido no ha sido enviado :( hubo algún problema ");
</script>
<?php	
}
}
?>

<!doctype html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<style>
			body, html {
				height: 100%;
			}
			th {
				color: white;
			}

			.parallax {
				/* The image used */
				background-image: url('img/ensalada.jpg');
				/* Full height */
				height: 400%;
				/* Create the parallax scrolling effect */
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}
			#makeMeDraggable {
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable1 {
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable2 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable3 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable4 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable5 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable6 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable7 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable8 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable9 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable10 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable11 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable12 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable13 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable14 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable15 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable16 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable17 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable18 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable19 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable20 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable21 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable22 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable23 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable24 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable25 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable26 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable27 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable28 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable29 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable30 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable31 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable32 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable33 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable34 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable35 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable36 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable37 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable38 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable39 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable40 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable41 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable42 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable43 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable44 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable45 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable46 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable47 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable48 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable49 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable50 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable51 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable52 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable53 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable54 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable55 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable56 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable57 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable58 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}
			#makeMeDraggable59 {
				float: bottom;
				width: 80px;
				height: 80px;
				background: transparent;
				z-index: 1000;
			}

			#makeMeDraggable:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable1:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable2:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable3:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable4:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable5 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable6 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable7 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable8 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable9:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable10:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable11:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable12:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable13:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable14:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable15 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable16 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable17 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable18 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable19 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable20 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable21:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable22 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable23 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable24 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable25 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable26 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable27 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable28 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable29 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable30 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable31 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable32 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable33 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable34 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable35 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable36:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable37:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable38:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable39 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable40:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable41:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable42:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable43:hover {
				color: #1ad1ff;
			}
			#makeMeDraggable44 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable45 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable46 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable47 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable48 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable49 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable50 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable51 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable52 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable53 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable54 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable55 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable56 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable57 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable58 :hover {
				color: #1ad1ff;
			}
			#makeMeDraggable59 :hover {
				color: #1ad1ff;
			}

			#makeMeDroppable {
				top: 48%;
				width: 50%;
				position: absolute;
				height: 500px;
				margin: 0 -4% 25px 46%;
				border: 1px solid #999;
			}
			form {
				margin: 0 0 0 55%;
				background-color: rgba(0,0,0,0.7);
				position: absolute;
				width: 400px;
				padding: 1em;
				border: 1px solid #CCC;
				border-radius: 1em;
				top: 130%;
				color: white;
			}

			label {
				display: inline-block;
				width: 90px;
				text-align: right;
			}

			input, textarea {

				font: 1em sans-serif;
				width: 300px;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
				border: 1px solid #999;
			}

			input:focus, textarea:focus {
				border-color: #000;
			}

			textarea {
				vertical-align: top;
				height: 5em;
				resize: vertical;
			}

			.button {
				padding-left: 90px;
			}

			button {
				margin-left: .5em;
			}
		</style>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				console.log("ready!");
				$("#name").blur(function() {
					$("#msg").append("Verduras: " + pedidoVerduras + " Proteína: " + pedidoProt + " Toppings: " + pedidoTopps + " Aderezos: " + pedidoAderez+" ");
				});
				$("#size").change(function() {
					if (this.value == "none") {
						$("#content").css({
							'display' : 'none'
						});
						$("#formDiv").css({
							'display' : 'none'
						});

					} else {
						size = $('#size').val();
						$("#tam").val(size);
						$("#content").css({
							'display' : 'inline'
						});
						$("#formDiv").css({
							'display' : 'inline'
						});
					}
				});
			});
			$(init);

			function init() {
				$('#makeMeDraggable').draggable();
				$('#makeMeDraggable1').draggable();
				$('#makeMeDraggable2').draggable();
				$('#makeMeDraggable3').draggable();
				$('#makeMeDraggable4').draggable();
				$('#makeMeDraggable5').draggable();
				$('#makeMeDraggable6').draggable();
				$('#makeMeDraggable7').draggable();
				$('#makeMeDraggable8').draggable();
				$('#makeMeDraggable9').draggable();
				$('#makeMeDraggable10').draggable();
				$('#makeMeDraggable11').draggable();
				$('#makeMeDraggable12').draggable();
				$('#makeMeDraggable13').draggable();
				$('#makeMeDraggable14').draggable();
				$('#makeMeDraggable15').draggable();
				$('#makeMeDraggable16').draggable();
				$('#makeMeDraggable17').draggable();
				$('#makeMeDraggable18').draggable();
				$('#makeMeDraggable19').draggable();
				$('#makeMeDraggable20').draggable();
				$('#makeMeDraggable21').draggable();
				$('#makeMeDraggable22').draggable();
				$('#makeMeDraggable23').draggable();
				$('#makeMeDraggable24').draggable();
				$('#makeMeDraggable25').draggable();
				$('#makeMeDraggable26').draggable();
				$('#makeMeDraggable27').draggable();
				$('#makeMeDraggable28').draggable();
				$('#makeMeDraggable29').draggable();
				$('#makeMeDraggable30').draggable();
				$('#makeMeDraggable31').draggable();
				$('#makeMeDraggable32').draggable();
				$('#makeMeDraggable33').draggable();
				$('#makeMeDraggable34').draggable();
				$('#makeMeDraggable35').draggable();
				$('#makeMeDraggable36').draggable();
				$('#makeMeDraggable37').draggable();
				$('#makeMeDraggable38').draggable();
				$('#makeMeDraggable39').draggable();
				$('#makeMeDraggable40').draggable();
				$('#makeMeDraggable41').draggable();
				$('#makeMeDraggable42').draggable();
				$('#makeMeDraggable43').draggable();
				$('#makeMeDraggable44').draggable();
				$('#makeMeDraggable45').draggable();
				$('#makeMeDraggable46').draggable();
				$('#makeMeDraggable47').draggable();
				$('#makeMeDraggable48').draggable();
				$('#makeMeDraggable49').draggable();
				$('#makeMeDraggable50').draggable();
				$('#makeMeDraggable51').draggable();
				$('#makeMeDraggable52').draggable();
				$('#makeMeDraggable53').draggable();
				$('#makeMeDraggable54').draggable();
				$('#makeMeDraggable55').draggable();
				$('#makeMeDraggable56').draggable();
				$('#makeMeDraggable57').draggable();
				$('#makeMeDraggable58').draggable();
				$('#makeMeDraggable59').draggable();

				$('#makeMeDroppable').droppable({
					drop : handleDropEvent
				});
			}

			verdura = 0;
			proteina = 0;
			toppings = 0;
			carbohidrato = 0;
			aderezo = 0;
			pedidoVerduras = "";
			pedidoProt = "";
			pedidoTopps = "";
			pedidoAderez = "";
			function handleDropEvent(event, ui) {
				var draggable = ui.draggable;
				//(1 proteína, 4 verduras, 2 toppings, 1 carbohidrato y 1 aderezo)

				size = $("#size").val();
				type = draggable.attr('type');
				switch (size) {
				case "mediana":
					if (type == "verd") {
						if (verdura < 4) {

							verdura = verdura + 1;
							pedidoVerduras = pedidoVerduras + ", " + draggable.attr('ing');
						} else {
							alert("Solo tienes derecho a 4 verduras :(");
							ui.draggable.draggable('option', 'revert', true);
						}
					}
					if (type == "prot") {
						if (proteina < 1) {
							pedidoProt = pedidoProt + ", " + draggable.attr('ing');
							proteina = proteina + 1;
						} else {
							alert("Solo tienes derecho a 1 proteína :(");
							ui.draggable.draggable('option', 'revert', true);
						}
					}
					if (type == "tops") {
						if (toppings < 2) {
							pedidoTopps = pedidoTopps + ", " + draggable.attr('ing');
							toppings = toppings + 1;
						} else {
							alert("Solo tienes derecho a 2 toppings :(");
							ui.draggable.draggable('option', 'revert', true);
						}
					}
					if (type == "dress") {
						if (aderezo < 1) {
							pedidoAderez = pedidoAderez + ", " + draggable.attr('ing');
							aderezo = aderezo + 1;
						} else {
							alert("Solo tienes derecho a 1 aderezo :(");
							ui.draggable.draggable('option', 'revert', true);
						}
					}
					break;
				//(2 proteínas, 5 verduras, 2 toppings, 2 carbohidratos y 1 aderezo)
				case "grande":
					if (type == "verd") {
						if (verdura < 5) {
							pedidoVerduras = pedidoVerduras + ", " + draggable.attr('ing');
							verdura = verdura + 1;
							pedidoVerduras = pedidoVerduras + ", " + draggable.attr('ing');

						} else {
							alert("Solo tienes derecho a 5 verduras :(");
							ui.draggable.draggable('option', 'revert', true);
						}
					}
					if (type == "prot") {
						if (proteina < 2) {
							pedidoProt = pedidoProt + ", " + draggable.attr('ing');
							proteina = proteina + 1;
						} else {
							alert("Solo tienes derecho a 2 proteína :(");
							ui.draggable.draggable('option', 'revert', true);
						}
					}
					if (type == "tops") {
						if (toppings < 2) {
							pedidoTopps = pedidoTopps + ", " + draggable.attr('ing');
							toppings = toppings + 1;
						} else {
							alert("Solo tienes derecho a 2 toppings :(");
							ui.draggable.draggable('option', 'revert', true);
						}
					}
					if (type == "dress") {
						if (aderezo < 1) {
							pedidoAderez = pedidoAderez + ", " + draggable.attr('ing');
							aderezo = aderezo + 1;
						} else {
							alert("Solo tienes derecho a 2 aderezos :(");
							ui.draggable.draggable('option', 'revert', true);
						}
					}
					break;
				}
			}

		</script>

	</head>
	<body>
		<div class="parallax">
			<div style="height:270px;background-color:black;font-size:26px; opacity: .7;color:white;text-align: center;">
				<br>
				<h1 style="margin: 0px 0px 0px 0px;"><b>Instrucciones:</b></h1>
				<br>
				Elige el tamaño de tu ensalada, después arrastra al plato los ingredientes que mas desees, recuerda que la ensalada mediana incluye:1 proteína, 4 verduras, 2 toppings y 1 aderezo y la grande incluye: 2 proteínas, 5 verduras, 2 toppings y 1 aderezo
				<br>
				<br>
				<select name="size" id="size" class="size" style="font-size: 26px;width:20%;">
					<option value="none">Elige un tamaño</option>
					<option value="mediana">Mediana</option>
					<option value="grande">Grande</option>
				</select></td>
			</div>
			<div id="content" style="height: 400px;display:none;background-color:rgba(0,0,0,0.3);">
				<table style="background-color:rgba(0,0,0,0.7);">

					<tr>
						<th colspan="7">Proteínas</th>
					</tr>
					<tr>
						<td>
						<div id="makeMeDraggable" type="prot" ing="atún" style="background-image: url('img/tuna.jpg'); background-size: cover; color:#1ad1ff;text-align: center;">
							Atún
						</div></td>
						<td>
						<div type="prot" id="makeMeDraggable1" ing="huevo" style="background-image: url('img/huevo.jpg'); background-size: cover;color:#1ad1ff;">
							Huevo duro
						</div></td>
						<td>
						<div type="prot" id="makeMeDraggable2" ing="pechuga de pavo" style="background-image: url('img/pavo.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Pechuga de pavo
						</div></td>
						<td>
						<div type="prot" id="makeMeDraggable3" ing="pollo natural" style="background-image: url('img/pollo.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Pollo
						</div></td>
						<td>
						<div type="prot" id="makeMeDraggable4" ing="pollo empanizado" style="background-image: url('img/pollopan.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Pollo Empanizado
						</div></td>
						<td>
						<div type="prot" id="makeMeDraggable5" ing="quinoa" style="background-image: url('img/quinoa.png'); background-size: cover;color:#1ad1ff;text-align: center;">
							Quinoa
						</div></td>
						<td>
						<div type="prot" id="makeMeDraggable6" ing="surimi" style="background-image: url('img/surimi.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Surimi
						</div></td>
					</tr>
					<tr>
						<th colspan="7">Verduras</th>
					</tr>
					<tr>
						<td>
						<div id="makeMeDraggable7" type="verd" ing="aceitunas verdes" style="background-image: url('img/aceitunasverdes.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Aceitunas verdes
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable8" ing="aceitunas negras" style="background-image: url('img/aceitunasnegras.jpg'); background-size: cover;">
							Aceitunas Negras
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable9" ing="aguacate" style="background-image: url('img/aguacate.png'); background-size: cover;color:#1ad1ff;text-align: center;">
							Aguacate
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable10" ing="apio" style="background-image: url('img/apio.png'); background-size: cover;color:#1ad1ff;text-align: center;">
							Apio
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable11" ing="brocoli" style="background-image: url('img/brocoli.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							brocoli
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable12" ing="calabacitas" style="background-image: url('img/calabacitas.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Calabacitas
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable13" ing="cebolla" style="background-image: url('img/cebolla.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Cebolla
						</div></td>
					</tr>
					<tr>
						<td>
						<div type="verd" id="makeMeDraggable14" ing="champiñones" style="background-image: url('img/chmapi.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Champiñones
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable15" ing="chayote" style="background-image: url('img/chayote.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Chayote
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable16" ing="coliflor" style="background-image: url('img/coliflor.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Coliflor
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable17" ing="ejotes" style="background-image: url('img/ejotes.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Ejotes
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable18" ing="espinaca" style="background-image: url('img/espinaca.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Espinacas
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable19" ing="germen de alfalfa" style="background-image: url('img/germendealfalfa.png'); background-size: cover;color:#1ad1ff;text-align: center;">
							Germen de Alfalfa
						</div></td>
						<td>
						<div type="verd" id="makeMeDraggable20" ing="germen de soya" style="background-image: url('img/germensoya.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Germen de Soya
						</div></td>
					</tr>

					<td>
					<div type="verd" id="makeMeDraggable21" ing="jicama" style="background-image: url('img/jicama.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
						Jicama
					</div></td>
					<td>
					<div type="verd" id="makeMeDraggable22" ing="pepino" style="background-image: url('img/pepino.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
						Pepino
					</div></td>
					<td>
					<div type="verd" id="makeMeDraggable23" ing="pimiento rojo" style="background-image: url('img/pimientorojo.png'); background-size: cover;color:#1ad1ff;text-align: center;">
						Pimiento Rojo
					</div></td>
					<td>
					<div type="verd" id="makeMeDraggable24" ing="pimiento verde" style="background-image: url('img/pimientoverde.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
						Pimiento Verde
					</div></td>
					<td>
					<div type="verd" id="makeMeDraggable25" ing="pimineto amarillo" style="background-image: url('img/pimientoamarillo.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
						Pimiento Amarillo
					</div></td>
					<td>
					<div type="verd" id="makeMeDraggable26" ing="zanahoria" style="background-image: url('img/zanahoria.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
						Zanahoria
					</div></td>
					</tr>
					<tr>
						<th colspan="7">Toppings</th>
					</tr>
					<tr>
						<td>
						<div type="tops" id="makeMeDraggable27" ing="amaranto" style="background-image: url('img/amaranto.jpg'); background-size: cover;background-size: cover;color:#1ad1ff;text-align: center;">
							Amaranto
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable28" ing="arándano deshidratado" style="background-image: url('img/arandano.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Arandano deshidratado
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable29" ing="cacahuate" style="background-image: url('img/cacahuate.jpg'); background-size: cover; color:#1ad1ff;text-align: center;">
							Cacahuate
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable30" ing="coco rayado" style="background-image: url('img/Coco_rallado.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Coco rallado
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable31" ing="durazno" style="background-image: url('img/durazno.JPG'); background-size: cover;color:#1ad1ff;text-align: center;">
							Durazno
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable32" ing="fresa" style="background-image: url('img/fresas.png'); background-size: cover;color:#1ad1ff;text-align: center;">
							Fresas
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable33" ing="frutos secos" style="background-image: url('img/frutaseca.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Frutos Secos
						</div></td>
					</tr>
					<tr>
						<td>
						<div type="tops" id="makeMeDraggable34" ing="grano de elote" style="background-image: url('img/granodeelote.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Grano de elote
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable35" ing="mango" style="background-image: url('img/mango.png'); background-size: cover;color:#1ad1ff;text-align: center;">
							Mango
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable36" ing="manzana" style="background-image: url('img/manzana.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Manzana
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable37" ing="nuez" style="background-image: url('img/nuez.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Nuez
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable38" ing="pepinillo" style="background-image: url('img/pepinillos.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Pepinillos
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable39" ing="piña" style="background-image: url('img/pina.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Piña
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable40" ing="platano frito" style="background-image: url('img/platanofrito.JPG'); background-size: cover;color:#1ad1ff;text-align: center;">
							Plátano Frito
						</div></td>
					</tr>
					<tr>
						<td>
						<div type="tops" id="makeMeDraggable41" ing="queso fresco" style="background-image: url('img/quesofresco.JPG'); background-size: cover;color:#1ad1ff;text-align: center;">
							Queso Fresco
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable42" ing="queso parmesano" style="background-image: url('img/quesoparmesano.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Queso Parmesano
						</div></td>
						<td>
						<div type="tops" id="makeMeDraggable43" ing="semilla de girasol" style="background-image: url('img/girasol.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Semillas de Girasol
						</div></td>
					</tr>
					<tr>
						<th colspan="7">Aderezos</th>
					</tr>
					<tr>
						<td>
						<div type="dress" id="makeMeDraggable44" ing="blue cheese " style="background-image: url('img/bluecheese.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Blue Cheese
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable45" ing="césar" style="background-image: url('img/cesar.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							César
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable46" ing="cilantro" style="background-image: url('img/aderezocilantro.JPG'); background-size: cover;color:#1ad1ff;text-align: center;">
							Cilantro
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable47" ing="chabacano chipotle" style="background-image: url('img/chabacanochipotle.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Chabacano Chipotle
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable48" ing="frambuesa chipotle" style="background-image: url('img/frambuesachipotle.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Frambuesa Chipotle
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable49" ing="italiano" style="background-image: url('img/italiano.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Italiano
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable50" ing="mango chipotle" style="background-image: url('img/mangochipotle.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Mango Chipotle
						</div></td>
					</tr>
					<tr>
						<td>
						<div type="dress" id="makeMeDraggable51" ing="jengibre ajonjolí" style="background-image: url('img/tuna.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Jengibre Ajonjolí
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable52" ing="mango habanero" style="background-image: url('img/mangohabanero.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Mango Habanero
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable53" ing="miel mostaza" style="background-image: url('img/mielmostaza.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Miel Mostaza
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable54" ing="mil islas" style="background-image: url('img/milislas.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Mil Islas
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable55" ing="ranch" style="background-image: url('img/ranch.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Ranch
						</div></td>
						<td>
						<div type="dress" id="makeMeDraggable56" ing="vinagreta balsámica" style="background-image: url('img/vinagreta.jpg'); background-size: cover;color:#1ad1ff;text-align: center;">
							Vinagreta Balsámica
						</div></td>
					</tr>
				</table>

				<!-- <div id="makeMeDraggable57"></div>
				<div id="makeMeDraggable58"></div>
				<div id="makeMeDraggable59"></div> -->

				<div id="makeMeDroppable" style="background-image: url('img/bowl.jpg');background-size:cover;"></div>
			</div>
			<br>
			<div id="formDiv" style="width:50%; float: left; display:none; background-color:rgba(0,0,0,0.3);">
				<form action="" method="post" id="formsalad">
					<div>
						    <label for="name">Nombre:</label>
						<input required type="text" id="name" name="name">
					</div>
					<br>
					<div>
						    <label for="mail">E-mail:</label>
						<input required type="email" id="mail" name="email">
					</div>
					<br>
					<div>
						    <label for="tel">Teléfono:</label>
						<input required type="tel" id="tel" name="tel">
					</div>
					<br>
					<div>
						    <label for="mail">Dirección:</label>
						<input required type="text" id="dir" name="dir">
					</div>
					<br>
					<div>
						    <label for="tam">Tamaño:</label>
						<input required  readonly type="text" id="tam" name="tam">
					</div>
					<br>
					<div>
						    <label for="msg">Pedido:</label>
						    	<textarea required readonly id="msg" name="msg"></textarea>
					 


					</div>
					<br>
					<div class="button">
						   
						<button type="submit" id="botonsirris" name="botonsirris">
							Hacer pedido
						</button>
						 
					</div>
				</form>
			</div>
		</div>
	</body>
</html>