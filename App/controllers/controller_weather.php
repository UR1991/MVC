<?php
//Controller sends data from Html form to model (City name)
//Then take array from Model and send it to view.
class Controller_Weather extends Controller
{
  function __construct()
  {
    $this->model->new Model_weather();
    $this->view->new View();
  }
  function action_index()
  {
    $name = $_POST['name'];
    $data = $this->model->get_data($name);
    $this->view->generate('weather_view.php', 'template_view.php', $data, $name);
  }
}
 ?>
