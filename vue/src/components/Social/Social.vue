<template>
    <div>
        <div id="twitter" href="https://www.twitter.com">
            <img id="imgSocT" src="../../assets/twitter.svg" alt="">
        </div>
        <div id="facebook" href="https://www.facebook.com">
            <img id="imgSocF" src="../../assets/facebook.svg" alt="">
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

*{
    transition: 0.3s;
}

#twitter {
    background-color: rgb(35, 168, 236);
    margin-bottom: 5px;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    margin-right: 100px; 
    height: 40px;
    display: flex;
    flex-direction: row-reverse;
}

#facebook {
    background-color: rgb(54, 86, 150);
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    margin-right: 100px; 
    height: 40px;
    display: flex;
    flex-direction: row-reverse;
}

#twitter:hover {
    margin-right: 0px;
    
}

#facebook:hover {    
    margin-right: 0px;
}


#imgSocT{
    width: 40px;
}

#imgSocF{
    width: 40px;
}

</style>
