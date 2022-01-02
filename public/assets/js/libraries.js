$(document).ready(function () {
    //* Enable Bootstrap's Tooltip Everywhere
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    //* Initialize Animate On Scroll
    AOS.init();

    //* TypewriterJS (Quote's Typewriting Effect)
    var typewriting = document.getElementById('typewriting');
    var typewriter = new Typewriter(typewriting, {
        delay: 50,
        loop: !0,
        devMode: !0,
        cursorClassName: 'typeCursor'
    });
    typewriter.typeString('"Bangsa yang besar adalah bangsa yang menghormati jasa pahlawannya."<br>-Dr. (H.C.) Ir. H. Soekarno').pauseFor(3000).deleteAll(30)
        .typeString('"Tak ada harta pusaka yang sama berharganya dengan kejujuran."<br>-Dr. (H.C.) Drs. H. Mohammad Hatta').pauseFor(3000).deleteAll(30)
        .typeString('"Terkadang, kesulitan harus kamu rasakan terlebih dulu sebelum kebahagiaan yang sempurna datang kepadamu."<br>-Raden Adjeng Kartini').pauseFor(3000).deleteAll(30)
        .typeString('"Kegagalan hanya terjadi bila kita menyerah."<br>-Prof. Dr. Ing. H. Bacharuddin Jusuf Habibie, FREng').pauseFor(3000).deleteAll(30)
        .typeString('"Jika kalian ingin menjadi pemimpin besar, menulislah seperti wartawan dan bicaralah seperti orator."<br>-Raden Hadji Oemar Said Tjokroaminoto').pauseFor(3000).deleteAll(30)
        .start();
});
