const searchBar = document.querySelector(`.search-bar`);
const suggestions = document.querySelector(`.suggested-books`);
const userIcon = document.querySelector(`.userImg`);
const logoutOption = document.querySelector(`.logoutOptions`);

const availability = document.querySelector(`.availability`);


function suggestToggler() {
    suggestions.classList.remove("innactive");
} 

function suggestAntiToggler() {
    suggestions.classList.add("innactive");
}

function logoutOptionToggler() {
    logoutOption.classList.toggle("innactive");
}

function consoler() {
    console.log(`gg`)
}

const colorChange = () => {
    let innerStuff = availability.innerHTML;
    if (innerStuff === "Available"){
        availability.style.color = "#2DB533"
        availability.style.border = "#2DB533 1px solid"
    } else if (innerStuff === "Unavailable") {
        availability.style.color = "red"
        availability.style.border = "red 1px solid"
    }
}

colorChange();