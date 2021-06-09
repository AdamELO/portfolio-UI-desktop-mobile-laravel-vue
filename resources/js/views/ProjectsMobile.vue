<template>
  <MobileExplorer>
    <v-row v-for="project in projects" :key="project.id">
      <v-col cols="12" class="hoverlay">
        <img
          width="100%"
          :src="require(`../assets/Projects/${project.images[0].src_alt}.png`).default"
          :alt="project.images[0].src_alt"
          class="imageProjects"
        />
        <div class="overlay font-weight-bold">
          {{ project.projectName }}<br /><span class="ProjectSkillsColor">{{
            project.framework[0]
          }}</span>
        </div>
      </v-col>
    </v-row>
  </MobileExplorer>
</template>
<script>
import { mapState } from "vuex";
import MobileExplorer from "../components/MobileExplorer.vue";
export default {
  components: {
    MobileExplorer,
  },
  computed: {
    ...mapState(["projects"]),
  },
};
</script>

<style scoped>
.imageProjects {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: 0.5s ease;
  backface-visibility: hidden;
}

.overlay {
  transition: 0.5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.hoverlay {
  position: relative;
}
.hoverlay:hover .imageProjects {
  opacity: 0.3;
  cursor: zoom-in;
}
.hoverlay:hover .overlay {
  cursor: zoom-in;
  opacity: 1;
}
.ProjectSkillsColor {
  color: rgb(196, 45, 64);
}
</style>
