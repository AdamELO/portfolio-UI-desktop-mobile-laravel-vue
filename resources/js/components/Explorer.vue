<template>
  <div class="height white">
    <v-system-bar class="systemBar" window color="#0078d7">
      <BaseIcon name="explorer-6" width="18px" height="18px" />
      <BaseIcon name="vertical_line" width="18px" height="18px" />
      <span class="white--text text-capitalize">Explorer</span>
      <v-spacer></v-spacer>
      <v-icon class="ma-3" color="white">mdi-minus</v-icon>
      <v-icon class="ma-3" color="white">mdi-checkbox-blank-outline</v-icon>
      <router-link style="text-decoration: none; color: inherit" to="/home">
        <v-icon class="closeBtn" color="white">mdi-close</v-icon>
      </router-link>
    </v-system-bar>
    <div class="d-flex justify-space-between pt-1">
      <div class="d-flex flex-row justify-center align-center">
        <v-icon @click="backwards()" class="ma-4 primary--text" small
          >mdi-arrow-left</v-icon
        >
        <v-icon class="ma-4" small>mdi-arrow-right</v-icon>
      </div>
      <v-toolbar class="mx-3 explorerBorder" dense flat>
        <div class="d-flex">
          <BaseIcon name="explorer-6" width="15px" height="15px" />
          <v-icon class="mx-1">mdi-chevron-right</v-icon>
          <span>PC</span>
          <v-icon class="mx-1">mdi-chevron-right</v-icon>
          <span v-if="currentRouteName !== 'Projects-Show'">{{
            currentRouteName
          }}</span>
          <span v-else
            >Projects <v-icon class="mx-1">mdi-chevron-right</v-icon
            ><b>{{ routeProjectName }}</b></span
          >
        </div>
      </v-toolbar>
      <div class="mx-3">
        <v-toolbar dense flat class="explorerBorder">
          <v-text-field
            hide-details
            prepend-icon="mdi-magnify mdi-rotate-90"
            placeholder="Search in projects"
          ></v-text-field>
        </v-toolbar>
      </div>
    </div>
    <v-row class="mt-4" no-gutters>
      <v-col cols="2">
        <router-link
          style="text-decoration: none; color: inherit"
          to="/home/projects"
        >
          <div class="d-flex align-center my-2 hoverExplorerMenu">
            <v-icon small class="mx-1">mdi-chevron-right</v-icon>
            <BaseIcon name="project_icon" width="15px" height="15px" />
            <span class="ml-2">Projects</span>
          </div>
        </router-link>
        <router-link
          style="text-decoration: none; color: inherit"
          to="/home/skills"
        >
          <div class="d-flex align-center my-2 hoverExplorerMenu">
            <v-icon small class="mx-1">mdi-chevron-right</v-icon>
            <BaseIcon name="skills" width="15px" height="15px" />
            <span class="ml-2">Skills</span>
          </div>
        </router-link>
        <router-link
          style="text-decoration: none; color: inherit"
          to="/home/about"
        >
          <div class="d-flex align-center my-2 hoverExplorerMenu">
            <v-icon small class="mx-1">mdi-chevron-right</v-icon>
            <BaseIcon name="adam_avatar" width="15px" height="15px" />
            <span class="ml-2">About</span>
          </div>
        </router-link>
        <router-link
          style="text-decoration: none; color: inherit"
          to="/home/contact"
        >
          <div class="d-flex align-center my-2 hoverExplorerMenu">
            <v-icon small class="mx-1">mdi-chevron-right</v-icon>
            <BaseIcon name="mail_icon" width="15px" height="15px" />
            <span class="ml-2">Contact Form</span>
          </div>
        </router-link>
      </v-col>
      <v-col cols="10" @scroll="handleScroll" class="px-5 scrollProjects">
        <slot></slot>
      </v-col>
      <v-row v-if="currentRouteName == 'Projects'">
        <v-col cols="2"></v-col>
        <v-col cols="10">
          <div
            v-if="scroll == false"
            class="d-flex justify-center align-center"
          >
            <span class="scroll-icon">
              <span class="scroll-icon__dot"></span>
            </span>
          </div>
        </v-col>
      </v-row>
    </v-row>
  </div>
</template>

<script>
export default {
  data() {
    return {
      scroll: false,
    };
  },
  methods: {
    handleScroll: function (e) {
      if (e.target.offsetHeight + e.target.scrollTop >= e.target.scrollHeight) {
        this.scroll = true;
      } else {
        this.scroll = false;
      }
    },
    backwards() {
      this.$router.go(-1);
    },
    // forwards() {
    //   this.$router.go(1);
    // },
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
      return this.$route.name;
    },
  },
};
</script>

<style scoped>
.systemBar {
  padding: 0 !important;
  padding-left: 5px !important;
}
.closeBtn {
  padding: 6px !important;
  margin-right: 0 !important;
}
.explorerBorder {
  border: solid 1px gainsboro !important;
}
.hoverExplorerMenu {
  cursor: default;
}
.hoverExplorerMenu:hover {
  background-color: rgba(82, 183, 238, 0.2);
}
.scrollProjects {
  overflow-y: auto !important;
  height: 70vh !important;
}
.explorer {
  border-bottom: solid 1px gainsboro;
  padding: 2px;
}

.scroll-icon__dot {
  display: block;
  position: absolute;
  left: 50%;
  background: rgb(18, 116, 162);
  height: 0.5em;
  width: 0.5em;
  top: 0.6em;
  margin-left: -0.25em;
  border-radius: 50%;
  transform-origin: top center;
  backface-visibility: hidden;
  animation: scrollProjects 2s ease-out infinite;
}
.scroll-icon {
  display: block;
  position: relative;
  height: 2.5em;
  width: 1.25em;
  border: 3px solid rgb(38, 145, 207);
  border-radius: 1em;
}
@keyframes scrollProjects {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  75% {
    transform: translateY(0.75em);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 0;
  }
}
.closeBtn:hover {
  background: red;
}
</style>
