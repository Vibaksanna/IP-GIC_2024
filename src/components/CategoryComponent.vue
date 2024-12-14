<template>

    <div class="container-category">
        <div :style="{ backgroundColor: color }" class="card">

            <div class="image-container">
                <img :src="image" alt="" />
            </div>

            <h2>{{ name }}</h2>

            <p>
                <span>{{ productCount }}</span>
                items
            </p>
        </div>
    </div>

</template>

<script>

export default {

    props:{
        name: String,
        productCount: Number,
        color: String,
        image: String
    },

};
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

.container-category {
    flex-wrap: wrap;
    display: flex;
    gap: 10px;
    justify-content: center;
}

.card {
    width: fit-content;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 10%;
    padding: 20px;
    margin: 8px;
    transition: transform .2s
}
.card:hover{
    transform: scale(1.15);
}

h2 {
    font-family: "Quicksand", sans-serif; 
    margin: 0;
}

p {
    font-family: "Quicksand", sans-serif;
    color: gray;
    margin-top: 1rem;
}

</style>
