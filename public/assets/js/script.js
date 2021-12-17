//* Show unsaved changes alert
// window.addEventListener("beforeunload", event => {
//     event.preventDefault();
//     event.returnValue = "";
// });

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
function countCharacters(object) {
    document.getElementById("characterLength").innerHTML = "(" + object.value.length + ")";
}
