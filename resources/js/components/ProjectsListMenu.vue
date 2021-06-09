<template>
  <v-col cols="5" class="listProjects">
    <div width="100%" class="py-2">
      <span>Projects List</span>
    </div>
    <div class="menuHover py-2" v-for="project in projects" :key="project.id">
      <router-link
        :to="{
          name: 'Projects-Show',
          params: { project: project, name: project.projectName },
        }"
        style="text-decoration: none; color: inherit"
        >{{ project.projectName }}
        <img
          class="pr-2"
          width="100%"
          :src="require(`../assets/Projects/${project.images[0].src_alt}.png`).default"
          :alt="project.images[0].src_alt"
        />
      </router-link>
    </div>
  </v-col>
</template>

<script>
export default {
  props: {
    projects: Array,
  },
};
</script>

<style scoped>
.menuHover:hover {
  background-color: rgba(255, 255, 255, 0.1);
  cursor: default;
}
.listProjects {
  overflow-y: auto !important;
  height: 100%;
  font-size: 0.8rem;
  color: #fff;
}
</style>
