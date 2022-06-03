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
