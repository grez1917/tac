<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Draggable - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <style>
  #draggable { width: 150px; height: 150px; background-color: #c0392b; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
  });

  var idKotakMerah = 1;
  $(document).ready(function(){
  	$('#make').click(function(){
  		//alert(idKotakMerah);
  		// $('#kotak').append('<button id="blokMerah'+idKotakMerah+'">Lala</button>');
  		$('#kotak').append('<div id="blokMerah'+idKotakMerah+'">Lala</div>');
  		$('#blokMerah'+idKotakMerah+'').css({'width': '150px', 'height': '150px', 'background-color': '#c0392b'}).draggable();
  		$('#blokMerah'+idKotakMerah+'').click(function(){
  			var offset = $('#kotak').position().left;
  			var offset1 = $('#kotak').position().top;
  			alert("left: " + offset + "\ntop: " + offset);
  		});
  		idKotakMerah++;
  	});
  });

  $(document).ready(function(){
  	$('#position').click(function(){
	  	var offset = $('#blokMerah1').offset().left;
		var offset1 = $('#blokMerah1').offset().top;
		alert("left: " + offset + "\ntop: " + offset);
  	});
  });
  </script>
</head>
<body>
 
<div id="draggable">
</div>
 
 <button id='make'>Ulal...laaaa</button>
 <button id='position'>Position</button>
 <div id='kotak'></div>

 </body>
</html>