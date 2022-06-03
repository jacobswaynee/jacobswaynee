/*
create a class for the Backpack object type .
@link https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Classes

*/

import Backpack from "./backpack.js";

const everyPack = new Backpack (
     "Every Backpack",
      30,
      "grey",
      15, 
      26,
      26,
      false
    
    /*
    lidOpen : false,
    toggleLid : function (lidStatus) {
        this.lidOpen = lidStatus;
    },
    newStrapLength : function (lengthLeft, lengthRight) {
        this.newStrapLength.left = lengthLeft;
        this.strapLength.right = lengthRight;
    },
*/
);

console.log ("the backpack object ::" ,Backpack);
console.log("the pocketNum value::" ,Backpack.pocketNum);

//console.log("left before: " , backpack.strapLength.left);

//backpack.newStrapLength(10 , 15);

//console.log("left after: " , backpack.newStrapLength.left);
