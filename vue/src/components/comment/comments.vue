<template>
    <div class="commentcontainer">
        <form id="comment">
            <h3>Comments</h3>
            <fieldset>
                <input placeholder="Title" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your message here" cols="30" rows="10" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" data-submit="...Sending">
                    Submit
                </button>
            </fieldset>
        </form>
    </div>
</template>

<script>
export default {
    

}
</script>

<style scoped>
.commentcontainer{
    max-width: 400px;
    width: 100%;
    position: relative;
}

#comment {
    background: #F9F9F9;
    padding: 25px;
    margin: 40px 0;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

h2 {
    color:black;
}

fieldset{
    border: medium none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%;
}

textarea {
    height: 100px;
    max-width: 100%;
    resize: none;
}
</style>

