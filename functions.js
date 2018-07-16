// Mathematical function, I guess two technically.¥
function currency(num) {
	let roundedAmount = Math.round(num * 100) / 100;
	return roundedAmount;
}

function feelRich(amount) {
	// Converts USD to Zimbabwean dollars
	let zimbabwe = `Z$${currency(amount * 30000)} Zimbabwean Dollars,`;
	// Converts USD to Japanese yen
	let yen = `¥${currency(amount * 112.8)} Japanese Yen,`;
	// Converts USD to Armenian Dram
	let armenianDram = `and ֏${currency(amount * 480.10)} Armenian Dram! Yowza!`;
	return `You have: ${zimbabwe} ${yen} ${armenianDram} Of course, this means nothing.`;
}

//Example inputs
console.log(feelRich(100));
console.log(feelRich(2540.63));
console.log(feelRich(34763.99));

