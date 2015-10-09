<?php
/**
 * Created by PhpStorm.
 * User: alwin_000
 * Date: 2-10-2015
 * Time: 14:05
 */

class Weather{

    private $url = "http://api.openweathermap.org/data/2.5/weather?q=";
    private $location = "";
    // API Key voor het weer
    private $apiKey = "714e4e703a5ce146a1fb3e8b0705743a";
    // units=metric zet temperatuur in graden celcius.
    private $urlParams = [
        "units" => "metric"
    ];

    public function setLocation($location){
        $this->location = $location;
    }
    public function getLocation(){
        return $this->location;
    }

    // Krijgt het weer terug
    public function getWeather(){


        $urlParams = "";
        foreach($this->urlParams as $key => $val){
            $urlParams .= "&$key=$val";
        }
        // Maakt de URL goed
        $url = $this->url."{".urlencode($this->location)."}".$urlParams."&APPID=".$this->apiKey;

        $data = file_get_contents($url);
        $data = json_decode($data);
        return $data;
    }
}