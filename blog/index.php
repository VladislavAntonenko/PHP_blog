<?php
    require_once ("database.php");
    require_once ("models/articles.php");

    $articles = articles_all();
    require_once ("views/articles.php");








//    //echo "Hello, world!<br>";
//   //echo time();
//    function add($param1, $param2)  {
//        return $param1 + $param2;
//    }
//
//
//    $a = $_GET['a'];
//    $b = $_GET['b'];
//
//    echo  add($a, $b );
//    echo "<br>";
//    for ($i=0;$i<10;$i++)   {
//        echo $i."<br>";
//    }
?>