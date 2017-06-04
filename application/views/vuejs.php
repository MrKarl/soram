<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script src="https://unpkg.com/vue"></script>	



<div id="app01">
{{message}}
</div>


<div id="app02" v-bind:title="message2">
{{message1}}
</div>

<script type="text/javascript">
	var app01 = new Vue({
		el : '#app01',
		data : {
			message : 'Test',
		},
	});


	var app02 = new Vue({
		el : '#app02',
		data : {
			message1 : 'ALALALLALALA',
			message2 : '11122221331123123132',
		},
	});

</script>