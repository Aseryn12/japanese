let dial = document.querySelectorAll('.dial');
let btnBack = document.querySelectorAll('.back');
let inpFields = document.querySelectorAll('.inpField');

for(let i = 0; i < btnBack.length; i++){
    btnBack[i].addEventListener('click', function(){
        dial[i].close();
    });
}

dial.forEach(e => {
    e.addEventListener('close', function(){
        inpFields.forEach(field => {
            field.style.display = 'flex';
        });
    }); 
});


fun = function(id, table, selector){
    switch(selector){
        case 'del':
            var formAct = document.querySelector('.dialFormDel');
            formAct.action = '/admin/table/' + table + '/' + selector + '/' + id;
            document.querySelector('.insureDel').innerHTML = 'Вы действительно хотите удалить строку №' + id;
            document.querySelector('.mainActionDel').innerHTML = 'удалить';
            inpFields.forEach(field => {
                field.style.display = 'none';
            });
            dial[0].showModal();
            break;
        case 'upd':
            var formAct = document.querySelector('.dialFormOth');
            formAct.action = '/admin/table/' + table + '/' + selector + '/' + id;
            document.querySelector('.insureOth').innerHTML = 'Изменение строки №' + id;
            document.querySelector('.mainActionOth').innerHTML = 'изменить';
            dial[1].showModal();
            break;
        case 'ins':
            var formAct = document.querySelector('.dialFormOth');
            formAct.action = '/admin/table/' + table + '/' + selector; 
            document.querySelector('.insureOth').innerHTML = 'Добовление новой строки'; 
            document.querySelector('.mainActionOth').innerHTML = 'добавить';
            dial[1].showModal();
            break;
        default: 
            console.log('mistakeeeee');
            break;
    }
}
