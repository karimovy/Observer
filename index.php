<?php
require_once('load.php');
$car_model = new CarModel(2017);
$car_model->attach(new CarModelObserver);
$car_model->notify();


 ?>
