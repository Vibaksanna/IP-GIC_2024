<template>
  <header>
    <h1>Header</h1>
    <nav>
      <button @click="navigateToPage('page1')" :class="{ active: currentPage === 'page1' }">Page 1</button>
      <button @click="navigateToPage('page2')" :class="{ active: currentPage === 'page2' }">Page 2</button>
      <button @click="navigateToPage('page3')" :class="{ active: currentPage === 'page3' }">Page 3</button>
    </nav>
  </header>
</template>

<script>
export default {
  computed: {
    currentPage() {
      return this.$route.params.page; // Get current page from the route
    },
  },
  methods: {
    navigateToPage(page) {
      this.$router.push(`/${page}`);
    },
  },
};
</script>

<style scoped>
header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0px 30px;
    border: 4px solid greenyellow;
} 
nav{
    display: flex;
    gap: 30px;
    
}
button{
    background: none;
    border: none;
}
.active {
  color: red;
  font-weight: bold;
}
</style>
