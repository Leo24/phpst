<?php
class Remove_Spaces
{
    public $string;

    /**
     * @var string the string to remove spases from it
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * Removes spaces from string using built-in function str_replace()
     */
    public function remove_spaces_w1()
    {
        return str_replace(' ', '', $this->string);
    }

    /**
     * Removes spaces from string using regular expressions
     */
    public function remove_spaces_w2()
    {
        return preg_replace('/\s+/', '', $this->string);
    }
}

if ($argc != 2) {
    echo "Removing spaces from string: ['sting'].\n";
    exit(1);
}
$str = $argv[1];
//$str = 'Do you just mean spaces or all whitespace?';

$string = new Remove_Spaces($str);
print_r('remove spaces w1 '.$string->remove_spaces_w1()."\n");
print_r('remove spaces w2 '.$string->remove_spaces_w2()."\n");
