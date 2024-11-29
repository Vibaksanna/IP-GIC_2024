<template>

    <nav class="navBar">

        <div class="navText">
            <h1>{{ textTitle }}</h1>
        </div>

        <ul class="navButton">
            <li><button @click="filterGroup(null)" style="font-weight: bold;"> All </button></li>
            <li><button @click="filterGroup('Milk & Dairies')"> Milk & Dairies </button></li>
            <li><button @click="filterGroup('Coffee & Teas')"> Coffee & Teas </button></li>
            <li><button @click="filterGroup('Pet Foods')"> Pet Foods </button></li>
            <li><button @click="filterGroup('Meats')"> Meats </button></li>
            <li><button @click="filterGroup('Vegetables')"> Vegetables </button></li>
            <li><button @click="filterGroup('Fruits')"> Fruits </button></li>
        </ul>

    </nav>

</template>

<script>
export default{
    props:{
        textTitle: String,
    },

    methods:{
        filterGroup(group){
            // Emit the selected group to the parent
            this.$emit('groupSelected', group); 
        }
    }
}

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Quicksand:wght@300..700&display=swap');

.navBar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 40px 70px;
    /* border-bottom: 1px solid #ddd; */
    font-family: Arial, sans-serif;
}

/* Styling the title section */
.navText h1 {
    font-family: 'Quicksand', sans-serif;
    font-size: 32px;
    font-weight: bold;
    color: #253D4E;
    /* Darker shade for the text */
    margin: 0;
}

/* Styling the button container */
.navButton {
    list-style: none;
    display: flex;
    gap: 30px;
    /* Spacing between buttons */
    margin: 0;
    padding: 0;
}

/* Styling individual buttons */
.navButton li button {
    font-family: "Lato", sans-serif;
    background: none;
    border: none;
    color: #253D4E;
    font-size: 14px;
    cursor: pointer;
    font-weight: 400;
}

.navButton li button:hover {
    text-decoration: underline;
    /* Underline on hover */
}

.navButton li button:focus {
    color: #000;
    /* Darker color when selected */
}
</style>