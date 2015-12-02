<?php

class Cinema{

    public $user;
    public $student_discount;
    public $schoolkid_discount;
    public $halls_list;
    public $sessions_list;

    private $price;

    public function __construct($user)
    {
        $this->user = $user;
        $this->check_user();
    }

    public function check_user()
    {
        if($this->user == 'student'){
            return ($this->get_price() - $this->student_discount);
        }else if($this->user == 'schoolkid'){
            return ($this->get_price() - $this->schoolkid_discount);
        }
        return $this->get_price();
    }

    public function set_price($price){
        return $this->price = $price;
    }

    public function get_price(){
        return $this->price;
    }

    public function get_halls_list(){
        return $this->halls_list;
    }

    public function get_sessions_list(){
        return $this->sessions_list;
    }

    public function book_place(){

    }

    public function buy_ticket(){

    }



}