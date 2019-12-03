var loginForm = false;

function toggleForm() {
    // change to log in form
    if (!loginForm) {
        document.getElementById("form-title").innerHTML = "Log In";

        // remove password match check fields
        document.getElementById("pass2-label").style.display = "none";
        document.getElementById("pass2-in").required = false;
        document.getElementById("pass2-in").style.display = "none";

        // change buttons
        document.getElementById("user-buttons").getElementsByTagName("button")[0].innerHTML = "Start Learning!";
        document.getElementById("user-buttons").getElementsByTagName("button")[1].innerHTML = "Sign Up";

        document.getElementById("user-form").action = "assets/php/login/login.php";
        loginForm = true;
    } else { // change to register form
        document.getElementById("form-title").innerHTML = "Sign Up";

        // add password match check fields
        document.getElementById("pass2-label").style.display = "block";
        document.getElementById("pass2-in").required = true;
        document.getElementById("pass2-in").style.display = "block";

        // change buttons
        document.getElementById("user-buttons").getElementsByTagName("button")[0].innerHTML = "Create Account";
        document.getElementById("user-buttons").getElementsByTagName("button")[1].innerHTML = "Log In";

        document.getElementById("user-form").action = "assets/php/login/register.php";
        loginForm = false;
    }
}