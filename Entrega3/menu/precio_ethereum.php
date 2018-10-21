<?php
$url = "https://api.coinmarketcap.com/v1/ticker/ethereum/";
$fgc = file_get_contents($url);
$json = json_decode($fgc, TRUE);
$lastPrice = $json["0"]["price_usd"];
$nebprice = $lastPrice / 1000;
$date = date("m/d/Y - h:i:sa");
$color = "green";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<style>
body{
    font-family: "Arial", sans-serif;
}
#container{
	width: 275px;
	height: 50px;
	overflow: hidden;
	background-color: #2f2f2f;
	border: 1px solid #000;
	border-radius: 5px;
	color: #fefdfb;
}
#nebPrice{
	font-size: 15px;
	font-weight: bold;
}
#dateTime{
	font-size: 15px;
  font-weight: bold;
	color: #999;
}

</style>

  <head>
    <meta charset="utf-8">
    <title>index entrega 3</title>
  </head>

  <body>
    <div id="container">
    <table>
      <tr>
        <td id="nebPrice">
          Precio Nebcoin: $<?php echo number_format($nebprice, 4) ?>
        </td>
      </tr>

      <tr>
        <td id="dateTime">
          Fecha: <?php echo $date ?>
        </td>
      </tr>

    </table>
    </div>


  </body>
</html>
