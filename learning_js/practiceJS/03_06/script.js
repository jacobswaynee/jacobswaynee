/*
create a backpack Object.
*/

const backpack = {
    name : "Every Backpack",
    volume : 30,
    color : "grey",
    pocketNum : 15, 
    strapLength  : {
        left : 26,
        right : 26,
    },
    lidOpen : false,
    toggleLid : function (lidStatus) {
        this.lidOpen = lidStatus;
    },
    newStrapLength : function (lengthLeft, lengthRight) {
        this.newStrapLength.left = lengthLeft;
        this.strapLength.right = lengthRight;
    },

};

console.log ("the backpack object ::" ,backpack);
console.log("the pocketNum value::" ,backpack.pocketNum);
console.log("strap length::" , backpack.strapLength.left)


console.log("the pocketNum ::" , backpack["pocketNum"])

var query = "pocketNum";

console.log("the pocketNum ::" , backpack[query]);