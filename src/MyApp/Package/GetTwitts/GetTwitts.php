<?php

namespace MyApp\Package\GetTwitts;

class GetTwitts
{
    /**
     * @var string the username to get tweets
     */
    public $username;
    /**
     * @var string the access_token to get access to twitter api
     */
    private $accessToken = '4341913648-U4Z2HjpWkOu7two69r1l2hFfZa5zukgNUbIT4W1';
    /**
     * @var string the access_token_secret to get access to twitter api
     */
    private $accessTokenSecret = 'ID9aGXO9HkpxmAW2pvxFhDivW09m6qNhss3HApDRKbvrj';
    /**
     * @var string the consumer_key to get access to twitter api
     */
    private $consumerKey = 'ya9914sYBlwbDdgLwJO7ZnJ4j';
    /**
     * @var string the consumer_secret to get access to twitter api
     */
    private $consumerSecret = 'mbl59TLpDpKmlTfkGXO2d46xaiedX69QA7QHIoGOKPeEkyP7CV';

    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * Get user twitts
     */
    public function getTwits()
    {

        $settings = array(
            'oauth_access_token' => $this->accessToken,
            'oauth_access_token_secret' => $this->accessTokenSecret,
            'consumer_key' =>  $this->consumerKey,
            'consumer_secret' => $this->consumerSecret
        );

        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?screen_name='.$this->username;
        $requestMethod = 'GET';

        $twitter = new \TwitterAPIExchange($settings);
        $response = $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();
        var_dump(json_decode($response));

    }

}


//if ($argc != 2) {
//    echo "Getting twitts of user: [username].\n";
//    exit(1);
//}
//$username = $argv[1];
////$username = 'j7mbo';
////$username = 'nettuts';
//
//$twitts = new GetTwitts($username);
//$twitts->getTwits();
