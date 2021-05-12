// login - signup form
$(document).ready(() => {
    $(".txtb input").on("focus", function () {
        $(this).addClass("focus");
    })

    $(".txtb input").on("blur", function () {
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
    let loginError = document.getElementById('login-error-messege');
    if (email.value == "") {
        loginError.innerHTML = "Please enter email";
        email.focus();
        return false
    } else if (pass.value == "") {
        loginError.innerHTML = "Please enter password";
        pass.focus();
        return false
    }
    return true;
}

function clearLoginError() {
    document.getElementById('login-error-messege').innerHTML = "";
}


function checkSignupInput() {
    let firstName = document.getElementById('first-name-sign-up');
    let lastName = document.getElementById('last-name-sign-up');
    let email = document.getElementById('email-sign-up');
    let password = document.getElementById('password-sign-up');
    let confirmPassword = document.getElementById('confirm-password-sign-up');
    let phoneNumber = document.getElementById('phone-number-sign-up');
    let signUpError = document.getElementById('signup-error-messege');

    if (firstName.value == "") {
        signUpError.innerHTML = "Please enter first name";
        firstName.focus();
        return false;
    } else if (lastName.value == "") {
        signUpError.innerHTML = "Please enter last name";
        lastName.focus();
        return false
    } else if (email.value == "") {
        signUpError.innerHTML = "Please enter email";
        email.focus();
        return false
    } else if (password.value == "") {
        signUpError.innerHTML = "Please enter password";
        password.focus();
        return false
    } else if (confirmPassword.value != password.value) {
        signUpError.innerHTML = "Password doesn't match";
        confirmPassword.focus();
        return false
    } else if (phoneNumber.value == "") {
        signUpError.innerHTML = "Please enter phone number";
        phoneNumber.focus();
        return false
    }

    return true;
}


function clearSignupError() {
    document.getElementById('signup-error-messege').innerHTML = "";
}


// --------------------------------

// phan cua Van

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


function editformBtn(condition) {
    if (condition) {
        scBtnDisplay = 'block';
        eBtnDisplay = 'none';
        readStaus = false;
    } else {
        scBtnDisplay = 'none';
        eBtnDisplay = 'block';
        readStaus = true;
    }
    document.getElementById('user-fn').readOnly = readStaus;
    document.getElementById('user-ln').readOnly = readStaus;
    document.getElementById('user-phone').readOnly = readStaus;
    document.getElementById('nationality').disabled = readStaus;
    document.getElementById('s-info-btn').style.display = scBtnDisplay;
    document.getElementById('c-info-btn').style.display = scBtnDisplay;
    document.getElementById('e-info-btn').style.display = eBtnDisplay;
}

// document.getElementById('edit-form').addEv


/* **********************************************************
                        INDEX  
*********************************************************/

//Phần của Tuấn
// window.onscroll = function() {
//     let navbar = document.getElementById('navbar');
//     let headerHeight = document.getElementById('header').offsetHeight;
//     let sidebar = document.getElementById('sidebar');
//     if (window.pageYOffset >= headerHeight) {
//         navbar.classList.add('sticky-navbar');
//         sidebar.classList.add('sticky-sidebar');
//     } else {
//         navbar.classList.remove('sticky-navbar');
//         sidebar.classList.remove('sticky-sidebar');
//     }
// }

function resize() {
    screenWidth = window.outerWidth;
    screenHeight = window.outerHeight;
}

function reponsiveCategories() {
    let dropdown_bar = document.getElementsByClassName('dropdown-bar');
    let dropdown_menu = document.getElementsByClassName('dropdown-menu')[0];
    let width = 178 * dropdown_bar.length;
    width = width + 5 * dropdown_bar.length + "px";
    dropdown_menu.style.width = width;
}

function displayCreator() {
    let creator = document.querySelector('.creator');
    creator.style.display = 'block';
}


//Phần của Sơn

function ClickUserIcon() {
    document.getElementById("user-dropdown-content").classList.toggle('show');
}

if (window.location.pathname == '/web_final_project/index.php' || window.location.pathname == '/web_final_project/seemore.php') {
    document.querySelector("body.index").addEventListener('click', (e) => {
        console.log(e);
        if (!e.target.matches('img.user-img')) {
            let dropdowns = document.getElementsByClassName("user-dropdown-content");
            for (let i = 0; i < dropdowns.length; i++) {
                let openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    });

    window.onscroll = function () {
        let navbar = document.getElementById('navbar');
        let headerHeight = document.getElementById('header').offsetHeight;
        let sidebar = document.getElementById('sidebar');
        if (window.pageYOffset >= headerHeight) {
            navbar.classList.add('sticky-navbar');
            sidebar.classList.add('sticky-sidebar');
        } else {
            navbar.classList.remove('sticky-navbar');
            sidebar.classList.remove('sticky-sidebar');
        }
    }
}



/* **********************************************************
                        END OF INDEX 
*********************************************************/



// ------------------------------------------------------------



/* **********************************************************
                        SEARCH
*********************************************************/

let suggestions = document.getElementById('suggestions');

function suggest(value) {
    suggestions.innerHTML = '';
    if (value.length < 2) {
        return
    }
    sendRequest(value);
}

function sendRequest(keyword) {
    let param = 'keyword=' + encodeURIComponent(keyword);
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'search.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.addEventListener('load', e => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = xhr.responseText;
            response = JSON.parse(response);
            console.log(response);
            if (response.code === 0) {
                let data = response.data;
                // console.log(data)
                data.forEach(element => {
                    const a = document.createElement('a');
                    a.href = "application.php?id=" + element['id'];
                    a.innerHTML = element['name'];
                    const li = document.createElement('li');
                    li.className = 'list-group-item';
                    li.appendChild(a)
                    // li.innerHTML = element;
                    suggestions.appendChild(li);
                });
            }

        }
    });
    xhr.send(param);
    // console.log(xhr);
}

function search() {
    // document.queryCommandValue('.header-box > input[type=text]')
    let keyword = document.getElementById('search-box').value;
    window.location.replace('seemore.php?keyword=' + encodeURIComponent(keyword));
}



/* **********************************************************
                        END OF SEARCH
*********************************************************/
/* **********************************************************
                        LIMIT FILE UPLOAD SIZE
*********************************************************/
function Filevalidation() {
    const fi = document.getElementById('apk');
    // Check if any file is selected.
    if (fi.files.length > 0) {
        for (const i = 0; i <= fi.files.length - 1; i++) {

            const fsize = fi.files.item(i).size;
            const file = Math.round((fsize / 1024));
            // The size of the file.
            if (file >= 104857600) {
                alert(
                    "File too Big, please select a file less than 4mb");
            } else {
                document.getElementById('size').innerHTML = '<b>' +
                    file + '</b> KB';
            }
        }
    }
}
/* **********************************************************
                        END OF LIMIT FILE UPLOAD SIZE
*********************************************************/
/* **********************************************************
                        LIMIT FILE UPLOAD SIZE
*********************************************************/
function Filevalidation() {
    const fi = document.getElementById('apk');
    // Check if any file is selected.
    if (fi.files.length > 0) {
        for (const i = 0; i <= fi.files.length - 1; i++) {

            const fsize = fi.files.item(i).size;
            const file = Math.round((fsize / 1024));
            // The size of the file.
            if (file >= 104857600) {
                alert(
                    "File too Big, please select a file less than 4mb");
            } else {
                document.getElementById('size').innerHTML = '<b>' +
                    file + '</b> KB';
            }
        }
    }
}
/* **********************************************************
                        END OF LIMIT FILE UPLOAD SIZE
*********************************************************/


/* EDIT INFO */
function profile_show(e) {
    color_block(e);
    let name = e.innerText;
    let forms = document.querySelectorAll('.container > .row > .col-9 > div');
    for (let form of forms) {
        if (name == 'Profile' && form.id == 'edit-profile') {
            form.style.display = 'block';
        }
        else if (name == 'Password' && form.id == 'chg-password') {
            form.style.display = 'block';
        }
        else if (name == 'Top up' && form.id == 'top-up') {
            form.style.display = 'block';
        }
        else if (name == 'Create Card' && form.id == 'create-cards') {
            form.style.display = 'block';
        }
        else {
            form.style.display = 'none';
        }
    }
    clear_alert();
}

function color_block(e) {
    let selected_li = e.parentNode;
    let lis = document.querySelectorAll(".side > ul > li");
    for (let li of lis) {
        li.classList.remove('li-selected');
    }
    selected_li.classList.add('li-selected')
}

function render_profile(firstname, lastname, nationality, gender) {
    let edit_profile = document.querySelector('#edit-profile');

    let fullname = edit_profile.querySelector('.d-flex p');
    // let role = edit_profile.querySelector('.d-flex .badge'); viet ham rieng update role khi update to dev
    let small_texts = edit_profile.querySelectorAll('.d-flex .text-muted small');
    // small_texts[0].innerText = gender;
    // small_texts[1].innerText = nationality;
    fullname.innerText = firstname + ' ' + lastname;
}

function update_user_info() {
    let form = document.querySelector('#edit-profile form');
    let firstname = form.querySelector('input[name="firstname"]').value;
    let lastname = form.querySelector('input[name="lastname"]').value;
    let phone = form.querySelector('input[name="phone"]').value;
    let error = form.querySelector('div.alert');
    let email = document.querySelector('#usr-email').innerText;
    if (firstname == "") {
        error_edit_form(error, 'Please enter your firstname');
        return false;
    }
    if (lastname == "") {
        error_edit_form(error, 'Please enter your lastname');
        return false;
    }
    if (phone == "") {
        error_edit_form(error, 'Please enter your phone number');
        return false;
    }
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "update_info.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.addEventListener('load', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = xhr.responseText;
            response = JSON.parse(response);
            if (response['code'] == 0) {
                successful_edit_form(error, "Update profile successful");
                render_profile(firstname, lastname, false, false);
            }
            else {
                error_edit_form(error, 'Some errors have occurred');
            }
        }
    });
    let param = "email=" + encodeURIComponent(email) + "&firstname=" + encodeURIComponent(firstname) + "&lastname=" + encodeURIComponent(lastname) + "&phone=" + encodeURIComponent(phone); 
    xhr.send(param);
}

function error_edit_form(e, text) {
    e.classList.remove('d-none');
    e.classList.remove('alert-success');
    e.classList.add('alert-danger');
    e.innerText = text;
}

function successful_edit_form(e, text) {
    e.classList.remove('d-none');
    e.classList.remove('alert-danger');
    e.classList.add('alert-success');
    e.innerText = text;
}

function clear_alert() {
    let alerts = document.querySelectorAll(".alert");
    for (let alert of alerts) {
        alert.classList.add('d-none');
    }
}

function change_password() {
    let form = document.querySelector('#chg-password form');
    let current_password = form.querySelector('#current-password').value;
    let new_password = form.querySelector('#new-password').value;
    let confirm_password = form.querySelector("#confirm-password").value;
    let error = form.querySelector('div.alert');
    let email = document.querySelector('#usr-email').innerText;
    if (current_password == '') {
        error_edit_form(error, 'Please enter your current password');
        return false;
    }
    if (new_password == '') {
        error_edit_form(error, 'Please enter your new password');
        return false;
    }

    if (confirm_password == '') {
        error_edit_form(error, 'Please enter confirm password');
        return false;
    }

    if (current_password == new_password) {
        error_edit_form(error, 'New password must different from current password');
        return false;
    }
    if (new_password != confirm_password) {
        error_edit_form(error, 'New password must matching confirm password');
        return false;
    }
    if (new_password.length < 6 || new_password.length > 30) {
        error_edit_form(error, 'Your password must be between 8 and 30 characters');
        return false;
    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "change_password.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.addEventListener('load', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = xhr.responseText;
            response = JSON.parse(response);
            if (response['code'] == 0) {
                form.querySelector('#current-password').value = '';
                form.querySelector('#new-password').value = '';
                form.querySelector('#confirm-password').value = '';
                successful_edit_form(error, "Change password successful");
            }
            else if (response['code'] == 2) {
                error_edit_form(error, 'Your current password not match');
            }
            else {
                error_edit_form(error, 'Some errors have occurred');
            }
        }
    });
    let params = "old-password=" + encodeURIComponent(current_password) + '&new-password=' + encodeURIComponent(new_password) + '&email=' + encodeURIComponent(email);
    xhr.send(params);
}

// function load_user_profile() {
//     let email = document.querySelector('#usr-email').innerText;
//     let xhr = new XMLHttpRequest();
//     console.log('co chay');
//     xhr.addEventListener('load', () => {
//         if (xhr.readyState === 4 && xhr.status === 200) {
//             let response = xhr.responseText;
//             response = JSON.parse(response);
//             if (response['code'] == 0) {
//                 render_profile(response['data']);
//             }
//         }
//     });
//     xhr.open('GET', 'get_user_profile.php?email=' + encodeURIComponent(email), true);
//     xhr.send();
// }


/* EDIT INFO */