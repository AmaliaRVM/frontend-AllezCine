<template>
    <div class="header">
        <b-navbar toggleable='lg' class="navbarhome">
            <b-navbar-brand>
                <router-link id="home" to="/">HOME</router-link>
            </b-navbar-brand>
            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav>
                    <b-nav-item>
                        <router-link id="film" to="/film">Films populaires</router-link>
                    </b-nav-item>
                    <b-nav-item>
                        <router-link id="serie" to="/serie">Série Tv</router-link>
                    </b-nav-item>
                </b-navbar-nav>
                <!-- Right elements in navbar -->
                <b-navbar-nav class="ml-auto">
                    <b-nav-form>
                        <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
                        <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
                    </b-nav-form>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
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

.navbarhome {
    background-color: black;
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
