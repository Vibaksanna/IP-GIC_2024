<template>
    <div>
        <div class="card" :style={background}>
            <img :src="image" :alt="image">
            <h3 class="name">{{ name }}</h3>
            <p class="quality">{{ quality }} items</p>
        </div>
    </div>
</template>

<script>

    export default {
        props :{
            background:String,
            image: String,
            name: String,
            quality: Number
        }
    }

</script>

<style scoped>

@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

.card{
    width: fit-content;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 10%;
    padding: 23px;
}
.name{
    font-family: "Quicksand", sans-serif; 
    margin: 0;
}
.quality{
    font-family: "Quicksand", sans-serif;
    color: gray;
    margin-top: 1rem;
}

</style>
