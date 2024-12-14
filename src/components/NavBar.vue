<template>
    <div class="navBar">

        <div class="browseAll">
            <button>
                <img src="../assets/Images/menu.png" alt="">
                Browse All Categories
                <Icon icon="mingcute:down-fill"/>
            </button>
        </div>

        <div class="hotDeal">
            <img src="../assets/Images/hotDeal.png" alt="">
            <p>Hot Deals</p>
        </div>

        <nav>
            <p>Home</p>
            <div>
                <p>Food</p>
                <Icon icon="mingcute:down-fill"/>
            </div>
            <div>
                <p>Vegetables</p>
                <Icon icon="mingcute:down-fill"/>
            </div>
            <p>Drink</p>
            <p>Cookies</p>
            <div>
                <p>Meats & Seafood</p>
                <Icon icon="mingcute:down-fill"/>
            </div>
            <p>Bakery</p>
        </nav>

        <div class="info">
            <img src="../assets/Images/Headphone_icon.png" alt="">

            <div class="contact">
                <h3>099 777 888</h3>
                <p>24/7 Support Center</p>
            </div>

        </div>


         
    </div>



</template>

<script>
import { Icon } from '@iconify/vue';

export default{
    components:{
        Icon,
    },
    name:"NavBar"
}



</script>

<style scoped>

@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

.navBar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: 'Quicksand', sans-serif;
  padding: 10px 50px;
  border-top: 1px solid #E5E5E5;
  border-bottom: 1px solid #E5E5E5;
}

.browseAll button {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.7rem;
    width: 270px;
    height: 44px;
  background-color: #28a745;
  color: white;
  border: none;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1rem;
  font-weight: 700;
}
.browseAll button img{
    width: 16px;
    height: 16px;
}

.browseAll button:hover {
  background-color: #218838;
}
.hotDeal{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}
.hotDeal p{
    font-weight: 700;
}
.hotDeal img{
    width: 20px;
    height: 20px;
}

nav {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 30px;
}

nav p {
  margin: 0;
  cursor: pointer;
  color: #333;
  transition: color 0.3s;
  font-weight: 700;
}

nav p:hover {
  color: #007bff;
}

nav div {
  display: flex;
  align-items: center;
  gap: 5px;
}

.info {
  display: flex;
  align-items: center;
  gap: 10px;
  color: #333;
}
.info img{
    display: flex;
    width: 36px;
    height: 30px;
}

.info h3 {
  margin: 0;
  font-size: 20px;
  font-weight: bold;
  color: #28a745;
}

.info p {
  margin: 0;
  font-size: 12px;
  color: #666;
}




</style>