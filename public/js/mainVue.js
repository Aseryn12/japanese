new Vue({
    el: "#app",
    data: {
        btnA: true,
        btnR: true,
    },

    methods: {

    }
});

new Vue({
    el: "#app2",
    data: {
        config: 2,
    },
    methods: {
        show: function (id){
            dialog = document.querySelector('.chosenGliph');
            dialog.showModal();
        },

        close: function (){
            dialog = document.querySelector('.chosenGliph');
            dialog.close();
        },
        madness: function(){
            
        }
    }
});