let counts = setInterval(updated, 40);
let upto = 0;
let width = o;
function updated(){
    const counts = document.getElementById("counter");
    const hr = document.getElementById("hr");
    ++upto;
    counts.innerHTML = "LOADING" + upto + "";
    hr.style.width + upto + "";
    if (upto === 100) {
        clearInterval(counts);
        count.innerHTML = "DONE!";
    }
}