<template>
    <div class="col-md post">
        <div class="poster">
            <img v-bind:src="getImage(post.poster_path)" class="allImg" /> 
        </div>
        <h4 v-if="post.title">{{post.title}}</h4>
        <h4 v-else> {{post.name}}</h4>
        <p class="annee" v-if="post.first_air_date"> {{getYear(post.first_air_date)}} </p>
        <p class="annee" v-else> {{getYear(post.release_date)}} </p>  
    </div>
</template>

<script>
import { getImage } from '../../utils/getImage'
import { getYear } from '../../utils/getYear'

export default {

    methods:{
        getImage,
        getYear
    },
    props : ["post"]
}
</script>

<style>

</style>