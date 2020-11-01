
// You are given a list of unique integers arr, and two integers a and b. 
// Your task is to find out whether or not a and b appear consecutively in arr,
// and return a boolean value (True if a and b are consecutive, False otherwise).

// It is guaranteed that a and b are both present in arr.

// https://www.codewars.com/kata/5f6d533e1475f30001e47514/train/javascript

function consecutive(arr, a, b) {
  // a = Math.abs(a);
  // b = Math.abs(b);

  for (i = 0; i < arr.length; i++) {
    prev = i-1;
    next = i+1;

    if (arr[i] === a && arr[next] === b) {
      return true;
    }

    if (arr[i] === a && arr[prev] === b) {
      return true;
    }
  }
  return false;
}

function consecutive_with_index(arr, a, b) {
  const idxA = arr.indexOf(a);
  const idxB = arr.indexOf(b);
  
  return Math.abs(idxA - idxB) === 1;
}

console.log(consecutive([1, 3, 5, 7], 3, 1) + "true");
console.log(consecutive([1, 6, 9, -3, 4, -78, 0], -3, 4) + "true");
console.log(consecutive([1, 3, 5, 7], 3, 7) + "false");

console.log(consecutive_with_index([1, 6, 9, -3, 4, -78, 0], -3, 4) + "true");
console.log(consecutive_with_index([1, 3, 5, 7], 3, 1) + "true");
console.log(consecutive_with_index([1, 3, 5, 7], 3, 7) + "false");
