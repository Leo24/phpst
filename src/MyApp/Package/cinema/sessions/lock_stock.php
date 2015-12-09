<?php

trait Lock_Stock_2_Barels{

    public function film_name()
    {
        return 'Lock, Stock and Two Smoking Barrels';
    }

    public function director_name()
    {
        return 'Guy Ritchie';
    }

    public function actors()
    {
        $actors = array(
                        'Jason Flemyng',
                        'Dexter Fletcher',
                        'Nick Moran',
                        'Jason Statham',
                        'Steven Mackintosh',
                        'Steven Mackintosh',
                        'Nicholas Rowe',
                        'Nick Marcq'
                     );
        return $actors;
    }

    public function release_year()
    {
        return '1998';
    }

}