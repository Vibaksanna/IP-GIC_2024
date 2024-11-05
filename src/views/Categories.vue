<template>
    <div class="container-category">
        <CategoryComponent
            v-for="category in categories"
            :key="category.id"
            :image="category.image"
            :name="category.name"
            :quality="category.quality"
            :background="category.background"
        />
    </div>
</template>

<script>

import {ref} from 'vue'
import CategoryComponent from '@/components/CategoryComponent.vue';

export default {
    components:{
        CategoryComponent
    },
    setup(){
        const categories=ref([
            {id:1,image:'./src/assets/Images/burger.png',name:'Hamburger',quality:12, background:'#F2FCE4'},
            {id:2,image:'./src/assets/Images/apple.png',name:'Apple',quality:120, background:'#FEEFEA'},
            {id:3,image:'./src/assets/Images/black_plum.png',name:'Black Plum',quality:90, background:'#FFF3FF'},
            {id:4,image:'./src/assets/Images/headphone.png',name:'Headphone',quality:16, background:'#FFFCEB'},
            {id:5,image:'./src/assets/Images/kiwi.png',name:'Kiwi',quality:89, background:'#ECFFEC'},
            {id:6,image:'./src/assets/Images/orange.png',name:'Orange',quality:34, background:'#FFF3FF'},
            {id:7,image:'./src/assets/Images/peach.png',name:'Peach',quality:2, background:'#FFFCEB'},
            {id:8,image:'./src/assets/Images/snack.png',name:'Snack',quality:16, background:'#FFF3EB'},
            {id:9,image:'./src/assets/Images/vegetable.png',name:'Vegetable',quality:45, background:'#F2FCE4'},
            {id:10,image:'./src/assets/Images/cake.png',name:'Cake & Milk',quality:56, background:'#F2FCE4'},

        ]);
        return {categories};
    },
}
</script>

<style scoped>
    .container-category{
        flex-wrap: wrap;
        display: flex;
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 10px;
        justify-content: center;
    }
</style>