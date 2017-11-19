<?php
/**
 *
 */
class Event implements \SplSubject
{
  protected $storage;
  function __construct(){
    $this->storage = new \SplObjectStorage();
  }

  //attach
  public function attach(\SplObserver $observer){
    $this->storage->attach($observer);
  }

  //detach
  public function detach(\SplObserver $observer){
    if (!$this->storage->contains($observer))
      return;
    $this->storage->detach($observer);
  }

  //notify
  public function notify(){
    //vérifier s'il ya des observateur
    if (!count($this->storage)) {
      return;
    }

    // Appler les observateur
    foreach ($this->storage as $observer) {
      $observer->update($this);
    }
  }
}
 ?>
