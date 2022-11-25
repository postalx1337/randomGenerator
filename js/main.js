var app = new Vue({
    el: '#app',
    data: {
        from: 0,
        to: 0,
        count: 0,
        result: '',
        valid: false,
    },
    methods:{
        validateField(){
            if(Number(this.from) > Number(this.to) || Number(this.from) == Number(this.to) || Number(this.count) > 30 || Number(this.count) <= 0){
                this.valid = false;
            }else{
                this.valid = true;
            }
        },
        getData(){
            axios
            .get('http://vue-app/core/api/getRandom.php?from='+this.from+'&to='+this.to+'&count='+this.count)
            .then(response => (this.result = response.data));
        }
    }
})