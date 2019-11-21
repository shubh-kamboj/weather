
<?php $conversion =($weatherData->currently->temperature - 32) * (5/9); ?>
<div class="wrapper">
  <div class="widget-container">
    <div class="top-left">
      <h1 class="city" id="city">Weather Widget App</h1>
      <h2 id="day"><?= date("l",$weatherData->currently->time )?></h2>
      <h3 id="date"><?= date("M",$weatherData->currently->time )?>, <?= date("d",$weatherData->currently->time )?> <?= date("Y",$weatherData->currently->time )?></h3>
      <h3 id="time"><?= date("H:i a",$weatherData->currently->time )?></h3>
<!--       <a target="_blank" href="https://codepen.io/myleschuahiock/"><p id="codepen-link">codepen.io/myleschuahiock</p></a> -->
      <p class="geo"></p>
    </div>
    <div class="top-right">
      <h1 id="weather-status">Weather / Weather Status</h1>
      <img class="weather-icon" src="https://myleschuahiock.files.wordpress.com/2016/02/sunny2.png">
    </div>
    <div class="horizontal-half-divider"></div>
    <div class="bottom-left">
      <h1 id="temperature"><?= round($conversion) ?></h1>
      <h2 id="celsius">&degC</h2>
      <h2 id="temp-divider">/</h2>
      <h2 id="fahrenheit">&degF</h2>
    </div>
    <div class="vertical-half-divider"></div>
    <div class="bottom-right">
      <div class="other-details-key">
        <p>Wind Speed</p>
        <p>Humidity</p>
        <p>Pressure</p>
        <p>Summary</p>
        
      </div>
      <div class="other-details-values">
        <p class="windspeed"><?= $weatherData->currently->windSpeed ?> Km/h</p>
        <p class="humidity"><?= $weatherData->currently->humidity ?> %</p>
        <p class="pressure"><?= $weatherData->currently->pressure ?> hPa</p>
        <p class="sunrise-time"><?= $weatherData->currently->summary ?></p>
        
      </div>
    </div>
  </div>
</div>