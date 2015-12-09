<?php

namespace MyApp\Package\Substring;

class Substring
{

    public $string;
    public $substring;

    /**
     * @var string the string
     *
     * @var string the Substring for search inside Substring
     */
    public function __construct($string, $substring)
    {
        $this->string = $string;
        $this->substring = $substring;
    }

    /**
     * Checks entry Substring in string with strpos() built-in function
     */
    public function checkEntryW1()
    {
        if (strpos($this->string, $this->substring) !== false) {
            return $this->string.' INCLUDES '.$this->substring;
        }
        return false;
    }

    /**
     * Checks entry Substring in string with stristr() built-in function
     */
    public function checkEntryW2()
    {
        if (stristr($this->string, $this->substring) !== false) {
            return $this->string.' INCLUDES '.$this->substring;
        }
        return false;
    }

    /**
     * Checks entry Substring in string using regular expressions
     */
    public function checkEntryW3()
    {
        $str = '/'.$this->substring.'/';
        preg_match($str, $this->string, $matches, PREG_OFFSET_CAPTURE);
        print_r($matches);
    }

}

//if ($argc != 3) {
//    echo "Checking Substring in String: [String, Substring].\n";
//    exit(1);
//}
//$subject = $argv[1];
//$pattern = $argv[2];
//
//
////$subject = "abcdefg";
////$pattern = 'def';
//$sub = new Substring($subject, $pattern);
//
//print_r($sub->checkEntryW1()."\n");
//print_r($sub->checkEntryW2()."\n");
//$sub->checkEntryW3();
