<?php 

    class Animal{        
        private $weight;

        public function __construct($weightValue = 1){          // __construct 建構式
            $this ->weight = $weightValue;
            echo "Object created <br>";
        }

        public function __destruct(){                           // 物件摧毀
            echo "Object destoryed <br>";
        }
        public function makeNoise(){
            echo "Animal: ... <br>";
        }
        public function setWeight($weightValue){
            $this ->weight = $weightValue;
        }
        public function getWeight(){
            return $this->weight;
        }
    }

    echo "Flag 1<br>";
    $animal = new Animal(30);
    $animal ->makeNoise();              // 呼叫方法
    //$animal ->weight=10;              // 呼叫屬性不用加$
    //echo $animal ->weight . "kg<br>";
    //$animal = null;                     //  當值 = null or 當程式結束時，物件也不再被需要參考     -> destoryed

    $animal->setWeight(20);
    echo $animal->getWeight();
    echo "Flag 2<br>";
    
?>
