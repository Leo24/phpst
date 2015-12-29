<?php

namespace MyApp\Package\Cinema\Discount;

class Discount
{
    private $studentDiscount;
    private $schoolkidDiscount;

    /**
     * @param $studentDiscount
     */
    public function setStudentDiscount($studentDiscount)
    {
        $this->studentDiscount = $studentDiscount;
    }

    /**
     * @param $schoolkidDiscount
     */
    public function setSchoolkidDiscount($schoolkidDiscount)
    {
        $this->schoolkidDiscount = $schoolkidDiscount;
    }

    /**
     * @return mixed
     */
    public function getStudentDiscount()
    {
        return $this->studentDiscount;
    }

    /**
     * @return mixed
     */
    public function getSchoolkidDiscount()
    {
        return $this->schoolkidDiscount;
    }


}