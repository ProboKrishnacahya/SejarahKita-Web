//* Enable Bootstrap's Tooltip Everywhere
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

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

//* Quote's Typewriting Effect
var typewriting = document.getElementById('typewriting');
var typewriter = new Typewriter(typewriting, {
    delay: '50',
    loop: !0,
    devMode: !0,
    cursorClassName: 'typeCursor'
});
typewriter.typeString('Bangsa yang besar adalah bangsa yang menghormati jasa pahlawannya.').pauseFor(3000).deleteAll()
    .typeString('Bebek berjalan berbondong-bondong, akan tetapi burung elang terbang sendirian.').pauseFor(3000).deleteAll()
    .typeString('Beri aku 1.000 orang tua, niscaya akan kucabut semeru dari akarnya. Beri aku 10 pemuda niscaya akan kuguncangkan dunia.').pauseFor(3000).deleteAll()
    .typeString('Gantungkan cita-cita mu setinggi langit! Bermimpilah setinggi langit. Jika engkau jatuh, engkau akan jatuh di antara bintang-bintang.').pauseFor(3000).deleteAll()
    .typeString('Barangsiapa ingin mutiara, harus berani terjun di lautan yang dalam.').pauseFor(3000).deleteAll()
    .start();
