<?php

namespace MyApp\Package\DownloadImages;

require_once('simplehtmldom_1_5/simple_html_dom.php');

class DownloadImages
{
    /**
     * @var string the url to get images from
     */
    public $url;


    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Get images from url and put them to directory
     */
    public function getImages()
    {
        $dir = dirname(dirname(__FILE__));
        // Create DOM from URL or file
        $html = file_get_html($this->url);
        // Find all images
        foreach ($html->find('img') as $element) {
            $img = $dir . '/DownloadImages/downloaded_images/'.basename($element->attr['src']);
            file_put_contents($img, file_get_contents($element->attr['src']));
        }
    }
}

//
//if ($argc != 2) {
//    echo "Using: php DownloadImages.php [url].\n";
//    exit(1);
//}
//
//$url = $argv[1];
////$url = 'https://vk.com/id95101214';
//$image_getter = new DownloadImages($url);
//$image_getter->getImages();
