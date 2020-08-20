<?php

$viewBag = new stdClass();     //新增一個類別
$viewBag->name = "Wolfgang Chien";    

require_once("helloView.php");//必須獨立一個檔案（helloView.php）在嵌入進來

?>