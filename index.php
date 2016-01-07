<?php
$loader = require 'plugins/autoload.php';
$dir = __DIR__;
$loader->add('MyApp\\', $dir.'/src/');

if ($argc == 1) {
    echo "Choose script to run.\n";
    exit(1);
} else {
    if ($argv[1] == 'CheckPalindrome') {
        $a = new MyApp\Package\CheckPalindrome\CheckPalindrome($argv[2]);
        print_r($a->checkPalindromeW1());
        print_r($a->checkPalindromeW2());
    } elseif ($argv[1] == 'AddWatermark') {
        $a = new MyApp\Package\AddWatermark\AddWatermark();
        $a->addMark();
    } elseif ($argv[1] == 'ArrayIntersect') {
        $a = new MyApp\Package\ArrayIntersect\ArrayIntersect(
            array( "HTML", "CSS", "PHP", "MacOS"),
            array("PHP", "MacOS", "PAINT.NET", "DREAMWEAVER")
        );
    } elseif ($argv[1] == 'ArrayMinMax') {
        $a = new MyApp\Package\ArrayMinMax\ArrayMinMax(array(-1,1,2,3,4,15,16,7,8,9,10));
    } elseif ($argv[1] == 'ArraySum') {
        $a = new MyApp\Package\ArraySum\ArraySum(array(-1,1,2,3,4,15,16,7,8,9,10));
    } elseif ($argv[1] == 'DownloadImages') {
        $url = $argv[2];
//        $url = 'https://vk.com/id95101214';
        $image_getter = new DownloadImages($url);
        $image_getter->getImages();
    } elseif ($argv[1] == 'FilesAsTree') {
        $a = new MyApp\Package\FilesAsTree\FilesAsTree();
        $a->showTree("./", "");
    } elseif ($argv[1] == 'GetTwitts') {
        $a = new MyApp\Package\GetTwitts\GetTwitts('j7mbo');
        $a->getTwits();
    } elseif ($argv[1] == 'Permutations') {
        $input = range(1, 5, 1);
        $a = new MyApp\Package\Permutations\Permutations();
        print_r($a->getPermutations($input));
    } elseif ($argv[1] == 'QuickSort') {
        $a = new MyApp\Package\QuickSort\QuickSort(array(-1,1,2,3,4,15,16,7,8,9,10));
    } elseif ($argv[1] == 'RemoveSpaces') {
        $a = new MyApp\Package\RemoveSpaces\RemoveSpaces('Do you just mean spaces or all whitespace?');
        print_r('remove spaces w1 '.$a->removeSpacesW1()."\n");
        print_r('remove spaces w2 '.$a->removeSpacesW2()."\n");
    } elseif ($argv[1] == 'Substring') {
        $a = new MyApp\Package\Substring\Substring('abcdefg', 'def');
        print_r($a->checkEntryW1()."\n");
        print_r($a->checkEntryW2()."\n");
        $a->checkEntryW3();
    }
}
