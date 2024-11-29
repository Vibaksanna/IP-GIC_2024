<template>

    <div class="container-promotion">
        <div :style="{ backgroundColor: color }" class="banner">

            <div class="text">
                <h3 class="name">{{ title }}</h3>
            </div>

            <div class="promotion-image">
                <img :src="image" :alt="image"/>
            </div>
            <ButtonPromotion :buttonColor="buttonColor"/>
        </div>
    </div>

</template>

<script>

import ButtonPromotion from './Button_Promotion.vue'; // Specifies the Button_Promotion file

export default{
    props:{
        title: String,
        image: String,
        color: String,
        buttonColor: String,
    },

    components:{
        ButtonPromotion
    },

}
    

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

.container-promotions{
    
    width: auto;
    height: auto;
    display: flex;
    justify-content:center ;
    margin-top: 12px;
    gap: 10px;
}

.banner{
    margin: 8px;
    position: relative;
    width: fit-content;
    display: flex;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    width: 530px;
    height: 250px;
    background-color: #f0f0f0;
    border-radius: 20px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    overflow: hidden;
}
.text{
    position: absolute; 
    top: 40px;
    left: 45px;
    font-size: 2rem;
    margin: 0 0 10px;
    z-index: 1;

}
h3{
    font-family: 'Quicksand', sans-serif;
    font-size: 27px;
    margin: 0 0 10px;
    width: 320px;
}
.promotion-image{
    position: absolute; 
    bottom: -35px;
    right: -20px;
}
.promotion-image image{
    width: 100%;
    height: 100%;
    object-fit: contain;
}

</style>