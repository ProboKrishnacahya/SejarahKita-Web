var url = "/playing-game"; // Redirect ke URL Tujuan
var second = 3; // Timer dalam detik

function countDown() {
    if (second > 0) {
        second--;
        var timer = second + 1;
        $('#start').html(timer);
        setTimeout("countDown()", 1000);
    } else {
        window.location.href = url;
    }
}

countDown();
