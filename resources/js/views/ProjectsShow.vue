<template>
  <Explorer>
    <v-carousel
      cycle
      hide-delimiter-background
      show-arrows-on-hover
      hide-delimiters
    >
      <v-carousel-item
        v-for="(projectImg, i) in $route.params.project.images"
        :key="i"
      >
        <img
          height="100%"
          width="100%"
          :src="require(`../assets/Projects/${projectImg.src_alt}.png`).default"
          :alt="projectImg.src_alt"
        />
      </v-carousel-item>
    </v-carousel>
  </Explorer>
</template>

<script>
import Explorer from "../components/Explorer.vue";

export default {
  components: {
    Explorer,
  },
};
</script>
