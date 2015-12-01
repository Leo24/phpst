<?php
class Remove_Spaces
{
    public $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function remove_spaces_w1()
    {
        return str_replace(' ', '', $this->string);
    }
    public function remove_spaces_w2()
    {
        return preg_replace('/\s+/', '', $this->string);
    }
}

$str = 'Do you just mean spaces or all whitespace?';

$string = new Remove_Spaces($str);
print_r('remove spaces w1 '.$string->remove_spaces_w1()."\n");
print_r('remove spaces w2 '.$string->remove_spaces_w2()."\n");
