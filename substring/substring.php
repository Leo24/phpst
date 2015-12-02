<?php

class Substring{

    public $string;
    public $substring;

    /**
     * @var string the string
     *
     * @var string the substring for search inside substring
     */
    public function __construct($string, $substring)
    {
        $this->string = $string;
        $this->substring = $substring;
    }

    /**
     * Checks entry substring in string with strpos() built-in function
     */
    public function check_entry_w1()
    {
        if (strpos($this->string, $this->substring) !== false) {
            return $this->string.' INCLUDES '.$this->substring;
        }
        return false;
    }

    /**
     * Checks entry substring in string with stristr() built-in function
     */
    public function check_entry_w2()
    {
        if(stristr($this->string, $this->substring) !== false) {
            return $this->string.' INCLUDES '.$this->substring;
        }
        return false;
    }

    /**
     * Checks entry substring in string using regular expressions
     */
    public function check_entry_w3()
    {
        $str = '/'.$this->substring.'/';
        preg_match($str, $this->string, $matches, PREG_OFFSET_CAPTURE);
        print_r($matches);
    }

}


if ($argc != 3) {
    echo "Checking Substring in String: [String, Substring].\n";
    exit(1);
}
$subject = $argv[1];
$pattern = $argv[2];


//$subject = "abcdefg";
//$pattern = 'def';
$sub = new Substring($subject, $pattern);

print_r($sub->check_entry_w1()."\n");
print_r($sub->check_entry_w2()."\n");
$sub->check_entry_w3();
