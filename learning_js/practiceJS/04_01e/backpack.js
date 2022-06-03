class Backpack {
    constructor (
        name,
        volume,
        color,
        pocketNum,
        strapLengthL,
        strapLengthR,
        lidOpen,
        dateAcquired
    ) {
        this.name = name;
        this.volume = volume;
        this.color = color;
        this.pocketNum = pocketNum;
        this.strapLength = {
            left: strapLengthL,
            Right: strapLengthR,
        };
        this.lidOpen = this.lidOpen;
        this.dateAcquired = dateAcquired;
    }
    toggleLid(lidStatus) {
        this.lidStatus = lidStatus;
    }
    newstrapLength (lengthLeft, lengthRight) {
        this.newstrapLength.left = lengthLeft;
        this.newstrapLength.Right = lengthRight;
    }
    backpackAge() {
        let now = new Date();
        let acquired = new date (this.dateAcquired);
        let elapsed = now - acquired;//elapsed time in milliseconds
        let daysSinceAcquired = Math.floor(elapsed / (1000 * 3600 * 24));
        return daysSinceAcquired;
    }
}

export default Backpack;