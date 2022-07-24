let dial = document.querySelector('.dialCert');
let btn = document.querySelector('.cert');
let closeBtn = document.querySelectorAll('.close');

btn.addEventListener('click', function(){
    dial.showModal();
});

closeBtn.forEach(e => {
    e.addEventListener('click', function(){
        dial.close();
    }) 
});