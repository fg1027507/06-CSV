<?php
    $file =fopen("stock.csv", 'r');
    $stocks = array();
    while (!feof($file)){
        $stock = fgetcsv($file);
        if ($stock === false) continue;
        $stocks[] = $stock;
    }
    // print_r($stocks);
    foreach($stock as $stocks){
        echo("$stock[0] which is $stock[1] priced ay $stock[2]\n");
    }
    fclose($file);