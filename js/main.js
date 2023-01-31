const sideColumn = document.querySelector('.side_column');
const menuBtn = document.querySelector('.menu_button');


menuBtn.addEventListener('click', function() {
    if (sideColumn.classList.contains('active')) {
        sideColumn.classList.remove('active');
    } else {
        sideColumn.classList.add('active');  
    }   
});

const downBtn = document.querySelector('.down_button');
const projects = document.querySelector('#pro')

downBtn.addEventListener('click', function() {
    projects.scrollIntoView();     
});

const text = document.querySelector('.name');
const strText = text.textContent;
const splitText = strText.split('');
text.textContent = '';
const career = document.querySelector('.career');
career.classList.add('brass_bg');


for (let i = 0; i < splitText.length; i++) {
    text.innerHTML += `<span>${splitText[i]}</span>`;
}

let char = 0;
let timer= setInterval(onTick, 150);

function onTick () {
    const span = text.querySelectorAll('span')[char];
    span.classList.add('fade');
    char++;
    if (char === splitText.length) {
        career.classList.remove('brass_bg');
        complete();
        return;
    }
}
function complete() {
    clearInterval(timer);
    timer = null;
}



const firstName = document.getElementById('first_name');
const lastName = document.getElementById('last_name');
const email = document.getElementById('email');
const complexEmailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const subject = document.getElementById('subject');
const message = document.getElementById('message');
const form = document.getElementById('contact_form');
const errorElement = document.getElementById('error'); 

form.addEventListener('submit', (e) => {
    let messages = []
    if (firstName.value === '' || firstName.value === null) {
        messages.push('First name is required')
    }
    if (lastName.value === '' || lastName.value === null) {
        messages.push('Last name is required')
    }
    if (email.value === '' || email.value === null) {
        messages.push('Email adrress is required')
    } else if (!email.value.match(complexEmailRegex)) {
        messages.push('Please enter a valid email address')
    }
    if (message.value == '' || message.value === null) {
        messages.push('Message is required')
    }
    if (messages.length > 0) {
        e.preventDefault()
        errorElement.classList.add('error_box')
        errorElement.innerText = messages.join(', ')   
    } else {
        errorElement.classList.add('success_box') 
        errorElement.textContent = 'The information you provided has been succesfully logged'  
    } 
})
