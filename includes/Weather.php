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
    // units=metric zet temperatuur in graden celcius.
    private $urlParams = [
        "units" => "metric"
    ];//"&units=metric";

    public function setLocation($location){
        $this->location = $location;
    }
    public function getLocation(){
        return $this->location;
    }
    public function getWeather(){

        //
        $urlParams = "";
        foreach($this->urlParams as $key => $val){
            $urlParams .= "&$key=$val";
        }
        $url = $this->url."{".urlencode($this->location)."}".$urlParams;

        $data = file_get_contents($url);
        $data = json_decode($data);
        return $data;
    }
}