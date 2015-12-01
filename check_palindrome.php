<?php

class Check_Palindrome{

    public $word_to_check;

    public function __construct($word)
    {
        $this->word_to_check = $word;
    }

    public function check_palindrome_w1()
    {
        $word = str_replace(' ', '', $this->word_to_check);
        $word = strrev($word);

        if($word == $this->word_to_check){
            return "Output w1: " . $this->word_to_check . " is a palindrome\n";
        }
        return "Output w1: " . $this->word_to_check . " is not a palindrome\n";
    }

    public function check_palindrome_w2()
    {
        $array = str_split($this->word_to_check);
        $len = sizeof($array);
        $newString = "";

        for ($i = $len; $i >= 0; $i--) {
            $newString.=$array[$i];
        }
        if ($this->word_to_check == $newString) {
            return "Output w2: " . $this->word_to_check . " is a palindrome\n";
        }
            return "Output w2: " . $this->word_to_check . " is not a palindrome\n";
    }
}


if ($argc != 2) {
    echo "Checking word is palindrome: [word].\n";
    exit(1);
}
$word = $argv[1];

$palindrome = new Check_Palindrome($word);
print_r($palindrome->check_palindrome_w1());
print_r($palindrome->check_palindrome_w2());