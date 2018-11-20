// let test = require('./modules/test/test.js');
// let getRandom = require('./modules/random')
// test.test();
// console.log(getRandom(0,100));
// const ex = require('./ex.js');

// console.log(ex.getMax([7,786,5,4.2,89]));
// console.log(ex.getMin([7,786,5,4.2,89]));

let arr = [41,22,46,7,0,-2,-3,41,0,-17,-1];

for(let i = 0; i< arr.length;i++) {
   let cur = arr[i];
    for(let o = i+1;o<arr.length;o++) {
        let next = arr[o];
        if (cur == next) {
            console.log(`${cur}|${next}`)
        }
    }
    
}
console.log('//powered by Ryuunosuke');
//powered by Ryuunosuke