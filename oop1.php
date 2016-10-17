<?php

class car{
    public $coler; //property
    
    public function setColer ($c){
        return 'Car is :'.$this->coler=$c;
}
    public function sayHello (){
        return 'sayHello';
}
}
$newcar=new car;
$test=$newcar->SetColer('red');
echo$test;
echo'<hr>';
echo$newcar->sayHello();
echo'<hr>';
echo$newcar->coler='orange';
