<?php
/**
 *
 */
class CarModelObserver implements \SplObserver{

  public function update(\SplSubject $event){
    echo 'the car model is '.$event->model;
  }
}

 ?>
