<template>

    <button class="shop-button" @click="shopNow(promotions)"> Shop now
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path 
                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
            </path>
        </svg>
    </button>

</template>

<script>

    export default{
        data() {
            return {
                promotions: {
                    name: 'Holiday Sale' // Example promotion name
                }
            };
        },
        methods: {
            shopNow(promotions) {
                alert("Let's shop: " + promotions.name);
            }
        }
    };

</script>

<style>
.shop-button {
    top: 70%;
    left: 25%;
    transform: translate(-50%, -50%);
    position: absolute;
    display: flex;
    align-items: center;
    background-color: #36b37e;
    color: white;
    font-size: 1.5em;
    font-family: Arial, sans-serif;
    padding: 15px 30px;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease;
    z-index: 1;
}
.shop-button:hover {
    background-color: #2a9265; /* Darker shade on hover */
}
.shop-button svg {
    margin-left: 10px;
    width: 24px;
    height: 24px;
    fill: white;
}

</style>