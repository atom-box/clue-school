// document.addEventListener('DOMContentLoaded', function() {
//     // var userRating = document.querySelector('.js-user-rating');
//     // var isAuthenticated = userRating.dataset.isAuthenticated;
    
    
    var i = 0;
    function move() {
        if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            var width = 1;
            var minutes = 2;
            var pulse = minutes * 60000 / 100; // pulse is ms per percent-width
            var id = setInterval(frame, pulse);
            console.log(id);
            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                    i = 0;
                } else {
                    width++;
                    elem.style.width = width + "%";
                }
            }
        }
    }
// });