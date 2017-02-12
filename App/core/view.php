<?php
//Define View
class View
{
  function generate($content_view, $template_view, $data = null)
  {
    //Function add template view
    include 'App/views/'.$template_view;
  }
}
 ?>
