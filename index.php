<?php
$loader = require 'vendor/autoload.php';
$dir = __DIR__;
$loader->add('MyApp\\', $dir.'/src/');

//$a = new MyApp\Package\FilesAsTree\FilesAsTree();
//$a->showTree("./", "");
//$a = new MyApp\Package\GetTwitts\GetTwitts('j7mbo');
//$a->getTwits();
//$a = new MyApp\Package\DownloadImages\DownloadImages('https://vk.com/id95101214');
//$a->getImages();

//$a = new MyApp\Package\ArraySum\ArraySum(array(-1,1,2,3,4,15,16,7,8,9,10));

//$a = new MyApp\Package\ArrayMinMax\ArrayMinMax(array(-1,1,2,3,4,15,16,7,8,9,10));

//$a = new MyApp\Package\ArrayIntersect\ArrayIntersect(
//    array( "HTML", "CSS", "PHP", "MacOS"),
//    array("PHP", "MacOS", "PAINT.NET", "DREAMWEAVER")
//);

//$a = new MyApp\Package\QuickSort\QuickSort(array(-1,1,2,3,4,15,16,7,8,9,10));

//$a = new MyApp\Package\RemoveSpaces\RemoveSpaces('Do you just mean spaces or all whitespace?');
//print_r('remove spaces w1 '.$a->removeSpacesW1()."\n");
//print_r('remove spaces w2 '.$a->removeSpacesW2()."\n");

//
//$a = new MyApp\Package\Substring\Substring('abcdefg', 'def');
//print_r($a->checkEntryW1()."\n");
//print_r($a->checkEntryW2()."\n");
//$a->checkEntryW3();



//$a = new MyApp\Package\CheckPalindrome\CheckPalindrome('Eve');
//print_r($a->checkPalindromeW1());
//print_r($a->checkPalindromeW2());


$a = new MyApp\Package\AddWatermark\AddWatermark();
$a->addMark();
