<template>
    <div class="container-promotions">
        <div class="banner" :style={background}>
            <div class="text">
                <h3 class="name">{{ name }}</h3>
            </div>

            <div class="promotion-image">
                <img :src="image" :alt="image"/>
            </div>

            <button class="shop-button"> Shop now
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path 
                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                        </path>
                    </svg>
            </button>


        </div>
    </div>
</template>

<script>
    export default{
        props:{
            background: String,
            image: String,
            name: String
        }
    }

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

.container-promotions{
    flex-wrap: wrap;
    border-radius: 20px;
    padding: 5px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
    color: #333;
    
}

.banner{

    position: relative;
    width: fit-content;
    display: grid;
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
    align-items: flex-start;
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
.shop-button {
    top: 70%;
    left: 25%;
    transform: translate(-50%, -50%);
    position: absolute;
    display: flex;
    align-items: center;
    /* justify-content: center; */
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