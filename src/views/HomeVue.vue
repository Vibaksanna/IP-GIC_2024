<template>

    <div>
        <CategoryMenu
            v-for="menu in menus.filter((menu) => menu.id !== 2)"
            :key="menu.id"
            :textTitle="menu.textTitle"
            v-bind="menu"
            @groupSelected="updateCategoryGroup"
        />
    </div>

    <div class="row-1">
        <CategoryComponent
            v-for="category in categories"
            :key="category.id"
            :image="category.image"
            :name="category.name"
            :productCount="category.productCount"
            :color="category.color"
        />
    </div>

    <div class="row-2">
        <CategoryPromotion
            v-for="promotion in promotions"
            :key="promotion.id"
            :color="promotion.color"
            :title="promotion.title"
            :image="promotion.image"
            :buttonColor="promotion.buttonColor"
        />
    </div>

    <div>
        <CategoryMenu
            v-if="menus.find((menu) => menu.id === 2)"
            :key="menus.find((menu) => menu.id === 2).id"
            :textTitle="menus.find((menu) => menu.id === 2).textTitle"
            v-bind="menus.find((menu) => menu.id === 2)"
            @groupSelected="updateProductGroup"
        />
    </div>

    <div class="productList row-3"> 
        <CategoryProduct
            v-for="product in productsByGroup"
            :key="product.id"
            :name="product.name"
            :rating="product.rating"
            :size="product.size"
            :image="product.image"
            :price="product.price"
            :promotionAsPercentage="product.promotionAsPercentage"
            :categoryId="product.categoryId"
            :instock="product.instock"
            :countSold="product.countSold"
            :group="product.group"
        />
    </div>

</template>

<script>

import CategoryMenu from '../components/CategoryMenu.vue';
import CategoryComponent from '../components/CategoryComponent.vue';
import CategoryPromotion from '../components/CategoryPromotion.vue';
import CategoryProduct from '../components/CategoryProduct.vue';
import { useProductStore } from '../stores/Product.vue';
import { mapState } from 'pinia';

export default {
    

    components: {
        CategoryMenu,
        CategoryComponent,
        CategoryPromotion,
        CategoryProduct,
    },

    data() {
        return {
            currentProductGroup: null, //For product filtering
            currentCategoryGroup:null, //For Category filtering
            products:null,

            menus: [
                {
                id: 1,
                textTitle: "Featured Categories",
                },

                {
                id: 2,
                textTitle: "Popular Component",
                },
            ],
        };
    },

    methods: {
 
        updateCategoryGroup(group) {
            this.currentCategoryGroup = group || null;
        },

        updateProductGroup(group) {
            this.currentProductGroup = group || null;
        },

    },

    mounted() {
        // Mounted life cycle: it will be executed everytime
        // the component will loaded
        const productStore = useProductStore();
        productStore.fetchCategories();
        productStore.fetchPromotions();
        productStore.fetchGroup();
        productStore.fetchProducts();
    },

    computed: {
    // Map state and getters from the Pinia store
    ...mapState(useProductStore, {
        popularProducts: "getPopularProduct", // Maps store's "getPopularProduct" getter
        promotions: "promotions", // Maps store's "promotions" state
    }),

    // Dynamically compute categories based on the selected category group
    categories() {
        const store = useProductStore();
        return this.currentCategoryGroup
            ? store.getCategoriesByGroup(this.currentCategoryGroup) // Filter by the selected group
            : store.categories; // Default to all categories
    },

    // Dynamically compute products based on the selected product group
    productsByGroup() {
        const store = useProductStore();
        return this.currentProductGroup
            ? store.getProductsByGroup(this.currentProductGroup) // Filter by the selected group
            : store.products; // Default to all products
    },

    // Map the "getProductsByCategory" getter for category-specific filtering
    getProductsByCategory() {
        return useProductStore().getProductsByCategory;
    },

},

}

</script>

<style>
.row-1,
.row-2 {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.productList{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    flex-direction: row;
    gap: 20px;
}
</style>


