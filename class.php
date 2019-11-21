<?php

Class Product{
    public $name;
    public $stock;
    }
$hinoki = new Product();
$hinoki->name = "ひのきのぼう";
$hinoki->stock = 10;

echo $hinoki->name . $hinoki ->stock;

