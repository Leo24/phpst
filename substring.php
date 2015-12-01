<?php

class Substring{

    public $string;
    public $substring;

    public function __construct($string, $substring)
    {
        $this->string = $string;
        $this->substring = $substring;
    }

    public function check_entry_w1()
    {
        if (strpos($this->string, $this->substring) !== false) {
            return $this->string.' INCLUDES '.$this->substring;
        }
        return false;
    }

    public function check_entry_w2()
    {
        if(stristr($this->string, $this->substring) !== false) {
            return $this->string.' INCLUDES '.$this->substring;
        }
        return false;
    }

    public function check_entry_w3()
    {
        $str = '/'.$this->substring.'/';
        preg_match($str, $this->string, $matches, PREG_OFFSET_CAPTURE);
        print_r($matches);
    }

}

$subject = "abcdefg";
$pattern = 'def';
$sub = new Substring($subject, $pattern);

print_r($sub->check_entry_w1()."\n");
print_r($sub->check_entry_w2()."\n");
$sub->check_entry_w3();
