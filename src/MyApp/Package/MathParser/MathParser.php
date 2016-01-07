<?php

namespace MyApp\Package\MathParser;

class MathParser
{
    public $expression;

    public function __construct($expression)
    {
        $this->expression = $expression;
        $this->parseExpression($this->expression);
    }

    public function parseExpression($expression)
    {

        $result = 0;

        $array = str_split($expression);
        $len = sizeof($array);

        'D:=((C-(B*L))+K).';

        'вычислить_множитель()
	результат = 0
	если текущий_символ цифра
		результат = прочитать_число()
	или если текущий_символ буква
		результат = вычислить_переменную()
	или если текущий_символ = "("
		результат = вычислить_выражение()
		если текущий символ != ")"
			ошибка
	или если текущий_символ = "+"
		результат = вычислить_множитель()
	или если текущий_символ = "-"
		результат = -вычислить_множитель()
	иначе
		ошибка
	вернуть результат';
    }
}
