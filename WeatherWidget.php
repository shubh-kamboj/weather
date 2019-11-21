<?php
namespace app\widgets\weather;

use yii\base\Widget;
use app\widgets\weather\assets\WeatherAsset;

class WeatherWidget extends Widget
{

    public function run()
    {
        WeatherAsset::register($this->view);
        $url = "https://api.darksky.net/forecast/d4d71efd80cba5452d7ecdc87a942601/29.8811,77.0541";
        $weather = file_get_contents($url);
        $weatherData = json_decode($weather);

        echo $this->renderContent($weatherData);
    }

    public function renderContent($weatherData)
    {
        return $this->render('weather', [
            'weatherData' => $weatherData
        ]);
    }
}
?>