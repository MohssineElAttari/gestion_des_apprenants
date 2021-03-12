$(document).ready(function() {
    $('.btn').click(function() {
        $('.nav_links').toggleClass("show");
        $('ul li').toggleClass("hide");

    });
});


const form = document.getElementById('form').value
const name = document.getElementById('name').value
const email = document.getElementById('email').value
const errorElement = document.getElementById('error')
const message = document.getElementById('message')

form.addEventListener('submit', (e) => {
    let messages  = []
    if (name.value == '' || name.value == null) {
        messages.push('Name is required')
    }
    if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
    }

})

function verfymail() {
    var email = document.getElementById("email").value;
    var verif = new RegExp("^[a-zA-Z0-9.!#$%&'*+/=?^`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$");
    return verif.test(email);
}