// document.getElementById('edit-btn').addEventListener('click', () => {
//     let fn = document.getElementById('firstname');
//     let ln = document.getElementById('lastname');
//     let phone = document.getElementById('phone');
//     let nation = document.getElementById('nationality');
//     let submitBtn = document.getElementById('edit-submit-btn');
//     if (fn.readOnly) {
//         fn.readOnly = false;
//         ln.readOnly = false;
//         phone.readOnly = false;
//         nation.disabled = false;
//         submitBtn.disabled = false;
//     }
//     document.getElementById('edit-btn').style.display = 'none';
// });


// login - signup form
$(document).ready(() => {
    $(".txtb input").on("focus", function() {
        $(this).addClass("focus");
    })

    $(".txtb input").on("blur", function() {
        if ($(this).val() == "")
            $(this).removeClass("focus");
    })

});

function openForm() {
    document.getElementById("signup-form").style.display = "block";
    document.getElementById("login-form").style.display = "none";
}

function closeForm() {
    document.getElementById("signup-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
}

function checkLoginInput(){
    let email = document.getElementById('login-email');
    let pass = document.getElementById('login-password');
    let error = document.getElementById('login-error-messege');
    if (email.value == ""){
        error.innerHTML = "Please enter email";
        email.focus();
        return false
    }
    else if (pass.value == ""){
        error.innerHTML = "Please enter password";
        pass.focus();
        return false
    }
    return true;
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