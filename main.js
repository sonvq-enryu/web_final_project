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

function checkchangepwd(e) {
    let error = e.getElementById('errorMessage');
    let inputs = e.querySelectorAll('input');

    if (inputs[1].value == '') {
        error.innerHTML = 'Please enter your new password';
        inputs[1].focus();
        return false;
    }
    
    if (inputs[2].value == '') {
        error.innerHTML = 'Please enter your confirm password';
        inputs[2].focus();
        return false;
    }

    if (inputs[1].value.length < 6 || inputs[1].value.length > 30) {
        error.innerHTML = 'Your password must be between 8 and 30 characters';
        inputs[1].focus();
        return false;
    }

    if (inputs[1].value != inputs[2].value) {
        error.innerHTML = 'Your new password and confirmation password must match';
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

    window.onscroll = function() {
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
                    a.href = "application.php?id=" + element['id'] + "&fileId=" + element['fileId'];
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
                        BUY APP
*********************************************************/

function buy_app(){
    let form = document.querySelector('#confirm-buy .modal-dialog  .modal-content form');
    let error = form.querySelector('div.alert');
    let path = form.querySelector('input[name=path]').value;
    let user_id = form.querySelector('input[name=user-id]').value;
    let app_id = form.querySelector('input[name=application-id]').value;
    let user_email = form.querySelector('input[name=user-email]').value;
    let app_price = form.querySelector('input[name=app-price]').value;
    let app_name = form.querySelector('input[name=app-name]').value;



    let xhr = new XMLHttpRequest();
    xhr.open("POST", "buy_app.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.addEventListener('load', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = xhr.responseText;
            console.log(response);
            response = JSON.parse(response);
            if (response['code'] == 0) {
                window.location.replace(path);
            } else {
                error_edit_form(error, response['error']);
            }
        }
    });
    let params = "user_id=" + encodeURIComponent(user_id) + "&app_id=" + encodeURIComponent(app_id) + "&app_price=" + encodeURIComponent(app_price) + "&user_email=" + encodeURIComponent(user_email) + "&app_name=" + encodeURIComponent(app_name);
    console.log(params);
    xhr.send(params);
}


/* **********************************************************
                        END OF BUY APP
*********************************************************/

/* **********************************************************
                        REVIEW APP
*********************************************************/

function checkReviewInput() {
    let btn = document.querySelector("#review-submit").disabled = false;
}

function restoreDefault() {
    document.querySelector("#review-submit").disabled = true;
    $('#rating input[name=rating]').prop('checked', false);
    document.querySelector("#user-own-review").value = "";
}

/* **********************************************************
                        END REVIEW APP
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
        } else if (name == 'Password' && form.id == 'chg-password') {
            form.style.display = 'block';
        } else if (name == 'Top up' && form.id == 'top-up') {
            form.style.display = 'block';
        } else if (name == 'Create Card' && form.id == 'create-cards') {
            form.style.display = 'block';
        }
        else if (name == 'Upgrade' && form.id == 'upgrade') {
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

function render_profile(firstname, lastname, gender, nationality) {
    let edit_profile = document.querySelector('#edit-profile');

    let fullname = edit_profile.querySelector('.d-flex p');
    // let role = edit_profile.querySelector('.d-flex .badge'); viet ham rieng update role khi update to dev
    let small_texts = edit_profile.querySelectorAll('.d-flex .text-muted small');

    small_texts[0].innerText = nationality;
    small_texts[1].innerText = gender;
    fullname.innerText = firstname + ' ' + lastname;
}

function update_user_info() {
    let form = document.querySelector('#edit-profile form#chg-profile');
    let firstname = form.querySelector('input[name="firstname"]').value;
    let lastname = form.querySelector('input[name="lastname"]').value;
    let phone = form.querySelector('input[name="phone"]').value;

    let gender = form.querySelector('input[name="gender"]').checked;
    let national = form.querySelector('select[name="national"]');
    let gender_text = '';
    let national_text = '';
    if (gender) {
        gender = 0;
        gender_text = 'Male';
    } else {
        gender = 1;
        gender_text = 'Female';
    }
    national_text = national.options[national.selectedIndex].text;
    national = parseInt(national.options[national.selectedIndex].value);

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
                render_profile(firstname, lastname, gender_text, national_text);
            } else {
                error_edit_form(error, 'Some errors have occurred');
            }
        }
    });
    let param = "email=" + encodeURIComponent(email) + "&firstname=" + encodeURIComponent(firstname) + "&lastname=" + encodeURIComponent(lastname) + "&phone=" + encodeURIComponent(phone);
    param += "&national=" + encodeURIComponent(national) + "&gender=" + encodeURIComponent(gender);
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
            } else if (response['code'] == 2) {
                error_edit_form(error, 'Your current password not match');
            } else {
                error_edit_form(error, 'Some errors have occurred');
            }
        }
    });
    let params = "old-password=" + encodeURIComponent(current_password) + '&new-password=' + encodeURIComponent(new_password) + '&email=' + encodeURIComponent(email);
    xhr.send(params);
}


function create_cards() {
    let form = document.querySelector('#create-cards form');
    let number_cards = form.querySelector('input[name="number"]');
    let money = form.querySelector('select[name="value"]');
    let error = form.querySelector('div.alert');

    money_seleted = money.options[money.selectedIndex].value;
    if (number_cards.value == '') {
        error_edit_form(error, 'Please enter number cards you want created');
        return;
    }

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "generate_card.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.addEventListener('load', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = xhr.responseText;
            response = JSON.parse(response);
            if (response['code'] == 0) {
                successful_edit_form(error, "Create successful");
                get_cards();
            } else {
                error_edit_form(error, 'Some errors have occurred. Please try again');
            }
        }
    });
    let params = "number=" + encodeURIComponent(number_cards.value) + "&value=" + encodeURIComponent(money_seleted);
    xhr.send(params);
}

function get_cards() {
    let email = document.querySelector('#usr-email').innerText;
    console.log(email);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "get_all_cards.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.addEventListener('load', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = xhr.responseText;
            response = JSON.parse(response);
            if (response['code'] == 0) {
                console.log(response['data']);
                render_cards(response['data']);
            }
        }
    });
    let params = "email=" + encodeURIComponent(email);
    xhr.send(params);
}

function render_cards(card_array) {
    let card_div = document.querySelector('#create-cards');
    let card_tbody = card_div.querySelector('table tbody');
    empty_tbody(card_tbody);
    for (let i = 0; i < card_array.length; ++i) {
        card_tbody.appendChild(create_row_table(i + 1, card_array[i]));
    }
}

function empty_tbody(tbody) {
    tbody.innerHTML = '';
}

function create_row_table(index, row_text) {
    let tr = document.createElement('tr');
    let idx = document.createElement('th');
    idx.setAttribute('scope', 'row');
    idx.innerText = index;
    tr.appendChild(idx);
    for (let i = 1; i < 4; ++i) {
        let th = document.createElement('td');
        if (i == 1) {
            th.innerText = row_text[i];
        } else if (i == 2) {
            th.innerText = String(row_text[i]) + ' VND';
        } else {
            if (row_text[i] == 1) {
                th.innerText = "Used";
            } else {
                th.innerText = "Unused"
            }
        }
        tr.appendChild(th);
    }
    return tr;
}

function topup_money() {
    let form = document.querySelector('#top-up form');
    let current_money = form.querySelector('#current-money');
    let email = document.querySelector('#usr-email').innerText;
    let serial = form.querySelector('input[name="serial"]');
    let error = form.querySelector('div.alert');
    let topup_tbody = document.querySelector('#top-up table tbody');
    if (serial.value == '') {
        error_edit_form(error, 'Please enter serial number');
        return;
    }
    if (serial.value.length < 15) {
        error_edit_form(error, 'Not enough length, serial number has 15 characters');
        return;
    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "topup_money.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.addEventListener('load', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = xhr.responseText;
            response = JSON.parse(response);
            if (response['code'] == 0) {
                topup_tbody.appendChild(add_new_row(serial.value, response['value']));
                current_money.value = response['data'] + ' VND';
                serial.value = "";
                successful_edit_form(error, "Top up successful");
            } else {
                error_edit_form(error, response['message']);
            }
        }
    });
    let params = "email=" + encodeURIComponent(email) + "&serial=" + encodeURIComponent(serial.value);
    xhr.send(params);
}

function add_new_row(serial, denomination) {
    let idx = document.querySelectorAll('#top-up table tbody tr').length;

    let tr = document.createElement('tr');
    let th = document.createElement('th');
    th.setAttribute('scope', 'row');
    let s = document.createElement('td');
    let d = document.createElement('td');

    th.innerText = idx + 1;
    s.innerText = serial;
    d.innerText = denomination;
    tr.appendChild(th);
    tr.appendChild(s);
    tr.appendChild(d);
    return tr;
}

if (window.location.pathname == '/web_final_project/profile.php') {
    $(document).ready(function (e) {
        $("#upload_img_form").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "upload_image.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
            }).done(function(response) {
                let form = document.querySelector('#edit-profile form#chg-profile');
                let error = form.querySelector('div.alert');
                response = JSON.parse(response);
                console.log(response);
                if (response['code'] == 0) {
                    load_new_img(response['path']);
                    successful_edit_form(error, "Change image successful");
                }
                else {
                    error_edit_form(error, response['message']);
                }
            })
        })
    });
}

function load_new_img(img_path) {
    let img = document.querySelector('#edit-profile img');
    img.src = img_path + '?t=' + new Date().getTime();
}

function upgrade_to_dev() {
    let form = document.querySelector('#upgrade form');
    let email = document.querySelector('#usr-email').innerText;
    let dev_name = form.querySelector('input[name=developer-name]');
    let error = form.querySelector('div.alert');

    if (dev_name.value == '') {
        error_edit_form(error, 'Please enter your developer name');
        return ;
    }

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "upgrade_dev.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.addEventListener('load', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = xhr.responseText;
            response = JSON.parse(response);
            if (response['code'] == 0) {
                window.location.replace('profile.php');
            } else {
                error_edit_form(error, response['message']);
            }
        }
    });
    let params = "email=" + encodeURIComponent(email) + "&dev=" + encodeURIComponent(dev_name.value);
    xhr.send(params);
}

function validate_rcv(e) {
    let email = e.querySelector('input[name=email]');

    if (email.value == '') {
        e.querySelector('p.rcv-alert').innerText = 'Please enter your email';
        return false;
    }
    return true;
}

/* EDIT INFO */
/* EDIT INFO */
function approve_click() {
    confirm("You are about to approve an submission please confirm your choice");
}

function deny_click() {
    confirm("You are about to reject an submission please confirm your choice");
}

