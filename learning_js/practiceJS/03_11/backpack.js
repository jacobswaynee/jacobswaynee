/**
 * creating class name:
 * 
 * class declaration : class Name {}
 * class expration : const Name = class {}
 */

class backpack {
    constructor(
        //defines parameter:
        name,
        volume,
        color,
        pocketNum,
        strapLengthL,
        strapLengthR,
        lidOpen,

    ){
        this.name = name;
        this.volume = volume;
        this.color = color;
        this.pocketNum = pocketNum;
        this.strapLengtht = {
            left : strapLengthL,
            right : strapLengthR,
        };
        this.lidOpen = lidOpen;
    }
    //add methods like normal function:
    toggleLid(lidStatus) {
        this.lidOpen = lidStatus;
    }

    newStrapLength (lengthLeft, lengthRight) {
        this.newStrapLength.left = lengthLeft;
        this.newStrapLength.right= lengthRight;

    }
}

export default backpack;