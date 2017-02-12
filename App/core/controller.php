<?php
//Define Controller
class Controller
{
  public $model;
  public $view;

  //Create View class
  function __construct()
  {
    $this->view = new View();
  }
  function action_index()
  {
    //Default action
  }
}
 ?>
