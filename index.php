<?php 
    include __DIR__ . '/server/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title></title>
</head>
<body>
    <div id="app">

        <header>
            <div id="logo-header">
                <img src="./img/spotify-logo.png" alt="spotify logo">
            </div>
        </header>

        <main class="py-5">
            <div class="container p-1">
                <div class="row">
                    <div class="col item-album" v-for=" element in dischi">
                        <img :src="element.poster" class="img-fluid p-3" :alt="element.author">
                        <div class="text-album text-center">
                            <h5 class="text-white">{{element.title}}</h5>
                            <p class="text-secondary">{{element.author}}</p>
                            <p class="text-secondary">{{element.year}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>