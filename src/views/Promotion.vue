<template>
    <div class="container-promotion">
        <CategoryPromotion
        v-for="promotion in promotions"
        :key="promotion.id"
        :image="promotion.image"
        :name="promotion.name"
        :button="promotion.button"
        :background="promotion.background"
        />


    </div>
</template>

<script>

import {ref} from 'vue'
import CategoryPromotion from '@/components/CategoryPromotion.vue';
//import CategoryPromotion from './CategoryPromotion.vue';

export default{
    components:{
        CategoryPromotion
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

    },
}

</script>

<style scoped>

    .container-promotion{
        flex-wrap: wrap;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 20px;
        padding: 20px;
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;

    }
</style>