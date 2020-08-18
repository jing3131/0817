<?php 

class Test{
    public $price = 100;
    private $dataBag;

    public function __set($k,$v){           //  在類別沒有定義時設定了一個陌生的屬性 ->  呼叫__set
        echo "__set is running ($k , $v) <br>";
        $this ->dataBag[$k] = $v;
    }
    public function __get($k){              // 在類別沒有定義時呼叫了一個陌生的屬性 ->  呼叫__get
        echo "__get is called <br>";
        return $this->dataBag[$k];
    }
}

$a =new Test();
$a->location = "Taichung";
echo $a->location;

?>