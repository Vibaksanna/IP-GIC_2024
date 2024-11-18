<template>
    <div class="container-promotions">
        <div v-for="promotion in promotions" 
            :key="promotion.id" class="banner"
            :style="{background: promotion.background}">

                <div class="text">
                    <h3 class="name">{{ promotion.name }}</h3>
                </div>

                <div class="promotion-image">
                    <img :src="promotion.image" :alt="image"/>
                </div>

                <ButtonPromotion />

        </div>

    </div>
</template>

<script>
import { ref } from 'vue';
import ButtonPromotion from './Button_Promotion.vue'; // Specifies the Button_Promotion file

export default{

    components:{
        ButtonPromotion
    },

    setup(){
        const promotions=ref([
            {
                id: 1, 
                image: './src/assets/Images/onion.jpg', 
                name:'Everyday Fresh &\n Clean with Our\n Products',
                button:'Shop now',
                background:'#F0E8D5'
            },
            {
                id: 2, 
                image: './src/assets/Images/bottle.png', 
                name:'Make your Breakfast\n Healthy and Easy',
                background:'#F3E8E8'
            },
            {
                id: 3, 
                image: './src/assets/Images/organic.jpg', 
                name:'The best Organic\n Products Online',
                background:'#E7EAF3'
            }

        ]);
        return {promotions};

    }
};

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
    font-family: 'Quicksand', sans-serif;
    font-size: 2rem;
    margin: 0 0 10px;
    z-index: 1;
    white-space: pre-line;

}
h3{
    top: 70px;
    font-family: 'Quicksand', sans-serif;
    font-size: 2rem;
    margin: 0 0 10px;
    z-index: 1;
    white-space: pre-line;
}
.promotion-image{
    position: absolute; 
    bottom: -35px;
    right: -20px;
}

</style>