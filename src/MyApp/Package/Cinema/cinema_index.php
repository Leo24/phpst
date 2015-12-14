<?php

namespace MyApp\Package\Cinema;

use MyApp\Package\Cinema\CinemaHalls\CinemaHall;
use MyApp\Package\Cinema\Films\Film;
use MyApp\Package\Cinema\Sessions\Session;

$lock_stock = new Film(
    'Lock, Stock and Two Smoking Barrels',
    'Guy Ritchie',
    $actors = array(
        'Jason Flemyng',
        'Dexter Fletcher',
        'Nick Moran',
        'Jason Statham',
        'Steven Mackintosh',
        'Steven Mackintosh',
        'Nicholas Rowe',
        'Nick Marcq'
    ),
    '1998'
);

$lucy = new Film(
    'Lucy',
    'Luc Besson',
    $actors = array(
        'Scarlett Johansson',
        'Morgan Freeman',
        'Choi Min-sik',
        'Amr Waked',
    ),
    '2014'
);

$meet_joe_black = new Film(
    'Meet Joe Black',
    'Martin Brest',
    $actors = array(
        'Brad Pitt',
        'Anthony Hopkins',
        'Claire Forlani',
        'Jake Weber',
        'Marcia Gay Harden',
        'Jeffrey Tambor',
        'Lois Kelly-Miller',
        'David S. Howard'
    ),
    '1998'
);

$mission_impossible = new Film(
    'Mission_Imposible',
    'Brian De Palma',
    $actors = array(
        'Tom Cruise',
        'Ving Rhames',
        'Simon Pegg',
        'Jeremy Renner',
        'Jon Voight',
        'Emmanuelle Béart',
        'Henry Czerny',
        'Vanessa Redgrave'
    ),
    '1996'
);

$transporter = new Film(
    'The Transporter',
    'Louis Leterrier',
    $actors = array(
        'Jason Statham',
        'Shu Qi',
        'François Berléand',
        'Matt Schulze'
    ),
    '2002'
);


$lock_stock_session = new Session(
    $lock_stock->getFilmInfo()['film_name'],
    $lock_stock
);
$mission_impossible_session = new Session(
    $mission_impossible->getFilmInfo()['film_name'],
    $mission_impossible
);
$lucy_session = new Session(
    $lucy->getFilmInfo()['film_name'],
    $lucy
);
$meet_joe_black_session = new Session(
    $meet_joe_black->getFilmInfo()['film_name'],
    $meet_joe_black
);
$transporter_session = new Session(
    $transporter->getFilmInfo()['film_name'],
    $transporter
);


/*Create Belmondo hall*/

$belmondo_hall = new CinemaHall('Belmondo', 20, 25);

$lock_stock_session->setSessionStartTime('10-00');
$lock_stock_session->setSessionEndTime('12-00');
$lock_stock_session->setPrice('12');

$mission_impossible_session->setSessionStartTime('12-30');
$mission_impossible_session->setSessionEndTime('14-30');
$mission_impossible_session->setPrice('14');

$lucy_session->setSessionStartTime('15-00');
$lucy_session->setSessionEndTime('18-00');
$lucy_session->setPrice('18');

$belmondo_hall->setAvailableSessions($mission_impossible_session);
$belmondo_hall->setAvailableSessions($lock_stock_session);
$belmondo_hall->setAvailableSessions($lucy_session);


/*Create Cameron hall*/
$cameron_hall = new CinemaHall('Cameron', 30, 18);

$meet_joe_black_session->setSessionStartTime('11-30');
$meet_joe_black_session->setSessionEndTime('13-30');
$meet_joe_black_session->setPrice('13');

$transporter_session->setSessionStartTime('14-00');
$transporter_session->setSessionEndTime('16-00');
$transporter_session->setPrice('16');

$lock_stock_session->setSessionStartTime('18-30');
$lock_stock_session->setSessionEndTime('20-30');
$lock_stock_session->setPrice('20');

$cameron_hall->setAvailableSessions($meet_joe_black_session);
$cameron_hall->setAvailableSessions($transporter_session);
$cameron_hall->setAvailableSessions($lock_stock_session);


$user = 'student';
$cinema = new Cinema($user);
$cinema->setHall($belmondo_hall, $belmondo_hall->hallName());
$cinema->setHall($cameron_hall, $cameron_hall->hallName());
