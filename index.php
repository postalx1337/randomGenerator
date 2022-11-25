<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="form-control mt-5">
                <h3 class="text-center">Random generator</h3>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input v-on:change="validateField()" v-model="from" type="text" class="form-control" placeholder="Value From" aria-label="Value From">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input v-on:change="validateField()" v-model="to" type="text" class="form-control" placeholder="Value To" aria-label="Value To">
                    </div>
                    <div class="col-md-12 mb-3">
                        <input v-on:change="validateField()" v-model="count" type="text" class="form-control" placeholder="Count" aria-label="Count">
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="d-grid gap-1">
                            <button :class="'btn btn-primary'+[valid ? '' : ' disabled']" type="button" v-on:click="getData()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="result" :style="'display:'+[result.length>0 ? 'block' : 'none' + ';']">
                <h4>Result:</h4>
                <span v-for="item in result">{{item}} </span>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="js/axios.js"></script>
    <script src="js/main.js"></script>
</body>
</html>