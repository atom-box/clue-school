document.addEventListener('DOMContentLoaded', function () {

    function move(barElement) {
        console.log(new Date());
        if (i == 0) {
            i = 1;
            // todo max number of timers is a bug waiting for Y2K
            // elem.style.backgroundColor = "#456"; 
            var width = 1;
            var minutes = barElement.getAttribute("minutes");
            console.log("MiNuTes are " + minutes);
            var pulse = minutes * 60000 / 100; // pulse is ms per percent-width
            var id = setInterval(frame, pulse);
            console.log(id);
            function frame() {
                if (barElement.isPaused) { return; }
                if (width >= 100) {
                    clearInterval(id);
                    i = 0;
                } else {
                    width++;
                    barElement.style.width = width + "%";
                }
            }
        }
    }

function stopper(el){
    return function(){
        el.isPaused = true;
    }
}
function starter(el){
    return function(){
        el.isPaused = false;
    }
}

    let i = 0;
    console.log("madam i am todo");
    const startButton = document.getElementById("start-timer");
    const pauseButton = document.getElementById("pause-timer");
    const barToGrow = document.getElementById("timer1"); // button always starts here
    barToGrow.isPaused = false;
    startButton.addEventListener("click", starter(barToGrow));
    pauseButton.addEventListener("click", stopper(barToGrow));
    move(barToGrow);
});