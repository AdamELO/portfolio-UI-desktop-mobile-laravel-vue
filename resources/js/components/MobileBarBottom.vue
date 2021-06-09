<template>
  <v-bottom-navigation
    :style="{ backgroundColor: BarColorBg }"
    class="bottom d-flex justify-space-around align-center"
  >
    <v-icon @click="goBack()" dense :color="iconColor"
      >mdi-triangle-outline mdi-rotate-270</v-icon
    >
    <v-icon dense :color="iconColor">mdi-circle-outline</v-icon>
    <v-icon dense :color="iconColor">mdi-square-outline</v-icon>
  </v-bottom-navigation>
</template>
<script>
export default {
  data() {
    return {
      iconColor: "black",
      BarColorBg: "white",
    };
  },
  created() {
    if (this.$route.path == "/mobile") {
      this.iconColor = "white";
      this.BarColorBg = "transparent";
    }
  },
  methods: {
    goBack() {
      this.$store.commit("setPageTransition", "back");
      this.$router.push({
        name: "MainMobile",
      });
    },
  },
  computed: {
    routeProjectName() {
      let path = this.$route.path;
      let projectName = path
        .replace("/home/projects/", "")
        .replaceAll("%20", " ");
      return projectName;
    },
    currentRouteName() {
      return this.$route.name.replace("Mobile", "");
    },
  },
};
</script>
<style scoped>
.bottom {
  position: fixed;
  bottom: 0;
  width: 100%;
}
</style>
