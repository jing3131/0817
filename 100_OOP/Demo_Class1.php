<?php

$obj = new CAnimal();
$obj->makeNoise();				// 	呼叫方法
echo "<hr>";

$obj->weight = 10;  // 如果是 $obj->weight = -10; 呢		// 不用加$
echo $obj->weight;


class CAnimal
{
	
	public $weight;
	
	public function makeNoise()
	{
		echo "CAnimal: makeNoise";
	}
}

?>
