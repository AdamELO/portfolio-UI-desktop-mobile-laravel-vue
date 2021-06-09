<template>
  <div class="bg-win10" @click="modalFalse">
    <v-container fluid class="px-0 py-2 height">
      <v-row no-gutters class="height">
        <v-col cols="1">
          <div class="desktop_hov d-flex flex-column align-center mb-2">
            <img width="48px" :src="require('../assets/trash.png').default" alt="trash_can_icon" />
            <span class="desktopIconFont">Recycle bin</span>
          </div>
          <DesktopMenu img="project_icon" route="projects" />
          <DesktopMenu img="devskills" route="skills" />
          <DesktopMenu img="adam_avatar" route="about" />
          <DesktopMenu img="form_64px" route="contact" />
        </v-col>
        <v-col cols="11" class="px-5">
          <router-view />
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
import DesktopMenu from "../components/DesktopMenu.vue";

export default {
  name: "Home",
  components: {
    DesktopMenu,
  },
  methods: {
    modalFalse() {
      this.$store.commit("modalFalse");
    },
  },
};
</script>

<style>
.bg-win10 {
  background-image: url("../assets/windows.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
  width: 100%;
}
.desktopIconFont {
  color: white;
  font-family: Segoe UI;
  text-shadow: 2px 1px black;
  font-weight: 200;
  text-align: center;
  cursor: default;
}
.desktop_hov:hover,
.desktop_hov:focus {
  background-color: rgba(82, 183, 238, 0.4);
  outline: 1px solid rgba(141, 203, 236);
}
.height {
  height: 100% !important;
}
</style>
