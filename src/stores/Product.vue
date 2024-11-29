<script>

import axios, { Axios } from 'axios';
import { defineStore } from 'pinia';

export const useProductStore = defineStore ("product", {
    state: () => ({
        groups:[],
        promotion: [],
        categories: [],
        products: [],
    }),

    getters:{
        // Function to get all categories belonging to a specific group by `groupName`
        getCategoriesByGroup: (state) => (groupName) =>
            // Filters the categories array, returning only those with a matching group
            state.categories.filter(({ group }) => group === groupName),

        // Function to get all products belonging to a specific group by `groupName`
        getProductsByGroup: (state) => (groupName) =>
            // Filters the products array, returning only those with a matching group
            state.products.filter(({ group }) => group === groupName),

        // Function to get all products under a specific category by `categoryId`
        getProductsByCategory: (state) => (categoryId) =>
            // Filters the products array, returning only those with a matching categoryId
            state.products.filter(({ categoryId: id }) => id === categoryId),

        // Function to get all popular products based on sales count
        getPopularProducts: (state) => () =>
            // Filters the products array, returning only those with a countSold greater than 10
            state.products.filter(({ countSold }) => countSold > 10),
    },

    actions:{

        fetchGroup() {
            axios.get("http://localhost:3000/api/groups").then((result) => {
                this.groups = response.data;
                console.log(result.data);
            })  
            .catch((error) => {
                 console.error("Error fetching groups:", error); // Log any errors
            });

        },

        fetchCategories() {
            axios.get("http://localhost:3000/api/categories").then((result) => {
                this.categories = result.data; // Assign the fetched data to `categories`
                console.log(result.data); // Log the result for debugging
            })
            .catch((error) => {
                 console.error("Error fetching categories:", error); // Log any errors
            });
        },

        fetchPromotions() {
            axios.get("http://localhost:3000/api/promotions").then((result) => {
                this.promotions = result.data; // Assign teh fetched data to `promotions`
                console.log(result.data); // Log teh result for debugging
            })
            .catch((error) => {
                console.error("Error fetching promotions:", error);
            });
        },

        fetchProducts() {
            axios.get("http://localhost:3000/api/products").then((result) => {
                this.products = result.data; // Assign teh fetched data to `promotions`
                console.log(result.data); // Log teh result for debugging
            })
            .catch((error) => {
                console.error("Error fetching products:", error);
            });
        },

    }

})

</script>