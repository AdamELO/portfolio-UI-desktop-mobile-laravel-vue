<template>
  <Explorer>
    <v-row v-for="project in projects" :key="project.id">
      <router-link
        class="
          d-flex
          align-center
          justify-space-between
          hoverExplorerMenu
          explorer
          my-1
        "
        style="text-decoration: none; color: inherit"
        :to="{
          name: 'Projects-Show',
          params: { project: project, name: project.projectName },
        }"
      >
        <v-col cols="4">
          <img
            width="100%"
            :src="
              require(`../assets/Projects/${project.images[0].src_alt}.png`)
                .default
            "
            :alt="project.images[0].src_alt"
          />
        </v-col>
        <v-col cols="3" class="d-flex justify-center align-center">
          {{ project.projectName }}
        </v-col>
        <v-col cols="5" class="d-flex justify-center align-center">
          <span
            class="mx-1"
            v-for="skills in project.frameworks"
            :key="skills"
            >{{ skills }}</span
          >
        </v-col>
      </router-link>
    </v-row>
  </Explorer>
</template>

<script>
import { mapState } from "vuex";
import Explorer from "../components/Explorer.vue";

export default {
  components: {
    Explorer,
  },
  mounted() {
    this.$store.dispatch("loadProjects");
  },
  computed: {
    ...mapState(["projects"]),
  },
};
</script>

<style scoped>
.hoverExplorerMenu {
  cursor: default;
}
.hoverExplorerMenu:hover {
  background-color: rgba(82, 183, 238, 0.2);
}
.explorer {
  border-bottom: solid 1px gainsboro;
  padding: 2px;
}
</style>
