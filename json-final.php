<?php

error_reporting(E_ALL);

include_once 'functions.php';
include_once 'input-test-data.php';
include_once 'twitteroauth/twitteroauth.php';

$products = json_decode($json_input, true);

// Twitter things
$consumer = "LSTGh9q2cXsqbQTcRFVYPFe65";
$consumersecret = "Qm2On2fVtccSQBEwRaMuN4MRczYIeq7LCYxWOj5oVbuzeo4JTH";
$accesstoken = "4924278699-AOm50GFnDrXQSlhICNjHO8NjpD9PsSO6SCzCn9e";
$accesstokensecret = "TBTLwQCLEyISyljuL86Jd2WPmJ3RXHmo9nSaCkM329FeK";

$twitter = new TwitterOAuth($consumer, $consumersecret, $accesstoken, $accesstokensecret);

$tweets_array = array();

$counter_test = 0;
foreach ($products as $product_name) {

	// Query by GET method against Twitter's API
	$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='.$product_name.'&result_type=recent&count=100');

	foreach ($tweets->statuses as $key => $tweet) {

		$hashtags = '';
		$hashtags_array = array();
		
		if (!empty($tweet->entities->hashtags)) {
			foreach ($tweet->entities->hashtags as $hashtag) {
				array_push($hashtags_array, $hashtag->text);
			}
			$hashtags = implode(', ', $hashtags_array);
		}

		$tweets_array[$tweet->id] = array(
			'text'		=> $tweet->text,
			'created'	=> $tweet->created_at,
			'location'	=> $tweet->user->location,
			'hashtags'	=> $hashtags
		);

		if (count($tweets_array) > 999) {
			$json_tweets = json_encode($tweets_array);
			write_file($json_tweets);
			unset($json_tweets);
		}

	}
	if ($counter_test > 100) {
		return; die;
	}
	$counter_test++;

	// Ensure we get 150 tweets per 15 minutes
	sleep(6);
}

echo "COMPLETED!";

?>
