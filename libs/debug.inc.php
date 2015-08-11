<?php if($debug == true) {?>

 <a id="debug" style="position:fixed; right: 20px; bottom: 20px;" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">info_outline</i></a>
<div  class="debug_dial hide" style="z-index: 9999999999999; position:absolute; left:50%; margin-left: -450px; top: 100px; padding: 10px; width:900px; background: teal; color: white;">
	<p>POST</p>
	<pre><?php var_dump($_POST);?></pre>
	<p>GET</p>
	<pre><?php var_dump($_GET); ?></pre>
	<p>SESSION</p>
	<pre><?php var_dump($_SESSION); ?></pre>

</div>
<script>

$(document).ready(function() {
 	$('#debug').click(function(){
		$('.debug_dial').toggleClass('hide');
	});
});

</script>
<?php } ?>