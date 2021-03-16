<?php
$proroc = [

'name' =>'леша',
'surname'=>'navalnii',
'age'=>'25',
'golosa'=>['ER'=>'60%', 'KPSS'=>'20%' , 'apple' =>'10%']
];
echo $_GET['name'];
echo $_GET['surname'];
echo "<a href='index-2.php?name=" . urlencode('лешка навали'). "'>алеша навальный</a>";

//http://localhost:4000/?name=Ivan&surname=proroc
/*
echo '<pre>';
print_r($proroc);
echo '<pre>';
echo json_encode($proroc, JSON_UNESCAPED_UNICODE);*/
?>
<?php
/*ini_set('error_reporting', E_ALL);
define("PI",3.14);//const
echo "rot ebal";
echo "<br>";
//echo date(DATE) RSS;
include "index-2.php";
$ggwp = 3.14;
$ggwp1 = 0xA4;  //16
$chui =1;
echo "hello chmo - $ggwp";
echo 'hello chmo - $ggwp';
echo $chui;
unset($chui);
gettype($ggwp);
class ayf{
    public $name;
    public $surname;
    public static $people = "chrt";
}
echo ayf::$people;
$home = new ayf;
$home->name = "chhmo";
$arr=array('asd','awd','ad');
$arr2= [1,2,3,10=>5,'gg'=>3];
echo '<pre>';
print_r($arr);
echo '</pre>';
echo count($arr);
$people = [
'Ivan' => ['age'=>21, 'weight'=>75],
'Lena' => ['age'=>21, 'weight'=>75],
'Oleg' => ['age'=>21, 'weight'=>75]
];
echo '<pre>';
print_r($people);
echo '</pre>';
echo $people['Oleg']['age'];
echo "sadas {$people['Oleg']['weight']} dsfsdf";
$arr5 = [1,3,2];
$andru = [
    'name' => 'Andru',
    'age' => 19,
    'weight'=>250
];
foreach ($andru as $key => $value) {
  echo $key . ' ' . $value . '<br>';
}
echo '<br>';
function getSum($var = 5 , $int = 4){
    return $var+$int;
}
getSum();
$str = 'fartymasty';
trim($str);
htmlspecialchars()
//форматирование строки
//str_replace('rty', 'hot',$str);
//strpos($str,'y');позиция
//strlen($str);длина
//substr($str,5);обрез
/*
function myList(...$items){
    $numb=0;
    foreach($items as $key =>$value){
$numb+=$value;
    }
    return $numb;
}
$summer = [1,4,2,5,6,7,8];
*/
    //echo myList(4,2,4,0,2,5,3,12);
//echo myList(...$summer);5); сумма*/
//list($one,$two,$three) = $arr5;
//echo $one . $two . $three;
//include(выполняется),require(выполняется)require_once
//var_dump($a>$b)сравнение
//$content = file_get_contents('https://mechtatell.github.io/');exit("goodbay");
//goto finish переход к метке
//echo $content;

?>

