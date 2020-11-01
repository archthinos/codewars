// You will be given an equation as a string and you will need to solve for X and return x's value. For example:

// solveForX('x - 5 = 20'); // Should return 25
// solveForX('20 = 5 * x - 5'); // Should return 5
// solveForX('5 * x = x + 8'); // Should return 2
// solveForX('(5 - 3) * x = x + 2'); // Should return 2
// NOTES:

// All numbers will be whole numbers
// Don't forget about the order of operations.
// If the random tests don't pass the first time, just run them again.

// https://www.codewars.com/kata/59c2e2a36bddd2707e000079/train/javascript

function solveForX(equation) {
    leftEquation = equation.slice(0,equation.search("="));
    rightEquation = equation.slice(equation.search("=")+1,equation.length);

    for(i=1;i < 1000;i++){
        if(leftEquation.includes("x")) {
            left = leftEquation.replace(/x/gi, i);
        } else {
            right = leftEquation;
        };

        if(rightEquation.includes("x")) {
            right = rightEquation.replace("x", i);
        } else {
            right = rightEquation;
        };

        if(eval(left) == eval(right)){
            return i;
        }

    }

}

console.log(solveForX('(5 - 3) * x = x + 2'));
