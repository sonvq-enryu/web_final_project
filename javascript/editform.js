$(document).ready(() => {
    $(".txtb input").on("focus", function() {
        $(this).addClass("focus");
    })

    $(".txtb input").on("blur", function() {
        if ($(this).val() == "")
            $(this).removeClass("focus");
    })

})



function checkSignupInput() {
    let firstName = document.getElementById('first-name-sign-up');
    let lastName = document.getElementById('last-name-sign-up');
    let email = document.getElementById('email-sign-up');
    let password = document.getElementById('password-sign-up');
    let confirmPassword = document.getElementById('confirm-password-sign-up');
    let firstName = document.getElementById('irst-name-sign-up');
    let firstName = document.getElementById('irst-name-sign-up');
    let firstName = document.getElementById('irst-name-sign-up');

    return true
}

function clearLoginError() {
    document.getElementById('login-error-messege').innerHTML = "";
}

function checkchangepwd() {
    let currentpwdFilled = document.getElementById('crtpwd');
    let newpwdFilled = document.getElementById('newpwd');
    let confirmpwdFilled = document.getElementById('confirmpwd');
    let error = document.getElementById('errorMessage');

    let currentpwd = currentpwdFilled.value;
    let newpwd = newpwdFilled.value;
    let confirmpwd = confirmpwdFilled.value;

    if (currentpwd === '') {
        error.innerHTML = 'Please enter your current password';
        currentpwdFilled.focus();
        return false;

    }
    // else if (currentpwd != dbpwd) {
    //     error.innerHTML = "Your current password is missing or incorrect; it's required to change the Password."
    //     currentpwdFilled.focus();
    //     return false;
    // } 
    else if (newpwd === '') {
        error.innerHTML = 'Please enter your new password';
        newpwdFilled.focus();
        return false;

    } else if (newpwd.length < 8 || newpwd.length > 30) {
        error.innerHTML = 'Your password must be between 8 and 30 characters  ';
        newpwdFilled.focus();
        return false;

    }
    // else if (currentpwd === newpwd) {
    //     rror.innerHTML = 'your new password must be different';
    //     newpwdFilled.focus();
    //     return false;
    // } 
    else if (confirmpwd === '') {
        error.innerHTML = 'Please confirm your new password';
        confirmpwdFilled.focus();
        return false;

    } else if (newpwd != confirmpwd) {
        error.innerHTML = 'Your new password and confirmation password must match';
        confirmpwdFilled.focus();
        return false;
    }
    return true;
}

function clearError() {
    document.getElementById('errorMessage').innerHTML = "";
}