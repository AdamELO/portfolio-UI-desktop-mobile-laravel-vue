<template>
  <div>
    <MobileBarTop />
    <div class="d-flex borderBottom">
      <v-icon @click="goBack()" x-large color="black">mdi-arrow-left</v-icon>
      <span class="mobileRouteExplorer"> {{ currentRouteName }}</span>
    </div>
    <div class="overflow">
      <slot></slot>
    </div>
    <MobileBarBottom />
  </div>
</template>

<script>
import MobileBarTop from "../components/MobileBarTop.vue";
import MobileBarBottom from "../components/MobileBarBottom.vue";
export default {
  components: {
    MobileBarTop,
    MobileBarBottom,
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
.mobileRouteExplorer {
  font-size: 30px;
  margin-left: 15px;
}
.borderBottom {
  border-bottom: gainsboro 1px solid;
}
.overflow {
  overflow-y: auto !important;
  height: 100% !important;
}
</style>
