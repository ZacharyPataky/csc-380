// Hamburger-Button Shenanigans
const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navBarLinks = document.getElementsByClassName("nav-bar-links")[0];

toggleButton.addEventListener("click", () => {
    navBarLinks.classList.toggle("active");
});

// toggleButton.addEventListener("touchstart", () => {
//     navBarLinks.classList.toggle("active");
// });

// Old checker function - Redundant as I have HTML form validation
/*
export function checker() {
    let name = document.forms["contact"]["name"].value;
    let email = document.forms["contact"]["email"].value;
    let msg = document.forms["contact"]["msg"].value;

    // NAME
    if (name == "") {
        alert("NAME must be filled out.");
        return false;
    }
    if (/\d/.test(name)) {
        alert("NAME cannot contain numbers");
        return false;
    }

    // EMAIL
    if (email == "") {
        alert("EMAIL must be filled out.");
        return false;
    }
    if (!(/\w+@\w+\.\w+/.test(email))) {
        alert("EMAIL must contain [XXX@XXX.XXX].");
        return false;
    }
    
    // MESSAGE
    if (msg == "") {
        alert("MESSAGE must be filled out.");
        return false;
    }
    if (msg.length < 8) {
        alert("MESSAGE must be longer than eight characters.")
        return false;
    }

    return true;
}
*/