
// function validate() {
//     event.preventDefault();
//     var name = document.getElementById('name').value;
//     var email = document.getElementById('email').value;
//     var subject = document.getElementById('subject').value;
//     var message = document.getElementById('message').value;
//     var error = document.getElementById('error');
//     var success = document.getElementById('success');
//     if (name == '') {
//         error.innerHTML = "Name cannot be empty!";
//         success.style.display = "none";
//         error.style.display = "unset";
//         return false;
//     }
//     if (email == '') {
//         error.innerHTML = "Email cannot be empty!";
//         success.style.display = "none";
//         error.style.display = "unset";
//         return false;
//     }
//     if (subject == '') {
//         error.innerHTML = "Subject cannot be empty!";
//         success.style.display = "none";
//         error.style.display = "unset";
//         return false;
//     }
//     if (message == '') {
//         error.innerHTML = "Message cannot be empty!";
//         success.style.display = "none";
//         error.style.display = "unset";
//         return false;
//     }
//     document.getElementById('contact').reset();
//     success.innerHTML = "Your Information Submitted Successfully!";
//     error.style.display = "none";
//     success.style.display = "unset";

// }

// function time() {
//     var time = new Date();
//     var new_time = new Date(time).toLocaleString(undefined, {
//         timeZone: 'America/Los_Angeles'
//     });
//     document.getElementById('time').innerHTML = new_time;
// }

// time();
