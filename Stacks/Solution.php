<?php


class Stack{


	public $top;
	public $stack=array();


public function __construct(){
	$this->top=-1;
}


public function isEmpty(){

	if($this->top== -1){
		echo "stack is empty.\n";
	}else{
		echo "stack is not empty.\n";
	}
}

public function size(){
    return "Size is ".$this->top+1;
}

public function push($el){
    
    $this->stack[++$this->top]=$el;
    echo $el." has been added.\n";
}

public function pop(){
    
    if($this->top < 0){
        echo "stack is empty";
    }else{
        $el=$this->stack[$this->top--];
        echo $el." deleted from stack.\n";
    }
}

public function top(){
    if($this->top < 0){
        echo "Stack is empty.\n";
    }else{
        return "top element is ".$this->stack[$this->top]."\n";
    }
}


}

$sta= new Stack();


$sta->push(1);
$sta->push(13);
$sta->push(14);
$sta->pop();
echo $sta->top();
$sta->isEmpty();
echo $sta->size();


?>