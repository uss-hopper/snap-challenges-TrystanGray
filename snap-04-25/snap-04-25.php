<?php
namespace tgray19\SnapChallenge;

class Writer {

	private $writerContent;
	private $writerHash;

	/**
	 * constructor for this Author
	 *
	 * @param string $newWriterContent writers posts.
	 * @param string $newWriterHash string containing writers hash.
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 * @Documentation https://php.net/manual/en/language.oop5.decon.php
	 **/

	public function __construct( string $newWriterContent, string $newWriterHash) {
		try {
			$this->setWriterContent($newWriterContent);
			$this->setWriterHash($newWriterHash);
		}
			//determine what exception type was thrown
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}

/**
 *Accessor method for writerContent
 *@return string for writerContent
 */
public function getWriterContent(): ?string {
	return ($this->writerContent);
}
/**
 * mutator method for writer content
 *
 * @param  string $newWriterContent value of new author email
 * @throws \InvalidArgumentException if $newWriterContent is not a valid email or insecure
 * @throws \RangeException if $newWriterContent is over charset
 * @throws \TypeError if the writer content is not a string
 **/
public function setWriterContent(?string $newWriterContent): void {
// verify the content is secure
	$newWriterContent = trim($newWriterContent);
	$newWriterContent = filter_var($newWriterContent, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newWriterContent) === true) {
		throw(new \InvalidArgumentException("content is empty or insecure"));
	}
	// verify the content will fit in the database
	if(strlen($newWriterContent) > 128) {
		throw(new \RangeException("email content too large"));
	}
	// store the email content
	$this->$newWriterContent = $newWriterContent;
}
/**
 *Accessor method for writerHash
 *@return string for writerHash
 */
public function getWriterHash(): ?string {
	return($this->writerHash);
}
/**
 * mutator method for writer hash
 *
 * @param  string $newWriterHash value of new hash
 * @throws \InvalidArgumentException if $newWriterHash is not a valid hash key or insecure
 * @throws \RangeException if $newWriterHash is over charset
 * @throws \TypeError if the hash is not a string
 **/
public function setWriterHash(?string $newWriterHash): void {
//enforce that the hash is properly formatted
	$newWriterHash = trim($newWriterHash);
	if(empty($newWriterHash) === true) {
		throw(new \InvalidArgumentException("writer password hash empty or insecure"));
	}
	//enforce the hash is really an Argon hash
	$profileHashInfo = password_get_info($newWriterHash);
	if($profileHashInfo["algoName"] !== "argon2i") {
		throw(new \InvalidArgumentException("hash is not a valid hash"));
	}
	//enforce that the hash is exactly 97 characters.
	if(strlen($newWriterHash) !== 97) {
		throw(new \RangeException("Author hash must be 97 characters"));
	}
	//store the hash
	$this->writerHash = $newWriterHash;}

/**
 * inserts into authors mySQL
 *
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 **/
public function insert(\PDO $pdo) : void {
	// create query template
	$query = "INSERT INTO writer(writerHash, writerContent) 
VALUES(:writerHash, :writerContent)";
	$statement = $pdo->prepare($query);
	// bind the member variables to the place holders in the template
	$parameters = [
		"writerHash" => $this->writerHash, "writerContent" => $this->writerContent];
	$statement->execute($parameters);
}}

$Writer = new Writer(
	"YOOOOOOOOOOOOO",
	'$argon2i$v=19$m=1024,t=384,p=2$T1B6Ymdqa3FJdmZqaDdqYg$hhyC1jf2WjbgfD8Jp6GZE9Tg3IpsYpXKm2VWYOJq8LA');
var_dump($Writer);   