<div id="speed">25mph</div>
<script type="text/javascript">
$(document).ready(function(){
	var speed = 25;
	var interval = setInterval(function(){
		speed+=1;
		if (speed > 200)
			speed = 0;
		$('#speed').html(speed+'mph')
	},200)
})
</script>