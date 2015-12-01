<?php

class Files_As_Tree
{

    public function showTree($folder, $space)
    {
        $files = scandir($folder);
        foreach($files as $file) {
            if (($file == '.') || ($file == '..')) continue;
            $f0 = $folder.'/'.$file;
            if (is_dir($f0)) {
                echo $space.$file."\n";
                $this->showTree($f0, $space."\t");
            }
            else echo $space.$file."\n";
        }
    }
}


$tree = new Files_As_Tree("./", "");
$tree->showTree("./", "");
