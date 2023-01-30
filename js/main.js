const sideColumn = document.querySelector('.side_column');
const menuBtn = document.querySelector('.menu_button');


menuBtn.addEventListener('click', function() {
    if (sideColumn.classList.contains('active')) {
        sideColumn.classList.remove('active')
    } else {
        sideColumn.classList.add('active');  
    }   
});

const text = document.querySelector('.name');
const strText = text.textContent;
const splitText = strText.split('');
text.textContent = '';
for (let i = 0; i < splitText.length; i++) {
    text.innerHTML += `<span>${splitText[i]}</span>`;
}

let char = 0;
let timer= setInterval(onTick, 100);

function onTick() {
    const span = text.querySelectorAll('span')[char];
    span.classList.add('fade');
    char++;
    if (char === splitText.length) {
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
const subject = document.getElementById('subject');
const message = document.getElementById('message');
const form = document.getElementById('contact_form');

// form.addEventListener('submit', (e) => {
//     e.preventDefault()
// });
