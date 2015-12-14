<?php

namespace MyApp\Package\Permutations;

/**
 * Class Permutations
 * @package MyApp\Package\Permutations
 * returns array of all permutations of $n elements
 */

class Permutations
{

    public function getPermutations($input)
    {
        if (count($input) <= 1) {
            return array($input);
        }
        $result = array();
        foreach ($input as $v) {
            $reduce = array_filter(
                $input,
                function ($e) use ($v) {
                    return $e !== $v;
                }
            );
            $result = array_merge(
                $result,
                array_map(
                    function ($e) use ($v) {
                        array_unshift(
                            $e,
                            $v
                        );
                        return $e;
                    },
                    $this->getPermutations($reduce)
                )
            );
        }
        return $result;

    }

}

