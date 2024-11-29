<template>
    <div class="container">

        <div class="card">

            <div class="discount" v-if="promotionAsPercentage > 0" :style="{ backgroundColor: changeColor }">
                <span class="number-discount">{{ changeValue }}</span>
            </div>

            <div class="imageContainer">
                <img class="product-image" :src="'http://localhost:3000/' + image" alt="product-image">
            </div>

            <div class="CardInfo">
                <p class="brand"> Hodo Foods </p>

                <h1 class="productName">{{ name }}</h1>

                <div class="rating">
                    <div v-for="n in Math.round(rating)" :key="n">
                        <i class="ri-star-fill star-icon"></i>

                    </div>
                    <div class="rateValue">({{ rating }}.0)</div>
                </div>

                <div class="sizes">{{ size }} gram</div>

                <div class="ButtomCard">
                    <div class="priceBox">
                        <div class="DisPrice">$ {{ price }}</div>
                        <div v-if="promotionAsPercentage > 0" class="OriPrice">
                            $ {{ OriPrice }}
                        </div>
                    </div>

                    <div class="button-container">
                        <!-- Button to add item -->
                        <button 
                            v-if="!showQuantitySelector" 
                            @click="toggleQuantitySelector" 
                            class="add-button"
                        >
                            Add +
                        </button>

                        <!-- Quantity selector -->
                        <div v-else class="quantity-selector">
                            <span class="quantity">{{ quantity }}</span>
                            <div class="controls">
                                <button class="increase" @click="increaseQuantity">
                                    <i class="ri-arrow-up-s-line"></i>
                                </button>
                                <button class="decrease" @click="decreaseQuantity">
                                    <i class="ri-arrow-down-s-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


</template>

<script>
export default {

    props: {
        name: String,
        rating: Number,
        size: Number,
        image: String,
        price: Number,
        promotionAsPercentage: Number,
        categoryId: Number,
        instock: Number,
        countSold: Number,
        group: String,
    },

    computed: {

        OriPrice() {
            const price = this.price / (1 - this.promotionAsPercentage / 100);
            return price.toFixed(2);
        },

        changeValue() {
            if (this.promotionAsPercentage >= 50 && this.promotionAsPercentage < 80) {
                return "Hot";

            } else if (this.promotionAsPercentage >= 80) {
                return "Sale";
            } else {
                console.log("below 50%");

                return `- ${this.promotionAsPercentage} %`;
            }
        },
        parseImages() {
            return JSON.parse(this.image);
        },
        changeColor() {
            if (this.promotionAsPercentage >= 50 && this.promotionAsPercentage < 80) {
                return "#FDC040";

            } if (this.promotionAsPercentage >= 80) {
                return "#FD6E6E";
            } else {
                return "#3BB77E";
            }
        },
    },

    // funtion of increase and decrease in button
    data() {
        return {
            showQuantitySelector: false,
            quantity: 1,
        };
    },
    methods: {
        toggleQuantitySelector() {
            this.showQuantitySelector = true;
        },

        increaseQuantity() {
            this.quantity++;
        },

        decreaseQuantity() {
            if (this.quantity > 1) {
                this.quantity--;
            } else {
                this.showQuantitySelector = false;
            }
        },
    },




}

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Quicksand:wght@300..700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

.container {
    position: relative;
    width: auto;
    height: auto;
    display: flex;
    justify-content: center;

}

/* Card Styling */
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 2px solid #BCE3C9;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 320px;
    transition: transform 0.2s;
}

.card:hover {
    transform: scale(1.05);
}

/* Discount Tag */
.discount {
    position: absolute;
    text-align: center;
    top: 10px;
    left: 0px;
    color: white;
    padding: 0.5rem;
    margin-top: 15px;
    margin-bottom: 10px;
    border-radius: 0 8px 8px 0;
    font-size: 14px;
    width: 40px;
    font-family: 'Lato';
}

.imageContainer {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;

}

/* Product Image */
.product-image {
    /*  ; */
    height: 13rem;
    margin-top: 3rem;
    object-fit: cover;
}

/* Card Information */
.CardInfo {
    padding-left: 15px;
}

.brand {
    font-family: "Lato", sans-serif;
    font-size: 14px;
    color: #888888;
    margin-bottom: 3px;
    text-align: left;
}

.productName {
    font-family: 'Quicksand', sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: #333333;
    margin-bottom: 3px;
    text-align: left;
}

.rating {
    display: flex;
    gap: 3px;
    margin-bottom: 3px;
    font-family: "Lato", sans-serif;
}

.star-icon {
    color: #f6c744;
}

.rateValue {
    font-size: 14px;
    color: #666666;
}

/* Sizes */
.sizes {
    font-size: 14px;
    color: #777777;
    margin-bottom: 10px;
    text-align: left;
    margin-top: 10px;
    font-family: "Lato", sans-serif;
}

/* Bottom Card Section */
.ButtomCard {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.priceBox {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 15px;
    font-family: 'Quicksand', sans-serif;

}

.DisPrice {
    font-size: 23px;
    font-weight: bold;
    color: #27ae60;
    margin: 0px 10px 10px 0px;
}

.OriPrice {
    margin-top: 8px; 
    font-size: 14px;
    text-decoration: line-through;
    color: #888888;
}

/* Quantity Control */

.button-container {
    position: absolute;
    bottom: 1.1rem;
    right: 1.1rem;
    font-family: "Quicksand";
}

.add-button {
    background-color: #def9ec;
    color: #3bb77e;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s ease-in-out, box-shadow 0.3s ease;

}

.add-button:hover {
    background-color: #a5e8b3;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.add-button:active {
    background-color: #8fd4a4;
    transform: translateY(1px);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.add-button:focus {
    outline: none;
}

.quantity-selector {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 60px;
    height: 30px;
    padding: 5px 10px;
    border: 2px solid #28a745;
    border-radius: 5px;
    font-size: 16px;
    color: #28a745;
    font-weight: bold;
    transition: border-color 0.3s, transform 0.2s ease-in-out, box-shadow 0.3s ease;

    position: relative;
}


.quantity {
    text-align: center;
    width: 25px;
    /* Ensure enough space for the quantity number */
}

.controls {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 0px;
    /* Space between the buttons */
}

.controls button {
    background: none;
    border: none;
    color: #28a745;
    cursor: pointer;
    font-size: 14px;
    padding: 5px;
    transition: color 0.3s, transform 0.2s ease-in-out;

    height: 25px;
}


.controls button:hover {
    color: #218838;
    transform: scale(1.2);
}

.controls button:active {
    color: #1c7430;
    transform: scale(1);

}

/* Responsive Design */
@media (max-width: 768px) {
    .card {
        width: 100%;
        max-width: 300px;
    }
}
</style>