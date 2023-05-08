

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<body>
    <div id="app">
    <div class="container">
            <h1 class="my-4 text-center">Lista Dischi</h1>
            <div class="row justify-content-center">
                <div class="col-7">
                    <ul class="list-group">
                        <li v-for="(disco,index) in dischi" :key="index" class="list-group-item">{{ disco.title }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- v-for="(disco,index) in dischi" :key="index" class="list-group-item">{{ disco.title }} -->
    </div>

    <script src="js/script.js"></script>
</body>
</html>