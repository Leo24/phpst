<?php

require_once('simplehtmldom_1_5/simple_html_dom.php');

class Download_Images{

    private $url;

    function  __construct($url)
    {

        $this->$url = $url;
    }

        function get_images($url)
        {
            // Create DOM from URL or file
            $html = file_get_html($url);
            // Find all images
            foreach($html->find('img') as $element) {
//                echo $element->src . '<br>';
                $img = 'downloaded_images/'.basename($element->attr['src']);
                file_put_contents($img, file_get_contents($element->attr['src']));
            }
        }


}

if ($argc != 2) {
    echo "Использование: php download_images.php [url].\n";
    exit(1);
}

$url = $argv[1];
//$url = 'https://vk.com/id95101214';
$image_getter = new Download_Images($url);
$image_getter->get_images($image_getter->$url);