$(document).ready(function () {
    //* Enable Bootstrap's Tooltip Everywhere
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    //* Initialize Animate On Scroll
    AOS.init();

    //* TypewriterJS - JS Library (Quote's Typewriting Effect)
    var typewriting = document.getElementById('typewriting');
    var typewriter = new Typewriter(typewriting, {
        delay: '50',
        loop: !0,
        devMode: !0,
        cursorClassName: 'typeCursor'
    });
    typewriter.typeString('"Bangsa yang besar adalah bangsa yang menghormati jasa pahlawannya."').pauseFor(3000).deleteAll()
        .typeString('"Bebek berjalan berbondong-bondong, akan tetapi burung elang terbang sendirian."').pauseFor(3000).deleteAll()
        .typeString('"Beri aku 1.000 orang tua, niscaya akan kucabut semeru dari akarnya. Beri aku 10 pemuda niscaya akan kuguncangkan dunia."').pauseFor(3000).deleteAll()
        .typeString('"Gantungkan cita-cita mu setinggi langit! Bermimpilah setinggi langit. Jika engkau jatuh, engkau akan jatuh di antara bintang-bintang."').pauseFor(3000).deleteAll()
        .typeString('"Barangsiapa ingin mutiara, harus berani terjun di lautan yang dalam."').pauseFor(3000).deleteAll()
        .start();
});
