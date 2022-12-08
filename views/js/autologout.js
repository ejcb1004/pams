function idleLogout() {
    var t;
    window.onload = resetTimer;
    window.onmousemove = resetTimer;
    window.onmousedown = resetTimer;  // catches touchscreen presses as well
    window.ontouchstart = resetTimer; // catches touchscreen swipes as well
    window.ontouchmove = resetTimer;  // required by some devices
    window.onclick = resetTimer;      // catches touchpad clicks as well
    window.onkeydown = resetTimer;
    window.addEventListener('scroll', resetTimer, true); // improved; see comments

    function autologout() {
        window.location = "logout";
    }

    function resetTimer() {
        clearTimeout(t);
        t = setTimeout(autologout, 300000);  // time is in milliseconds
    }
}
idleLogout();
