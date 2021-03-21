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
$(document).ready(function() {
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

function checkLoginInput() {
    let email = document.getElementById('login-email');
    let pass = document.getElementById('login-password');
    let error = document.getElementById('login-error-messege');

    if (email.value == '') {
        email.focus();
        error.innerHTML = "Please enter email";
        error.display = "block";
        return false;
    } else if (pass.value == '') {
        pass.focus();
        error.innerHTML = "Please enter password";
        error.display = "block";
        return false;
    }

    return true;
}

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