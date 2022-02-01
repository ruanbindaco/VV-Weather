<?php
// definir valores
$apikey = "46b168a87d2c626584763b9c08808cfc";
$cityid = "3445026";
$url = "http://api.openweathermap.org/data/2.5/weather?id=$cityid&appid=$apikey";
// fazer requisição ao WS
$response = file_get_contents($url);
// exibir resultado
//print $response;
// processar resultado
$data = json_decode($response);
//print "Feels like: " . $data->main->feels_like -273;
?>

<link href="style.css" rel="stylesheet" type="text/css" />
<html>
<div class="background-container">
  <div class="front">
    <span class="ground" ></span>
  </div>
  
  <div class="middle">
     <div class="tree one">
        <span class="top"></span>
        <span class="overlap"></span>
        <span class="trunk"></span>
     </div>
     <div class="tree two">
        <span class="top"></span>
        <span class="overlap"></span>
        <span class="trunk"></span>
     </div>
     <div class="tree three">
        <span class="top"></span>
        <span class="overlap"></span>
        <span class="trunk"></span>
     </div>
  </div>

  <div class="back">
    <span class="hill one" ></span>
    <span class="hill two"></span>
    <span class="hill three"></span>
    <span class="hill four"></span>
    
    <span class="sun-rays"></span>
    <span class="sun"></span>
    <div class="cloud one">
      <span class="cloud-body"></span>
      <span class="cloud-top"></span>
      <span class="cloud-puff"></span>
    </div>
    <div class="cloud two">
      <span class="cloud-body"></span>
      <span class="cloud-top"></span>
      <span class="cloud-puff"></span>
    </div>
  </div>
    
  <div class="person">
    <div class="head"></div>
    <div class="coat"></div>
    <div class="legs"></div>
    <div class="arm"></div>
    <div class="string"></div>
    <div class="balloon"></div>
  </div>
  <header class="right">
<h2> 
 Tempo da cidade de <?= $data->name ?>, <?= $data->weather[0]->description ?>. <br>
 <div class="zoom">
 <img src="http://openweathermap.org/img/w/<?= $data->weather[0]->icon; ?>.png">
 </div>
 </h2>
 <p> Sensação térmica: <?= $data->main->feels_like - 273; ?>°C </p>
 <p> Temperatura atual: <?= $data->main->temp - 273; ?>°C </p>
 <p> Temperatura mínima: <?= $data->main->temp_min - 273; ?>°C </p>
 <p> Temperatura máxima: <?= $data->main->temp_max - 273; ?>°C </p>
 </header>
  </div>
  </html>
