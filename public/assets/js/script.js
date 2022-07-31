//* Password's & Confirm Password's input Visibility Toggle
//? Show / Hide Password
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', function (e) {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('bi-eye');
});

//? Show / Hide Confirm Password
const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
const confirmationPassword = document.querySelector('#password-confirm');
toggleConfirmPassword.addEventListener('click', function (e) {
    const type = confirmationPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    confirmationPassword.setAttribute('type', type);
    this.classList.toggle('bi-eye');
});

//* <input> & <textarea> Characters Counter
function countCharacters(object, id) {
    document.getElementById(id).innerHTML = "(" + object.value.length + ")";
}

//* Scroll to Top Page's Button
var scrollToTopButton = document.getElementById("scrollButton");

function scrollToTopPage() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
