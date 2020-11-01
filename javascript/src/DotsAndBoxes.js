// Dots and Boxes is a game typically played by two players. It starts with an empty square grid of equally-spaced dots. Two players take turns adding a single horizontal or vertical line between two unjoined adjacent dots. A player who completes the fourth side of a 1 x 1 box earns one point and takes another turn. The game ends when no more lines can be placed.

// Your task is to return the scores of the two players of a finished game.

// Input
// Your function will receive an array/tuple of integer pairs, each representing a link
// between two dots. Dots are denoted by a sequence of integers that increases left to 
// right and top to bottom, like shown below.

// for a 3 x 3 square

// 0  1  2

// 3  4  5

// 6  7  8
// Output
// Your function should return an array/tuple consisting of two non-negative integers
// representing the scores of both players.

// Test Example

// let moves = [[0,1],[7,8],[1,2],[6,7],[0,3],[8,5],[3,4],[4,1],[4,5],[2,5],[7,4],[3,6]];
// dotsAndBoxes(moves) // should return [3,1]

// Additional Details

// All inputs will be valid
// n x n board size range: 3 <= n <= 12
// Full Test Suite: 10 fixed tests and 100 random tests
// Use Python 3+ for the Python translation
// For JavaScript, module and require are disabled

// https://www.codewars.com/kata/5d81d8571c6411001a40ba66/train/javascript



function dotsAndBoxes(ar){
    player1 = 0;
    player2 = 0;
    played = [];
    

    for(i=0;i<ar.length;i++) {
        if(i%2){
            // prejdi stack ci sa tam nenachadzaju uz [x,y][x,y+1][]
        } else {
            //player1.push(ar[i]);
        }
        console.log(player1);
    }
    // your code goes here. the sleeper must awaken!
}

console.log(dotsAndBoxes([[0,1],[7,8],[1,2],[6,7],[0,3],[5,8],[3,4],[1,4],[4,5],[2,5],[4,7],[3,6]]));
// 3,1