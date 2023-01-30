// const sideColumn = $('.side_column');
// const menuBtn = $('.menu_button');


// menuBtn.on('click', function() {
//     if (sideColumn.hide()) {
//         sideColumn.show();
//     } else {
//         sideColumn.hide();  
//     }   
// });

const text = document.querySelector('.name');
const strText = text.textContent;
const splitText = strText.split('');
text.textContent = '';
for (let i = 0; i < splitText.length; i++) {
    text.innerHTML += `<span>${splitText[i]}</span>`;
}

let char = 0;
let timer= setInterval(onTick, 200);

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
// const formBtn = $('.form_button');

// formBtn.on('click', function() {
//     if ($('#first_name').val() === '') {
//         $('#first_name').css('border', '3px solid red');
//         console.log('nope');
//     }
//     if ($('#last_name').val() === '') {
//         $('#last_name').css('border', '3px solid red');
//         console.log('nope');
//     }
//     if ($('#email').val() === '') {
//         $('#email').css('border', '3px solid red');
//         console.log('nope');
//     }
//     if ($('#subject').val() === '') {
//         $('#subject').css('border', '3px solid red');
//         console.log('nope');
//     } else if {

//     } 
//     if ($('#message').val() === '') {
//         $('#message').css('border', '3px solid red');
//         console.log('nope'); 
//     }
// });
