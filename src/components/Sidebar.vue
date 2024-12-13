<template>
  <aside>
    <ul>
      <li v-for="section in sections" :key="section">
        <button @click="navigateToSection(section)" :class="{ active: currentSection === section }">
          {{ section }}
        </button>
      </li>
    </ul>
  </aside>
</template>

<script>
export default {
  props: ['page'], // Receive the current page as a prop
  computed: {
    currentSection() {
      return this.$route.params.section; // Get current section from the route
    },
  },
  data() {
    return {
      sections: ['section1', 'section2', 'section3', 'section4'],
    };
  },
  methods: {
    navigateToSection(section) {
      this.$router.push(`/${this.page}/${section}`);
    },
  },
};
</script>

<style>
.active {
  color: blue;
  font-weight: bold;
}
ul {
  list-style-type: none;
  margin: 0px;
  padding: 0px;
}
button{
  width: 150px;
  height: 50px;
}
</style>
