<?php
//This model send request to the API
//Then takes response and makes array
class Model_Weather extends Model
{
  public function get_data($data)
  {
    $var = "http://api.openweathermap.org/data/2.5/weather?q=".$data."&APPID=40c98f3eb2476783eb79c4a263961341&units=metric";

    //get JSON
    $json = file_get_contents("$var");

    //decode JSON to array
    $jsarr = json_decode($json,true);

    return $jsarr;
  }
}
 ?>
