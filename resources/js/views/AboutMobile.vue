<template>
  <MobileExplorer>
    <v-card flat style="height: 80vh">
      <v-img :src="require('../assets/adam_avatar.png').default"></v-img>
      <v-card-title class="d-flex justify-center"
        >El Omari Adam || Web Developer</v-card-title
      >
      <v-card-text class="black--text">
        Hello &#128587; !!! My name is Adam and I'm a FullStack Web Developer.
        I'm currently looking for a job/internship So if you're looking for a
        nice, curious and determined fellow Don't hesitate to contact me !!! Why
        do I think I am the one you need ? Well, I don't fear bugs or problems,
        I'm always looking to learn new things and understand how things work.
      </v-card-text>
    </v-card>
  </MobileExplorer>
</template>
<script>
import MobileExplorer from "../components/MobileExplorer.vue";
export default {
  components: {
    MobileExplorer,
  },
};
</script>
