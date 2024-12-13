<template>
  <div>
    <p>Welcome to {{ sectionName }} of {{ pageName }}</p>
  </div>
</template>

<script>
export default {
  computed: {
    pageName() {
      return this.$route.params.page; // Get current page from the route
    },
    sectionName() {
      return this.$route.params.section; // Get current section from the route
    },
  },
};
</script>
