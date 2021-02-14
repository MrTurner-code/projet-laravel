require('./bootstrap');
import 'bootstrap';

import Aos from 'aos';
Aos.init
let logoutLink = document.getElementById('logoutLink');

logoutLink.addEventListener('click', (event) =>{
    event.preventDefault()
    event.stopPropagation()
    let logoutForm = document.getElementById('logoutForm')
    logoutForm.submit()
});
