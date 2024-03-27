<?php

class Queue{
    public $front;
    public $rear;
    
    public function __construct(){
        $this->front=-1;
        $this->rear=-1;
    }
    
    public function isEmpty(){
        
        if($this->front==$this->rear){
            
            echo "queue is empty.\n";
        }else{
            echo "queue is not empty.\n";
        }
    }
    
    
    public function size() {
     return ($this->rear - $this->front);
  }
  
    //create a function to add new element  
  public function enque($x) {
    $this->queue[++$this->rear] = $x;
    echo $x." is added into the queue. \n";
  }

  //create a function to delete front element  
  public function d() {
    if($this->rear == $this->front){
      echo "Queue is empty. \n";
    } else {
      $x = $this->queue[++$this->front];
      echo $x." is deleted from the queue. \n";
    }
  }

  //create a function to get front element  
  public function frontElement() {
    if($this->rear == $this->front) {
      echo "Queue is empty. \n";
    } else {
      return $this->queue[$this->front+1];
    }
}

}

$q= new Queue;
$q->enque(12);
$q->enque(13);
$q->enque(230);
$q->enque(190);

 $q->d();

$q->frontElement();

$q->isEmpty();
$q->size();

?>