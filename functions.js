// Mathematical function, I guess two technically.
function currency(num) {
	// Sets the amount to 2 decimal places to make it currency like.
	return num.toFixed(2);
}

function feelRich(amount) {

	let zimbabwe = `Z$${currency(amount * 30000)} Zimbabwean Dollars,`;
	let yen = `¥${currency(amount * 112.8)} Japanese Yen,`;
	let armenianDram = `and ֏${currency(amount * 480.10)} Armenian Dram! Yowza!`;

	return `You have: ${zimbabwe} ${yen} ${armenianDram} Those are big numbers! Of course, they mean nothing.`;
}

// Example inputs
console.log(feelRich(100));
console.log(feelRich(2540.63));
console.log(feelRich(34763.99));

// String function
function noVowels(string) {
	// Converts the input string to lowercase, then uses a regular expression to replace all vowels with an empty string
	return string.toLowerCase().replace(/[aeiou]/g, '');
}
// String example
console.log(noVowels("The English language would be quite a bit more difficult to read without vowels.  It would " +
	"sound kind of funny though."));

// Array function
let catNames = ["Jeff", "Captain FuzzyPants","Squishy Biscuits", "Carl", "Peanut", "Garfield", "Mister Whiskers"];

function alphabetical(arr) {
	return arr.sort();
}

console.log(alphabetical(catNames));

