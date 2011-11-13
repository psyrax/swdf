<script type="text/javascript">
$(function(){
		$('#Search').click(function(){
			var home = $("#originq").val();
			var destiny = $("#destinyq").val();
			var quest = "/home/track/" + home + "/" + destiny;
			$('.backtrack').html("Loading: <img src='/images/loading.gif' />");
			$.ajax({
  				url: quest,
  				context: document.body,
  				success: function(data){
    				$('.backtrack').html(data);
  				}
			});
		});
	});
$(function(){
		$('#Show').click(function(){
			var home = $("#origins").val();
			var destiny = $("#destinys").val();
			var quest = "/home/show/" + home + "/" + destiny;
			$('.backtrack').html("Loading: <img src='/images/loading.gif' />");
			$.ajax({
  				url: quest,
  				context: document.body,
  				success: function(data){
    				$('.backtrack').html(data);
  				}
			});
		});
	});
</script>
<div class='row'>
	<div class='eight columns centered'>
			<h4 class='subheader' style='font-weight:300;color:#777;font-size: 1.8rem;line-height: 1.25;margin-top:1em;'>&iquest;Quieres llegar a un lugar en transporte p&uacute;blico, pero no tienes idea de c&oacute;mo hacerlo? ¡Enr&uacute;tame! Tenemos el primer servicio en l&iacute;nea para encontrar la mejor ruta en transporte p&uacute;blico a tu destino. <br />
			&iquest;Tienes prisa? Encuentra la ruta m&aacute;s corta. &iquest;Traes poca lana? Te decimos la ruta m&aacute;s barata. Adem&aacute;s, comparte tus mejores secretos con la comunidad y descubre excelentes alternativas que otros usuarios están compartiendo.</h4>
			<hr />
		<div class='row' id='backtrack'>
			<div class='six columns'>
				<h2>Enr&uacute;tame</h2>
				<form class='nice' id='go'>
					<input type='text' placeholder='Estoy en...' name='origin' id='originq' class="input-text" />
					<input type='text' placeholder='Voy a...' name='destiny' id='destinyq' class="input-text"/>
					<a href="#scrolled" class="nice small radius blue button" id='Search'>¡Vamos!</a>
				</form>
			</div>
			<div class='six columns'>
				<h2>Yo s&eacute; una ruta</h2>
				<form class='nice' id='show'>
					<input type='text' placeholder='Se llegar de...' name='origin' id='origins' class="input-text" />
					<input type='text' placeholder='A...' name='destiny'  id='destinys' class="input-text"/>
					<a href="#scrolled" class="nice small radius black button" id='Show'>¡Muestranos!</a>
				</form>
			</div>
		</div>
	</div>
</div>
<div class='row'>
	<div class='eight columns centered backtrack'>
	&nbsp;
	</div>
</div>
<div id='scrolled'>&nbsp;</div>
