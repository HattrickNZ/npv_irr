<html>
<head>

</head>

<body>

<!-- working on this here 
http://javascript.info/tutorial/settimeout-setinterval
-->

<hr>
<hr>

<input type="button" onclick="clearInterval(timer)" value="stop">
<p> this is a paragrph with the time goes here: XX</p>
<div id="clock">
    <span id="hour">hh</span>:<span id="min">mm</span>:<span id="sec">ss</span>
</div>

<?php

echo "<hr>";
echo "<p>Pacific/Auckland</p>";

date_default_timezone_set("Pacific/Auckland");
echo "The time is " . date("h:i:sa") . "<br>";
echo "<span id='hour'>hh</span>:<span id='min'>mm</span>:<span id='sec'>ss</span>";
?>
<script>
  var i = 1
  var timer = setInterval(function() { update() }, 1000)
  
  function update() {
	//alert(i++)
	var date = new Date()

	var hours = date.getHours()
	if (hours < 10) hours = '0'+hours
	document.getElementById('hour').innerHTML = hours
	
	var seconds = date.getSeconds()
	if (seconds < 10) seconds = '0'+seconds
	document.getElementById('sec').innerHTML = seconds

	
	
  }
</script>



</body>
</html>
