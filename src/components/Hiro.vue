<template>
    <div class="container">

        <img class="bg" src="../assets/Images/background.png" alt="">

        <div class="left-container">

            <h3>Don't miss amazing grocery deals</h3>
            <p>Sign up for the daily newsletter</p>

            <div class="email-container">
                <!-- Icon -->
                <Icon class="icon" icon="fa:send" />
                <!-- Input Field -->
                <input type="email" placeholder="Your email address">
                <!-- Subscribe Button -->
                <button>Subscribe</button>
            </div>

        </div>

        <div class="right-container">
            <img src="../assets/Images/background1.png" alt="">
        </div>

    </div>


</template>

<script>
import { Icon } from '@iconify/vue';
import InputComponent from './InputComponent.vue';

export default {

    components: {
        InputComponent,
        Icon,
    }

}

</script>

<style scoped>

@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Quicksand', sans-serif;
    /* width: 1584px;
    height: 538px; */
    border-radius: 25px;
    margin: 50px 50px 0px 50px;
    overflow: hidden;
    position: relative;

}

.bg {
    overflow: hidden;
    object-fit: cover;
    background-color: blanchedalmond;
    position: absolute;
}

.left-container {
    display: flex;
    align-items: start;
    justify-content: space-between;
    flex-direction: column;
    height: auto;
    z-index: 2;
}

.left-container h3 {
    width: 727px;
    font-size: 72px;
    margin: 0px;
    font-weight: 700;
}

.left-container p {
    color: grey;
    font-size: 30px;
    padding: 30px 0px 60px 0px;
    margin: 0px;
}

.email-container {
    display: flex;
    align-items: center;
    width: 400px;
    position: relative;
}

/* Input Field Styling */
.email-container input {
    flex: 1;
    /* Take the available space */
    height: 50px;
    border: none;
    border-radius: 50px;
    padding-left: 60px;
    /* Space for the icon */
    font-size: 12px;
    outline: none;
    background-color: #f7f7f7;
    /* Light background */
    color: #888;
    /* Placeholder text color */
}

/* Icon Styling */
.email-container .icon {
    position: absolute;
    left: 25px;
    /* Adjust position */
    font-size: 16px;
    color: #aaa;
    /* Icon color */
    pointer-events: none;
    /* Avoid interaction */
}

/* Subscribe Button */
.email-container button {
    position: absolute;
    right: 0px;
    height: 50px;
    border: none;
    border-radius: 50px;
    background-color: #33c070;
    /* Button color */
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    padding: 0 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Button Hover Effect */
.email-container button:hover {
    background-color: #2ba05e;
}

.right-container {
    width: 895px;
    height: 570px;
}

.right-container img {
    position: absolute;
    top: -24px;
    right: 0px;
    width: 895px;
    height: 570px;
}
</style>