function time() {
    var time = new Date();
    var new_time = new Date(time).toLocaleString(undefined, {
        timeZone: 'America/Chicago'
    });
    document.getElementById('time').innerHTML = new_time;
}

setInterval(() => {
    time();
}, 1000);