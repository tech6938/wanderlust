let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");

menuicn.addEventListener("click", () => {
    nav.classList.toggle("navclose");
});

function toggleDropdown() {
    var dropdown = document.getElementById("myDropdown");
    dropdown.style.display =
        dropdown.style.display === "block" ? "none" : "block";
}

$(document).ready(function () {
    // Initialize DataTable
    $("#reportTable").DataTable();
});
