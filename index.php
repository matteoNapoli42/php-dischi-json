<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Dischi-JSON</title>
</head>

<body>
    <section id="app">
        <header>
            <img id="logo" src="assets/img/spotify-logo-transparent-spotify-logo-images-25.png" alt="">
        </header>
        <main>
            <div class="container">
                <div class="row d-flex ">
                    <div class="card" v-for="album in musicAlbums">
                        <div class="albumCover">
                            <img :src="album.poster" alt="" style="width: 100%;">
                        </div>
                        <div class="d-flex flex-column">
                            <h2>{{album.title}}</h2>
                            <span>{{album.author}}</span>
                            <span>{{album.year}}</span>
                        </div>
                    </div>
                </div>
            </div>


        </main>
    </section>


</body>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="main.js"></script>

</html>