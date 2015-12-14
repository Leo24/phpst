<?php

namespace MyApp\Package\Cinema\Discount;

class Discount
{
    private $student_discount;
    private $schoolkid_discount;

    public function setStudentDiscount($student_discount)
    {
        $this->student_discount = $student_discount;
    }

    public function setSchoolkidDiscount($schoolkid_discount)
    {
        $this->schoolkid_discount = $schoolkid_discount;
    }

    public function getStudentDiscount()
    {
        return $this->student_discount;
    }



    public function getSchoolkidDiscount()
    {
        return $this->schoolkid_discount;
    }


}