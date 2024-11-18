<script>
import axios from 'axios';
import CategoryComponent from './components/CategoryComponent.vue';
import CategoryPromotion from './components/CategoryPromotion.vue';

export default {

    components: {
        CategoryComponent,
        CategoryPromotion
    },

    mounted(){
        this.fetchCategoryComponent();
        this.fetchCategoryPromotion();
    },

    methods:{
        fetchCategoryComponent(){
            axios.get("http://localhost:3000/api/categories").then((result) => {
                console.log(result.data);
            });
        },

        fetchCategoryPromotion(){
            axios.get("http://localhost:3000/api/promotions").then((result) => {
                console.log(result.data);
            });
        }
    }
}
</script>

<template>
    <CategoryComponent/>
    <CategoryPromotion/>
</template>
