<?php

require_once('simplehtmldom_1_5/simple_html_dom.php');

class Download_Images{

    public $url;
    const WATERMARK = 'watermark_image/mev-logo-sml.png';

    public function  __construct($url)
    {

        $this->$url = $url;
    }

    public function get_images($url)
    {
        // Create DOM from URL or file
        $html = file_get_html($url);
        // Find all images
        foreach($html->find('img') as $element) {
//                echo $element->src . '<br>';
            $img = 'downloaded_images/'.basename($element->attr['src']);
            file_put_contents($img, file_get_contents($element->attr['src']));
            $this->add_watemark($img);
        }
    }

    public function add_watemark($img)
    {

        // Load the stamp and the photo to apply the watermark to
        $stamp = imagecreatefrompng($this::WATERMARK);
        $im = imagecreatefromjpeg($img);

        // Set the margins for the stamp and get the height/width of the stamp image
        $marge_right = 10;
        $marge_bottom = 10;
        $sx = imagesx($stamp);
        $sy = imagesy($stamp);

        // Copy the stamp image onto our photo using the margin offsets and the photo
        // width to calculate positioning of the stamp.
        imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

        // Output and free memory
        header('Content-type: image/png');
        imagepng($im);
        imagedestroy($im);
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