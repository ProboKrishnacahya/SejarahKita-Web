var url = "/profile";// Redirect ke URL Tujuan
var timer = 3; // Timer dalam detik

function countDown() {
    if (timer > 0) {
        timer--;
        var waktu = timer + 1;
        $('#start').html('<b>Halaman Ini Akan Otomatis Di Redirect KE </b> ' + url + ' dalam ' + waktu + ' detik.');
        setTimeout("countDown()", 1000);
    } else {
        window.location.href = url;
    }
}
countDown();
