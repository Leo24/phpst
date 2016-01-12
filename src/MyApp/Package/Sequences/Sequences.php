<?php

namespace MyApp\Package\Sequences;

/**
 * Class Sequences
 * @package MyApp\Package\Sequences
 * returns array of all Sequences of $n elements
 */

class Sequences
{
    /**
     * @param $arr
     */
    public function printArray($arr)
    {
        foreach ($arr as $k => $v) {
            print_r($v);
        }
        print_r("\n");
    }

    /**
     * @param $n
     * @param $k
     * @param $len
     * @param $arr
     */
    public function printSeqUtil($n, $m, $len, $arr)
    {
        if ($len == $m) {
            $this->printArray($arr);
        }
        $i = ($len == 0) ? 1 : $arr[$len-1] + 1;
        $len++;

        while ($i<=$n) {
            $arr[$len-1] = $i;
            $this->printSeqUtil($n, $m, $len, $arr);
            $i++;
        }
    }

    /**
     * @param $n
     * @param $k
     */
    public function printSeq($n, $m)
    {
        $arr = array();  // An array to store individual sequences
        $len = 0; // Initial length of current sequence
        $this->printSeqUtil($n, $m, $len, $arr);
    }















}
