<?php
  //This is a simulator for testing chart.js web pages with dummy data
  
  $array = array();
  $array['xA'] = rand(-200,200);
  $array['yA'] = rand(-200,200);
  $array['zA'] = rand(-200,200);
  $array['roll'] = rand(-200,200);
  $array['pitch'] = rand(-200,200);
  $array['yaw'] = rand(-200,200);

  header('Content-type: application/json');
  echo json_encode($array);

?>
