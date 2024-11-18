<template>
    <div class="container-category">
        <div v-for="category in categories" 
            :key="category.id" class="card" 
            :style="{background: category.background}">
            <img :src="category.image" :alt="category.name">
            <h3 class="name">{{ category.name }}</h3>
            <p class="productCount">{{ category.productCount }} items</p>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue';

export default {
    setup() {
        const categories = ref([
            { id: 1, image: './src/assets/Images/burger.png', name: 'Hamburger', productCount: 12, background: '#F2FCE4' },
            { id: 2, image: './src/assets/Images/apple.png', name: 'Apple', productCount: 120, background: '#FEEFEA' },
            { id: 3, image: './src/assets/Images/black_plum.png', name: 'Black Plum', productCount: 90, background: '#FFF3FF' },
            { id: 4, image: './src/assets/Images/headphone.png', name: 'Headphone', productCount: 16, background: '#FFFCEB' },
            { id: 5, image: './src/assets/Images/kiwi.png', name: 'Kiwi', productCount: 89, background: '#ECFFEC' },
            { id: 6, image: './src/assets/Images/orange.png', name: 'Orange', productCount: 34, background: '#FFF3FF' },
            { id: 7, image: './src/assets/Images/peach.png', name: 'Peach', productCount: 2, background: '#FFFCEB' },
            { id: 8, image: './src/assets/Images/snack.png', name: 'Snack', productCount: 16, background: '#FFF3EB' },
            { id: 9, image: './src/assets/Images/vegetable.png', name: 'Vegetable', productCount: 45, background: '#F2FCE4' },
            { id: 10, image: './src/assets/Images/cake.png', name: 'Cake & Milk', productCount: 56, background: '#F2FCE4' },
        ]);
        return { categories };
    }
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
    padding: 23px;
}

.name {
    font-family: "Quicksand", sans-serif; 
    margin: 0;
}

.productCo {
    font-family: "Quicksand", sans-serif;
    color: gray;
    margin-top: 1rem;
}
</style>
