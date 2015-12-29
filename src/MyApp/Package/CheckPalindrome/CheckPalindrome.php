<?php

namespace MyApp\Package\CheckPalindrome;

class CheckPalindrome
{

    /**
     * @var string the word_to_check to check for palindrome
     */
    public $wordToCheck;

    public function __construct($word)
    {
        $this->wordToCheck = strtolower($word);
    }

    /**
     * Checks entry string for palindrome using build-in functions
     */
    public function checkPalindromeW1()
    {
        $word = str_replace(' ', '', $this->wordToCheck);
        $word = strrev($word);

        if ($word == $this->wordToCheck) {
            return "Output w1: " . $this->wordToCheck . " is a palindrome\n";
        }
        return "Output w1: " . $this->wordToCheck . " is not a palindrome\n";
    }

    /**
     * Checks entry string for palindrome using build-in functions and array functions
     */
    public function checkPalindromeW2()
    {
        $array = str_split($this->wordToCheck);
        $len = sizeof($array);
        $newString = "";

        for ($i = $len; $i >= 0; $i--) {
            $newString.=$array[$i];
        }
        if ($this->wordToCheck == $newString) {
            return "Output w2: " . $this->wordToCheck . " is a palindrome\n";
        }
            return "Output w2: " . $this->wordToCheck . " is not a palindrome\n";
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
