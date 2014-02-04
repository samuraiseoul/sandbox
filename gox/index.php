<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
		<script>
			var gox = null;
			$(document).ready(function(){
				$.getJSON("http://data.mtgox.com/api/1/BTCUSD/ticker", function(json){
					if(json.result === "success"){
						gox = json.return;
						$("#price").html(gox.last.display);
						$("#avg-price").html(gox.vwap.display);
					}
					console.log(gox);
				});
			});
		</script>
	</head>
	<body>
		<span>
			Current MtGox price is: 
			<i class='fa fa-bitcoin'></i>1 :
			<span id="price"></span>	
		</span><br>
		<span>
			Current MtGox W.Avg is: 
			<i class='fa fa-bitcoin'></i>1 :
			<span id="avg-price"></span>	
		</span>
		<br><br>
		The url to get the json object for the price is: <br>
		<a href="http://data.mtgox.com/api/1/BTCUSD/ticker">"http://data.mtgox.com/api/1/BTCUSD/ticker"</a><br>
		If we change the "USD" in the "BTCUSD" part, we can get other currencies as well<br>
		Eg:<br>
		<a href="http://data.mtgox.com/api/1/BTCJPY/ticker">"http://data.mtgox.com/api/1/BTCJPY/ticker"</a><br>
		<br><br>
		Used font-awesome to get the bitcoin logo:<br>
		<span style="background-color:lightgrey">
			&lt;link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"&gt;
		</span><br>
		It get's loaded remotely, saves us some from including it!<br>
		As you know, it's easily scalable(size) can change color, ect.<br>
		 And has many other great fonts and logos.<br>
		To use, just have:<br>		
		<span style="background-color:lightgrey">
			&lt;i class='fa fa-bitcoin'&gt;&lt;/i&gt;
		</span><br>
		the fa class tells it that it's font awesome, <br>
		then the second class tells it which font, I feel it's a bit redundant though.
	</body>
</html>