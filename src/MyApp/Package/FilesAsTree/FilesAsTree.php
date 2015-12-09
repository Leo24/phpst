<?php
namespace MyApp\Package\FilesAsTree;

class FilesAsTree
{
    /**
     * @var string the folder for search inside
     *
     * @var string the space - space between filenames
     */
    public function showTree($folder, $space)
    {
        $files = scandir($folder);
        foreach ($files as $file) {
            if (($file == '.') || ($file == '..')) {
                continue;
            }
            $f0 = $folder.'/'.$file;
            if (is_dir($f0)) {
                echo $space.$file."\n";
                $this->showTree($f0, $space."\t");
            } else {
                echo $space.$file."\n";
            }
        }
    }
}

//$tree = new FilesAsTree();
//$tree->showTree("../", "");
