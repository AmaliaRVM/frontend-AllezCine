<template>
    <div class="header">
        <div class="navbar">
            <ul>
                <li><router-link id="home" to="/">HOME</router-link></li>
                <li><router-link id="film" to="/film">Films populaires</router-link></li>
                <li><router-link id="serie" to="/serie">Série Tv</router-link></li>
            </ul>
            <div id="search">
                <input id="right" type="text" placeholder="Search...">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div id="carousel">
            <CarouselView/>
        </div>
    </div>
</template>

<script>
import CarouselView from '../carousel/CarouselView.vue'

export default {
    components: {
        CarouselView
    }

}


</script>

<style>
.header {
    border: 2px solid black;
    background-color: black;
    height: auto;
    
}

.navbar {
    display: flex;
}

@import url('https://fonts.googleapis.com/css?family=Fira+Sans:600,700');


#home {
    color: red;
}
#serie {
    color: white;
}
#film {
    color: white;
}


li {
    display: inline-block;
    list-style: none;
    line-height: 60px;
    padding: 0 40px;
    font-family:'Fira Sans', sans-serif;
}
li:hover {
    background: rgb(230, 148, 148);
    transition: background .3s;
}

#right {
    justify-self: end;
}

/* Carousel container */
#carousel {
    height: auto;
    background-color: white;
    padding: 20px;
}


</style>
