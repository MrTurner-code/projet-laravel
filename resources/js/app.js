require('./bootstrap');
import 'bootstrap';
let logoutLink = document.getElementById('logoutLink');

logoutLink.addEventListener('click', (event) =>{
    event.preventDefault()
    event.stopPropagation()
    let logoutForm = document.getElementById('logoutForm')
    logoutForm.submit()
});
