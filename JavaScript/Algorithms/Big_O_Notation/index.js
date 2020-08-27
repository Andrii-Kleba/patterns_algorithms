function addUpTo(n) {
    let total = 0;
    for (let i = 1; i <= n; i++) {
        total += i;
    }

    return total;
}

// let time1 = performance.now();
// addUpTo(10000000);
// let time2 = performance.now();
// console.log(`Time elapsed: ${(time2 - time1) / 1000} seconds `);

/*################################################################*/

function addUpTo1(n) {
    return n * (n + 1) / 2;
}


let time1 = performance.now();
addUpTo1(10000000);
let time2 = performance.now();
console.log(`Time elapsed: ${(time2 - time1) / 1000} seconds `);

