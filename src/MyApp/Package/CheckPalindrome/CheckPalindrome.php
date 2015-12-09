<?php

namespace MyApp\Package\CheckPalindrome;

class CheckPalindrome
{

    /**
     * @var string the word_to_check to check for palindrome
     */
    public $word_to_check;

    public function __construct($word)
    {
        $this->word_to_check = strtolower($word);
    }

    /**
     * Checks entry string for palindrome using build-in functions
     */
    public function checkPalindromeW1()
    {
        $word = str_replace(' ', '', $this->word_to_check);
        $word = strrev($word);

        if ($word == $this->word_to_check) {
            return "Output w1: " . $this->word_to_check . " is a palindrome\n";
        }
        return "Output w1: " . $this->word_to_check . " is not a palindrome\n";
    }

    /**
     * Checks entry string for palindrome using build-in functions and array functions
     */
    public function checkPalindromeW2()
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


//if ($argc != 2) {
//    echo "Checking word is palindrome: [word].\n";
//    exit(1);
//}
//$word = $argv[1];
//
//$palindrome = new CheckPalindrome($word);
//print_r($palindrome->checkPalindromeW1());
//print_r($palindrome->checkPalindromeW2());
