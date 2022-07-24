let btnDial = document.querySelector('.dial');
let dial = document.querySelector('.dial');

document.addEventListener('DOMContentLoaded', function(){
    dial.showModal();
})

btnDial.addEventListener('click', function(){
    dial.close();
    dial.classList.add('none')
})