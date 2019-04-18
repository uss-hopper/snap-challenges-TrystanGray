/*<!-- Write an algorithm, either in pseudocode or in code, that converts weights to grams. The algorithm should take
two arguments. The first argument will be a number, the second will be an abbreviation for a unit of weight,
either "lbs", "oz", "kg", "g", or "mg". Based on the second argument, convert the number to grams and output it.-->*/


function convertToGrams(weight, units) {
if (units === "lbs"){
return weight * 453.592;
}else if (units === "oz"){
return weight * 28.349
}else if (units === "kg"){
return weight * 1000;
}else if (units === "mg"){
return weight / 1000;
}else if (units === "g") {
return weight;
}}

console.log(convertToGrams(8, "lbs"));
console.log(convertToGrams(8, "oz"));
console.log(convertToGrams(8, "kg"));
console.log(convertToGrams(8, "mg"));
console.log(convertToGrams(8, "g"));


// sum starts at 0 goes up with every factor

function sumFactors(number){
	sum = 0;
	for(i = number; i>0 ; i--){
		if (number % i === 0){
			sum = i + sum;
		}
	}
	return sum;
}

console.log(sumFactors(1));
console.log(sumFactors(16));
console.log(sumFactors(7));
console.log(sumFactors(20));
console.log(sumFactors(69));

