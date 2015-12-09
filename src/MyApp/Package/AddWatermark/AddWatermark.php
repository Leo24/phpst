<?php

namespace MyApp\Package\AddWatermark;

class AddWatermark
{
    /**
     * Adds watermark to images
     */
    public function addMark()
    {
        $dir = dirname(dirname(__FILE__));
        // Load the stamp and the photo to apply the watermark to
        $stamp = imagecreatefrompng($dir.'/AddWatermark/watermark_image/mev-logo-sml.png');
        $im = imagecreatefrompng($dir.'/AddWatermark/watermark_image/Openstudy_iPhone_1X.png');

        // Set the margins for the stamp and get the height/width of the stamp image
        $marge_right = 10;
        $marge_bottom = 10;
        $sx = imagesx($stamp);
        $sy = imagesy($stamp);

        // Copy the stamp image onto our photo using the margin offsets and the photo
        // width to calculate positioning of the stamp.
        imagecopy(
            $im,
            $stamp,
            imagesx($im) - $sx - $marge_right,
            imagesy($im) - $sy - $marge_bottom,
            0,
            0,
            imagesx($stamp),
            imagesy($stamp)
        );

        imagejpeg($im, $dir . '/AddWatermark/img_with_watermark/' . $im . '.jpg');

        // Output and free memory
        header('Content-type: image/png');
        imagepng($im);
        imagedestroy($im);
    }
}

//$watermark = new AddWatermark();
//$watermark->addMark();
