var locationInput = document.getElementById("locationInput");
var locations = document.getElementById("locations");
const locationChangeHandler = () => {
    locations.style.visibility = "visible";
}
document.addEventListener('click', function (event) {
    if (event.target !== locationInput && !locations.contains(event.target)) {
        locations.style.visibility = "hidden";
    }
})
const buttonColor = document.querySelectorAll('.tetraButtons a');
buttonColor.forEach(button => {
    button.addEventListener('click', function () {
        for (var i = 0; i < 4; i++) {
            buttonColor[i].classList.remove('active');
        }
        button.classList.add('active');
    });
});