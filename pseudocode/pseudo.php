--In pseudocode, write a function that takes a string and returns it with all vowels (not including y) removed.

function removeVowels (string myString) {
let filteredString = '';
const vowels = ['a', 'e', 'i', 'o', 'u'];

// Iterate through the string.  This can be accomplished through
// library functions in most languages, or by converting the
// string to an array.
foreach (letter in myString) {

// If the current letter is not in the vowels array, add it
// to our return string.
if (vowels.includes(letter)) {
filteredString = filteredString + letter;
}
}
return filteredString;
}


--In pseudocode, write a function that takes an array of numbers and returns the greatest number in the array.

function findGreatestNumber(array myNumbers) {

// Set our number to be returned to an initial nonvalid value.
let greatestNumber = 'NaN';

// Iterate through the array and compare each number against the
// previously known greatest number.
foreach (myNumber in myNumbers) {
if (greatestNumber == 'NaN' || myNumber > greatestNumber) {
greatestNumber = myNumber;
}
}

return greatestNumber;
}


--In pseudocode, write a function that computes the first 100 numbers in the Fibonacci sequence.
The Fibonacci sequence is created by adding the two previous numbers in the sequence together, and starts 1, 1, 2, 3, 5, 8...

function fibonacciHundred () {
let fibonacciArray = [1, 1];
let previousNumber = 1;
let thisNumber = 1;

// We start this counter at three because we already have the
// first two numbers in the sequence.
for (i=3, i<=100; i++) {

// Add together the previous numbers and store them in the
// array.
nextNumber = previousNumber + thisNumber;
fibonacciArray[] = nextNumber;

// Reset our numbers to the last two known numbers.
previousNumber = thisNumber;
thisNumber = nextNumber;
}
}

--In pseudocode, write a function that takes an array of numbers, and returns another array that counts the number of
times each number appears in the array.

function countNumbers (numbersArray) {
countsArray = [];
foreach (numbersArray as element) {
countsArray[element] = countsArray[element] = 1;
}
return countsArray;
}


--In pseudocode, write a function that takes two integers. For each integer in between those two numbers (inclusive),
output 'fizz' if the number is even, 'buzz' if the number is divisible by 3, and 'baz' without 'fizz' or
'buzz' if the number is divisible by both.

function fizzbuzz (number1, number2) {
var lesserNumber;
var greaterNumber;
if (number1 < number2) {
greaterNumber = number2;
lesserNumber = number1;
} else {
greaterNumber = number1;
lesserNumber = number2;
}

for (i=lesserNumber, i <= greater number, i++) {
if (i % 2 == 0 && i % 3 == 0 ) {
output baz;
} else {
if (i % 2 == 0) {
output fizz;
}
if (i % 3 == 0) {
output buzz;
}
}
}
}

--remove the company index from each object.


// Assign our given arry to a variable
var people = [{"id":1,"name":"Leanne ...]
// Iterate over each of the people in the array and remove the index.
people.forEach(function(person) {
delete person.company;
});

// Expected output: Our array without the company index.
console.log(people);


--Write an algorithm, either in pseudocode or in code, that converts weights to grams. The algorithm should take two arguments.
The first argument will be a number, the second will be an abbreviation for a unit of weight,
either "lbs", "oz", "kg", "g", or "mg". Based on the second argument, convert the number to grams and output it.

function convertToGrams(weight, units) {
if (units === 'lb') {
return weight * 453.592;
} else if (units === 'oz') {
return weight * 28.35;
} else if (units === 'kg') {
return weight * 1000;
} else if (units === 'mg') {
return weight / 1000;
} else {
return weight;
}
}

--given temp in F convert to C

Given tempFahrenheit:
Set intermediaryVariable to tempFahrenheit - 32;
Set tempCelsius to intermediaryVariable * 5 / 9;
return tempCelsius;

--Take two numbers as arguments and return a new value after a mathematical operation (addition, subtraction,
multiplication, etc.) Which operation is your choice.

function addNumbers(number1, number2) {
return number1 + number2;
}


--Take two strings as arguments and return a value that has them concatenated.

function combineStrings(string1, string2) {
total = string1 + string2;
return total;
}

// Sample addition call.
sum = addNumbers(2, 3);
console.log(sum);

// Sample concatenation call.
concatenatedString = combineStrings('Hello ', 'world!');
console.log(concatenatedString);
