<?php
include_once 'array_location.php';
include_once 'Ride_cls.php';

$ride = new Ride();



if (isset($_POST['action'])) {
  $pick = $_POST['select1'];
  $drop = $_POST['select2'];
  $cabtype = $_POST['select3'];
  $luggage = $_POST['luggage'];

  foreach ($location as $key => $value) {
    if ($key == $pick) {
      $dist1 = $value;
    }
  }
  foreach ($location as $key => $value) {
    if ($key == $drop) {
      $dist2 = $value;
    }
  }
  $total_dis = abs($dist1 - $dist2);
  // echo $total_dis;

  $tot_fare=$ride->cal_fare_cab($total_dis,$cabtype,$luggage);
  $data = array('total_distance'=> $total_dis, 'total_fare' => $tot_fare);
  echo json_encode($data);
  
}
else{
  echo "Don't Go to Wrong File !";
}
