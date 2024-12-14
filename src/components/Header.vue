<template>
    <div class="header">

        <div class="logo">

            <div class="logoPic">
                <img src="../assets/Images/Logo.png" alt="">
            </div>

            <div class="logoName">
                <h3>Melon</h3>
                <p>MART & GROCERY</p>
            </div>

        </div>

        <div class="search">
            <div class="dropdown">
                <span>All Categories</span>
                <Icon icon="mingcute:down-fill" />
            </div>

            <div class="divider"></div>

            <input type="text" class="search-input" placeholder="Search for items" />

            <Icon icon="tabler:search" />
        </div>

        <div class="dashBoard">
            <div class="account">
                <Icon class="icon" icon="material-symbols:account-circle" /> Account
            </div>

            <div class="compare">
                <Icon class="icon" icon="material-symbols:recycling" /> Compare
            </div>

            <div class="wishlist">
                <Icon class="icon" icon="material-symbols:bookmark-heart" /> Wishlist
            </div>

            <div class="cart">
                <Icon class="icon" icon="material-symbols:shopping-cart-outline" /> Cart
            </div>
        </div>
    </div>

</template>

<script>
import { Icon } from '@iconify/vue';

export default {
    components: {
        Icon,
    }
}

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&family=Abhaya+Libre:wght@400;500;600;700;800&family=Assistant:wght@200..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap');

.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px 50px 10px 50px;
}

.logo {
    display: flex;
    align-items: center;
    justify-content: start;
    gap: 6px;
}

.logoPic {
    display: flex;
    width: 78px;
    height: 60px;

}

.logoName {
    font-family: 'Quicksand', sans-serif;
    padding-bottom: 10px;
}

.logoName h3 {
    color: #3BB77E;
    font-size: 40px;
    margin: 0px;
}

.logoName p {
    font-family: "Montserrat", sans-serif;
    color: #253D4E;
    letter-spacing: 1px;
    font-weight: 600;
    font-size: 10.9px;
    margin: 0px;
    padding-left: 3px;
}

/* Search container */
.search {
    width: 700px;
    height: 50px;
    display: flex;
    align-items: center;
    border: 2px solid #BCE3C9;
    /* Light green border */
    border-radius: 8px;
    /* Rounded corners */
    padding: 0 10px;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Dropdown section */
.dropdown {
    display: flex;
    align-items: center;
    font-size: 14px;
    font-weight: 700;
    gap: 10px;
    padding-left: 5px;
    color: #545454;
    cursor: pointer;
}

.dropdown span {
    margin-right: 5px;
}

.dropdown Icon {
    font-size: 14px;
    color: #333;
}

/* Divider line */
.divider {
    width: 1px;
    height: 60%;
    background-color: #ccc;
    /* Light gray divider */
    margin: 0 10px;
}

/* Search input field */
.search-input {
    flex: 1;
    /* Take up remaining space */
    border: none;
    outline: none;
    font-size: 16px;
    color: #999;
    /* Placeholder text color */
    padding: 0 10px;
}

/* Search icon */
.search Icon {
    font-size: 20px;
    color: #333;
    cursor: pointer;
}

/* Hover effect for icons */
.search Icon:hover {
    color: #555;
}

.dashBoard {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.icon {
    width: 24px;
    height: 24px;
    color: #253D4E;
    /* Set the default icon color */
    margin-right: 3.5px;
    /* Add spacing to the right of the icon */
    vertical-align: middle;
    /* Align icons with text */
}
</style>