<script type="text/javascript">
	$(function(){
		$('.map').html("Loading: <img src='/images/loading.gif' />");
		$.ajax({
				url: '/map',
				context: document.body,
				success: function(data){
				$('.map').html(data);
				}
		});
	});
</script>
<p>Desde <strong><?php echo urldecode($home);?></strong> a <strong><?php echo urldecode($destiny);?></strong>:</p>
<div class='row'>
	<div class='six columns'>
		<div class='row'>
			<div class='two columns'>
				<h2>1</h2>
			</div>
			<div class='eight columns'>
				Camina del ITAM 200 m sobre Av. Chihuahua hacia el sur, para llegar a Periférico.
			</div>
		<hr />
		</div>
		<div class='row'>
			<div class='two columns'>
				<h2>2</h2>
			</div>
			<div class='eight columns'>
				Toma el cami&oacute;n verde que dice Wal-Mart Toreo
			</div>
		<hr />
		</div>
		<div class='row'>
			<div class='two columns'>
				<h2>3</h2>
			</div>
			<div class='eight columns'>
				Baja en la Calle Condor
			</div>
		<hr />
		</div>
		<div class='row'>
			<div class='two columns'>
				<h2>4</h2>
			</div>
			<div class='eight columns'>
				Camina sobre Condor 300 m en direcci&oacute;n Este, rumbo a Av. Revoluci&oacute;n
			</div>
		<hr />
		</div>
		<div class='row'>
			<div class='two columns'>
				<h2>5</h2>
			</div>
			<div class='eight columns'>
				Llegaste a Metro Barranca del Muerto
			</div>
		<hr />
		</div>
	</div>
	<div class='four columns'>
		<div class='map' style='height:300px;width:300px;background:#CCCCCC;'>
		</div>
	</div>
</div>
<div class='row'>
<hr />
<h5>Publicidad</h5>
	<div class='twelve columns centered'>
		<div class='six columns' style='text-align:center;font-weight:bold;'>
			<p style='padding:1em;'>&iquest;Necesitas un cajero autom&aacute;tico? a 300 m sobre Av. Revoluci&oacute;n en direcci&oacute;n sur encuentras un HSBC.
			<br />
			<img src='/images/hsbc.png' style='width:100px'/>
			</p>
		</div>
		<div class='six columns' style='text-align:center;font-weight:bold;'>
			<p style='padding:1em;'>&iquest;Tienes hambre? camina 75 m sobre Av. Revoluci&oacute;n hacia el norte y encontrar&aacute;s un Burger King.
			<br />
			<img src='/images/bk.jpg' style='width:100px'/></p>
		</div>
	</div>
</div>