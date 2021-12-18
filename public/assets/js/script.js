//* Show unsaved changes alert
// window.addEventListener("beforeunload", event => {
//     event.preventDefault();
//     event.returnValue = "";
// });
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', function (e) {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('bi-eye');
});

const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
const confirmationPassword = document.querySelector('#password-confirm');
toggleConfirmPassword.addEventListener('click', function (e) {
    const type = confirmationPassword.getAttribute('type') === 'password-confirm' ? 'text' : 'password-confirm';
    confirmationPassword.setAttribute('type', type);
    this.classList.toggle('bi-eye');
});

//* Scroll to Top Page's Button
var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
var rootElement = document.documentElement;

function handleScroll() {
    var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
    if (rootElement.scrollTop / scrollTotal > 0.5) {
        // Tampilkan Button jika scroll halaman > 50%
        scrollToTopBtn.classList.add("showBtn");
    } else {
        // Sembunyikan Button
        scrollToTopBtn.classList.remove("showBtn");
    }
}

function scrollToTop() {
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

scrollToTopBtn.addEventListener("click", scrollToTop);
document.addEventListener("scroll", handleScroll);

//* <input> & <textarea> Characters Counter
function countCharacters(object, id) {
    document.getElementById(id).innerHTML = "(" + object.value.length + ")";
}
