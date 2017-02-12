<?php
//Create main controller which will be called by dedault
class Controller_Main extends Controller
{
  function action_index()
  {
    //Default views
    $this->view->generate('main_view.php', 'template_view.php')
  }
}
 ?>
