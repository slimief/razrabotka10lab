<?php
isset($_POST['button']);
$n_a = (int) $_POST['a'];
$n_b = (int) $_POST['b'];
$n_c = (int) $_POST['c'];
$n_x = (int) $_POST['x'];

class qwerty{
    public $n_a, $n_b, $n_c, $n_x;
    function __construct($n_a, $n_b, $n_c, $n_x){
        $this ->n_a = $n_a;
        $this ->n_b = $n_b;
        $this ->n_c = $n_c;
        $this ->n_x = $n_x;
    }
    function Num1(){
        if($n_x < 3){
            echo "$this->n_x *$this->n_x + 3*$this->n_x + 9";
        }
        else{
            echo "$this->n_x *$this->n_x *$this->n_x + 6";
        }
    }
    function Num2(){
        
        echo "$this->n_a * $this->n_b + $this->n_c";
    }
}
$nums = new qwerty($n_a,$n_b,$n_c,$n_x);
$nums->Num1();
$nums->Num2();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name = "a">
        <input type="text" name = "b">
        <input type="text" name = "c">
        <input type="text" name = "x">
        <button type="submit" name ="button" value="button">button</button>
</body>
</html>
