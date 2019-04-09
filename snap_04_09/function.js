/**
 * Take two numbers and multiply them.
 *int is integer
 * @param int firstNumber One number to mult.
 * @param int secondNumber The other number to mult.
 * @return int The product of the two numbers.
 */


function multiplyNumbers(firstNumber, secondNumber) {
	return firstNumber * secondNumber;
}

// Now the function exists but now you need to call it and test it with console.log

console.log(multiplyNumbers(-2, 5));
// no you called it and it works. test more.
console.log(multiplyNumbers(514, 69));
console.log(multiplyNumbers(0, 69));
console.log(multiplyNumbers(4, 9));
console.log(multiplyNumbers(-4, 6));
console.log(multiplyNumbers(-24626, 169));
// or you can use let
let myNumber = -5;
console.log(multiplyNumbers(-24, myNumber));

/**
 * Take two strings or names and concatenate (mash together)
 * below are all examples of strings
 *"tom" " tom "  'tom' ' tom '  ' '
 * @param string firstName  The given name to concatenate
 * @param string lastName  The family name to concatenate
 * @return string The full name of the person.
 */
function getFullName(firstName, lastName) {
	return firstName + ' ' + lastName;
}

console.log(getFullName("Trystan", "Gray"));
// it works but theres no space unless you add space in return

