<?php

class Node{
    public $data;
    public $next;
}

class LinkedList{
    
    public $head;
    
    public function __construct(){
    $this->head = null;
  } 
  
  
  // adding element at the front of the list
    public function addFront($el){
        
        $temp= new Node();
        $temp->data=$el;
        $temp->next=$this->head;
        $this->head=$temp;
    }
    

    //adding element at the basck of the list
    public function adBack($el){
        
        $new= new Node();
        $new->data=$el;
        $new->next=null;
        
        if($this->head==null){
            $this->head=$new;
            
        }else{
            
            $temp = new Node();
            $temp=$this->head;
            
            while($temp->next != null){
                $temp=$temp->next;
            }
            $temp->next=$new;
        }
    }
    

    //adding element at a position in the list
    public function adPo($po,$el){
        
        $new= new Node();
        $new->data=$el;
        $new->next=null;
        
        if($po < 1){
            echo "position should b equal or greater than one";
        }else if($po==1){
            $new->next=$this->head;
            $this->head=$new;
        }else{
            
            $temp= new Node();
            $temp=$this->head;
            
            for($i=1;$i<$po-1;$i++){
                if($temp != null){
                    $temp=$temp->next;
                }
            }
            
            if($temp != null){
                $new->next=$temp->next;
                $temp->next=$new;
            }
        }
        
    }
    


    // deleting element at the starting position of the list
    public function popF(){
        
        if($this->head != null){
            $new= new Node();
            $this->head=$this->head->next;
            $temp=null;
        }
    }
    


    //deleting elment at the end of a list
    public function popB(){
        if($this->head != null){
            
            if($this->head->next ==null){
                $this->head=null;
            }else{
                
                $temp = new Node();
                $temp = $this->head;
                while($temp->next->next != null)
                  $temp = $temp->next;
                $lastNode = $temp->next;
                $temp->next = null; 
                $lastNode = null;
            }
        }
    }


    //deleting element at a position of the list
    
    public function popPo($po){
        
        if($this->head != null){
            
            if($po < 1){
                echo "position should be equal or less than one";
            }else if($po==1){
               $del= $this->head;
                $this->head=$this->head->next;
                $delo=null;
            }else{
                $temp= new Node();
                $temp=$this->head;
                
                for($i=1;$i<$po-1;$i++){
                    if($temp != null){
                        $temp=$temp->next;
                    }
                }
                
                if($temp != null){
                    
                    $del=$temp->next;
                    $temp->next=$temp->next->next;
                    $del=null;
                    
                }else{
                    
                    echo "Previous position is null";
                }
            }
        }
    }
    


    //counting nodes in a list
    public function count(){
        
        $temp= new Node();
        $temp=$this->head;
        
        $i=0;
        
        while($temp != null){
            $i++;
            $temp=$temp->next;
        }
        return $i;
        
    }

      public function search($el){
      
 
       
      $temp= new Node();
      $temp=$this->head;
      
      $i=0;
      $fo=0;
      
      if($temp != null){
        
        while($temp != null){
          
          $i++;
          
          if($temp->data == $el){
            
            $fo++;
            break;
          }
        }
        $temp=$temp->next;
        
        if($fo==1){
          
            echo $el." is found at index = ".$i.".\n";
        }else{
          
          echo "not found";
        }
      }
      
      

    }
    
    public function showList(){
        
        $temp= new Node();
        $temp=$this->head;
        
        if($temp != null){
            
            echo "List contains:";
            
            while($temp != null){
                
                echo $temp->data." ";
                $temp=$temp->next;
            }
            echo "\n";
        }
    }
}

$list= new LinkedList();


$f = new Node();
$f->data = 10;
$f->next = null;
$list->head = $f;


$se= new Node();
$se->data=20;
$se->next=null;

$f->next=$se;

$t= new Node();
$t->data=90;
$t->next=null;
$se->next=$t;


$list->addFront(11);
$list->addFront(22);

$list->adBack(33);
$list->adBack(44);

$list->adPo(2,340);

$list->popF();
$list->popB();
$list->popPo(2);

echo "No. of nodes: ".$list->count();

$list->search(22);


$list->showList();



?>