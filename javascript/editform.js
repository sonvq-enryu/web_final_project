
document.getElementById('edit-btn').addEventListener('click', () => {
    let fn = document.getElementById('firstname');
    let ln = document.getElementById('lastname');
    let phone = document.getElementById('phone');
    let nation = document.getElementById('nationality');
    let submitBtn = document.getElementById('edit-submit-btn');
    if (fn.readOnly) {
        fn.readOnly = false;
        ln.readOnly = false;
        phone.readOnly = false;
        nation.disabled = false;
        submitBtn.disabled = false;
    }
    document.getElementById('edit-btn').style.display = 'none';
});

