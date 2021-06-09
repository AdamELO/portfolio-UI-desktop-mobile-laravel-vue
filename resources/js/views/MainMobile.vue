<template>
  <div class="wallpaper">
    <MobileBarTop />
    <HomeMobile />
    <MobileBarBottom />
  </div>
</template>

<script>
import MobileBarTop from "../components/MobileBarTop";
import MobileBarBottom from "../components/MobileBarBottom.vue";
import HomeMobile from "../components/HomeMobile.vue";
export default {
  components: {
    MobileBarTop,
    MobileBarBottom,
    HomeMobile,
  },
};
</script>
<style scoped>
.wallpaper {
  background-image: url("../assets/wallpaper2.jpg");
  /* Wallpaper2 By Mado El Khouly */
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
  width: 100%;
}
.fontWeather {
  font-size: 1.7rem;
}
.fontHour {
  font-size: 3rem;
}
.fontDate {
  font-size: 1.2rem;
}
.mobileMenu {
  position: absolute;
  bottom: 60px;
}
</style>
