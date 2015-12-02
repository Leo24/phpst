<?php

require "twitter_proxy/TwitterAPIExchange.php";

class Get_Twitts
{

    public $username;

    private $access_token = '4341913648-U4Z2HjpWkOu7two69r1l2hFfZa5zukgNUbIT4W1';
    private $access_token_secret = 'ID9aGXO9HkpxmAW2pvxFhDivW09m6qNhss3HApDRKbvrj';
//    private $user_id = '2646886861';
//    private $screen_name = 'nettuts';
//    private $count = 100;

    const CONSUMER_KEY = 'ya9914sYBlwbDdgLwJO7ZnJ4j';
    const CONSUMER_SECRET = 'mbl59TLpDpKmlTfkGXO2d46xaiedX69QA7QHIoGOKPeEkyP7CV';

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function getTwits()
    {

        $settings = array(
            'oauth_access_token' => $this->access_token,
            'oauth_access_token_secret' => $this->access_token_secret,
            'consumer_key' =>  $this::CONSUMER_KEY,
            'consumer_secret' => $this::CONSUMER_SECRET
        );

        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
//        $getfield = '?screen_name=j7mbo';
//        $getfield = '?screen_name=nettuts';
        $getfield = '?screen_name='.$this->username;
        $requestMethod = 'GET';

        $twitter = new TwitterAPIExchange($settings);
        $response = $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();
        var_dump(json_decode($response));

    }

}


if ($argc != 2) {
    echo "Getting twitts of user: [username].\n";
    exit(1);
}
$username = $argv[1];

$twitts = new Get_Twitts($username);
$twitts->getTwits();