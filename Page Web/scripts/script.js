$(document).ready(function() {
    $('.btn').click(function() {
        $('.nav_links').toggleClass("show");
        $('ul li').toggleClass("hide");

    });
});

// var add = document.querySelector(".add");
// var close = document.querySelector(".close");
// close.addEventListener("click", () => {

//     close.parentElement.parentElement.parentElement.classList.toggle("hidden");
// })
// add.addEventListener("click", () => {

//         close.parentElement.parentElement.parentElement.classList.toggle("hidden");
//     }) ===
//     === =

//     //

//     window.onload = function() { $("#showPassword").hide(); }

// $("#txtPassword").on('change', function() {
//     if ($("#txtPassword").val()) {
//         $("#showPassword").show();
//     } else {
//         $("#showPassword").hide();
//     }
// });

// $(".reveal").on('click', function() {
//     var $pwd = $("#txtPassword");
//     if ($pwd.attr('type') === 'password') {
//         $pwd.attr('type', 'text');
//     } else {
//         $pwd.attr('type', 'password');
//     }
// });

// // 


// const form = document.getElementById('form').value
// const name = document.getElementById('name').value
// const errorElement = document.getElementById('error')
// const message = document.getElementById('message')

// form.addEventListener('submit', (e) => {
//     let messages = []
//     if (name.value == '' || name.value == null) {
//         messages.push('Name is required')
//     }

// })

// function verfymail() {
//     var email = document.getElementById("email").value;
//     var verif = new RegExp("^[a-zA-Z0-9.!#$%&'*+/=?^`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$");
//     return verif.test(email);
// }

//dashbord script

var add = document.querySelector(".add");
var close = document.querySelector(".close");
close.addEventListener("click", () => {

    close.parentElement.parentElement.parentElement.classList.toggle("hidden");
})
add.addEventListener("click", () => {

    close.parentElement.parentElement.parentElement.classList.toggle("hidden");
})