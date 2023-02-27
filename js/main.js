const sideColumn = document.querySelector('.side_column');
const cover = document.querySelector('.cover');
const mainColumn = document.querySelector('.main_column');
const menuBtn = document.querySelector('.menu_button');
let oldYPos = window.scrollY;

function menuToggle() {
    if (sideColumn.classList.contains('active')) {
        sideColumn.classList.remove('active');
        cover.removeAttribute('style');
        mainColumn.removeAttribute('style');
        
    } else {
        sideColumn.classList.add('active');  
        mainColumn.style.height = '100vh';
        mainColumn.style.overflow = 'auto';
        cover.style.display = 'block';
        $('.cover').scrollTop(oldYPos); 
    }   
}

menuBtn.addEventListener('click', menuToggle);

cover.addEventListener('click', menuToggle);
    

const downBtn = document.querySelector('.down_button');
const projects = document.querySelector('#projects')

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
        messages.push('Email address is required')
    } else if (!email.value.match(complexEmailRegex)) {
        messages.push('Please enter a valid email address')
    }
    if (subject.value == '' || message.value === null) {
        messages.push('Subject is required')
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
});

const projectsLink = document.querySelector('.projects_link');
const contactLink = document.querySelector('.contact_link');

projectsLink.addEventListener('click', menuToggle);
contactLink.addEventListener('click', menuToggle);


