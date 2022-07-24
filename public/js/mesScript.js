let btnDial = document.querySelector('.inDialSus');
let dialSus = document.querySelector('.dialSus');

document.addEventListener('DOMContentLoaded', function(){
    dialSus.showModal();
})

btnDial.addEventListener('click', function(){
    dialSus.classList.add('noneDialSus');
    dialSus.close();
})