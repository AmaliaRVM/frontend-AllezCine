<template>
    <div class="Footer">
        <h2><span id="red">ALLEZ</span>CINE!</h2>   
        <div class="containCol">
            <div id="firstCol">
                <h3>LES FONDAMENTAUX</h3>
                <p>A propos de AllezCiné</p>
                <p>Contactez-nous</p>
                <p>Forum d'aide</p>
            </div>
            <div id="secondCol">
                <h3>COMMUNAUTE</h3>
                <p>Règles</p>
                <p>Classement</p>
                <p>Forum</p>
                <p>Twitter</p>
                <p>Facebook</p>
            </div>
            <div id="thirdCol">
                <h3>LEGAL</h3>
                <p>Conditions d'utilisation</p>
                <p>Politique de confidentialité</p>
            </div>
        </div>     
    </div>
</template>

<script>
export default {
    data() {
        return {}
    }
}
</script>

<style>

.Footer {
    background-color: black;
    color: white;
    text-align: left;
    padding: 70px;
}

@import url('https://fonts.googleapis.com/css?family=Fira+Sans:600,700');

h2 {
    font-family: 'Fira Sans', sans-serif;
    padding-bottom: 2%; 
    /* font-size: 65px; */
}


#red {
    color: red;
}

.containCol {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}


h3 {
    padding-bottom: 20px;
    font-weight: 600;
    font-size: 15px;
}

</style>
