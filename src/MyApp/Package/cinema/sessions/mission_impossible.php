<?php

    trait Mission_Imposible{

        public function film_name()
        {
            return 'Mission_Imposible';
        }

        public function director_name()
        {
            return 'Brian De Palma';
        }

        public function actors()
        {
            $actors = array(
                            'Tom Cruise',
                            'Ving Rhames',
                            'Simon Pegg',
                            'Jeremy Renner',
                            'Jon Voight',
                            'Emmanuelle Béart',
                            'Henry Czerny',
                            'Vanessa Redgrave'
                          );
            return $actors;
        }

        public function release_year()
        {
            return '1996';
        }

    }