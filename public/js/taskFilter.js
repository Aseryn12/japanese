let filter = document.querySelector('.selector')
let tasks = document.querySelectorAll('.oneTask')

function changeSel(){
    console.log(filter.value)
    tasks.forEach(e => {
        if(filter.value === e.dataset.num || filter.value == 0){
            e.classList.remove('closeTask')
        } else{
            e.classList.add('closeTask')
        }
    });
}