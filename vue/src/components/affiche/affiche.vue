<template>
    <div class="post">
        <div class="poster">
            <img v-bind:src="getImage(post.poster_path)" class="allImg" /> 
        </div>
        <h4 v-if="post.title">Titre: {{post.title}}</h4>
        <h4 v-else>Titre: {{post.name}}</h4>
        <p>Date: {{post.first_air_date}}</p>
    </div>
</template>

<script>
import { getImage } from '../../utils/getImage'

export default {

    methods:{
        getImage,
    },
    props : ["post"]
}
</script>

<style>

</style>
