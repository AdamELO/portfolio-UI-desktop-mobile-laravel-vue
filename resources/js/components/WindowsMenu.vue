<template>
  <v-container fluid class="height px-0 py-2">
    <v-row no-gutters class="height d-flex flex-row">
      <MiniMenu />
      <ProjectsListMenu :projects="projects" />
      <MaxiMenu />
    </v-row>
  </v-container>
</template>

<script>
import MiniMenu from "../components/MiniMenu";
import MaxiMenu from "../components/MaxiMenu";
import ProjectsListMenu from "../components/ProjectsListMenu";
import { mapState } from "vuex";

export default {
  components: {
    MaxiMenu,
    MiniMenu,
    ProjectsListMenu,
  },
  computed: {
    ...mapState(["projects"]),
  },
};
</script>

<style scoped>
.menuHover:hover {
  background-color: rgba(255, 255, 255, 0.1);
}
</style>
