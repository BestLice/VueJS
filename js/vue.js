var app = new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue!',
      showToDo: true,
      showStuff: false
    },
    methods: {
    //  sum: function(a, b){
    //    var ret = (a, b) => a+b;
    //    return ret(a, b);
    //  }
    sum: (a, b) => a+b,
    csum: a => b => a+b
    }
});