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
			<div class='six columns'>
				Salida de ITAM
			</div>
		</div>
		<div class='row'>
			<div class='two columns'>
				<h2>2</h2>
			</div>
			<div class='six columns'>
				Tomar bus Metro barranca del muerto
			</div>
		</div>
		<div class='row'>
			<div class='two columns'>
				<h2>3</h2>
			</div>
			<div class='six columns'>
				Bajar en Metro barranca del muerto
			</div>
		</div>
	</div>
	<div class='four columns'>
		<div class='map' style='height:300px;width:300px;background:#CCCCCC;'>
		</div>
	</div>
</div>
