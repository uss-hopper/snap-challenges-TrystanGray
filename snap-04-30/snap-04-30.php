<?php

/*Using the Tweet.php class found on the Object Oriented PHP page, write and document a getTweetsByTweetDate method
that takes a DateTime object as a parameter and returns an array of all Tweets on that date.*/

public static function getTweetsByTweetDate(\PDO $pdo, $tweetDateTime) : \SplFixedArray {
try {
	$tweetDateTime = self::validateDateTime($tweetDateTime);
} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
throw(new \PDOException($exception->getMessage(), 0, $exception));
}
// create query template
$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDateTime FROM tweet WHERE tweetDateTime = :tweetDateTime";
$statement = $pdo->prepare($query);
// bind the author profile id to the place holder in the template
$parameters = ["$tweetDateTime" => $tweetDateTime->getBytes()];
$statement->execute($parameters);
// build an array of authors
$tweet = new \SplFixedArray($statement->rowCount());
$statement->setFetchMode(\PDO::FETCH_ASSOC);
while(($row = $statement->fetch()) !== false) {
try {
	$tweet = new Tweet($row["tweetId"], $row["tweetProfileId"], $row["tweetContent"], $row["tweetDateTime"]);
	$tweet[$tweet->key()] = $tweet;
$tweet->next();
} catch(\Exception $exception) {
// if the row couldn't be converted, rethrow it
throw(new \PDOException($exception->getMessage(), 0, $exception));
}
}
return ($tweetDateTime);
}