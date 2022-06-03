const car = {
    name : "Toyota Hilux",
    volume : 4576,
    color : "white",
    seatNum : 6,
    wheelNum : {
        front : 2,
        back  : 2,
    },
    doorOpen : false,
    toggleDoor : function (doorstatus) {
        this.doorOpen = doorstatus;
    },
    newWheelNUm : function (wheelNumFront, wheelNumBack) {
        this.newWheelNUm.front = wheelNumFront;
        this.newWheelNUm.back = wheelNumBack;
    },
};