<?php

namespace MyApp\Package\Cinema\Sessions;

trait LockStock2Barels
{

    public function filmName()
    {
        return 'Lock, Stock and Two Smoking Barrels';
    }

    public function directorName()
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

    public function releaseYear()
    {
        return '1998';
    }

}