<br/>
<br/>
<br/>
<br/>
<br/>

아직 페이지 미구현입니다 ^^
<br/>
양해부탁드립니다 :)


<br/>
<br/>

<span id="time"></span> 초 후에 이전 페이지로 이동합니다.

<script>
var timeOutSecond = 3000;
setInterval(function() {
	var leftSecond = Math.ceil(timeOutSecond / 1000);
	$('#time').text(leftSecond);

	timeOutSecond = timeOutSecond - 1000;

}, 1000);

setTimeout(function() {
	console.log('Go back !!');
	window.history.back();
}, timeOutSecond);
</script>