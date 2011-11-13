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
		<p>
			Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
		</p>
		<div class='row' id='backtrack'>
			<div class='six columns'>
				<h2>Enrutame</h2>
				<form class='nice' id='go'>
					<input type='text' placeholder='Estoy en...' name='origin' id='originq' class="input-text" />
					<input type='text' placeholder='Voy a...' name='destiny' id='destinyq' class="input-text"/>
					<a href="#" class="nice small radius blue button" id='Search'>¡Vamos!</a>
				</form>
			</div>
			<div class='six columns'>
				<h2>Yo se una ruta</h2>
				<form class='nice' id='show'>
					<input type='text' placeholder='Se llegar de...' name='origin' id='origins' class="input-text" />
					<input type='text' placeholder='A...' name='destiny'  id='destinys' class="input-text"/>
					<a href="#" class="nice small radius black button" id='Show'>¡Muestranos!</a>
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