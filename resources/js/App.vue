<template>
  <v-app>
    <v-main>
      <transition
        v-if="$route.path.includes('/mobile')"
        :name="$store.state.pageTransition.name"
        :mode="$store.state.pageTransition.mode"
        v-on:after-enter="afterEnter"
        v-on:after-leave="afterLeave"
      >
        <router-view class="transition" />
      </transition>
      <router-view v-else class="transition" />
    </v-main>
    <WindowsBar v-if="$route.path.includes('/home')" />
  </v-app>
</template>

<script>
import WindowsBar from "./components/WindowsBar.vue";
import Store from "./store/index";
export default {
  name: "App",
  components: {
    WindowsBar,
  },
  methods: {
    afterEnter: () => {
      window.scrollTo(0, 0);
    },
    afterLeave: () => {
      Store.commit("setPageTransition", "default");
    },
  },
};
</script>

<style>
html,
body {
  overflow-y: hidden !important;
}
@media (max-width: 992px) {
  html,
  body {
    overflow-y: scroll !important;
  }
}
/* // transitions// */
/* slide up */
.slide-up-enter {
  transform: translateY(10px);
  opacity: 0;
}

.slide-up-enter-active,
.slide-up-leave {
  transition: all 0.3s ease;
}
.slide-up-leave-to {
  transform: translateY(-10px);
  opacity: 0;
}
/* slide right */
.slide-enter-active,
.slide-leave-active {
  transition: all 0.75s ease-out;
}
.slide-enter-to {
  position: absolute;
  right: 0;
}
.slide-enter-from {
  position: absolute;
  right: -100%;
}
.slide-leave-to {
  position: absolute;
  left: -100%;
}
.slide-leave-from {
  position: absolute;
  left: 0;
}
/* scrollbar */
::-webkit-scrollbar {
  width: 2px;
}
::-webkit-scrollbar-track {
  background: transparent;
}
::-webkit-scrollbar-thumb {
  background: transparent;
}
::-webkit-scrollbar-thumb:hover {
  background: rgb(20, 20, 20);
}

/* test */
.transition {
  overflow: hidden;
}
.router-view-enter-active,
.router-view-back-enter-active,
.router-view-leave-active,
.router-view-back-leave-active {
  position: fixed;
  width: 100%;
  background: white;
  min-height: 100vh;
  top: 0;
}

/* // router view */
.router-view-enter-active {
  transition: transform 0.5s ease-in-out;
  z-index: 2;
  transform: translateX(100%);
}
.router-view-enter-to {
  z-index: 2;
  transform: translateX(0%);
}
.router-view-leave-active {
  z-index: -1;
}
.router-view-leave-to {
  z-index: -1;
}
/* // router view back */

.router-view-back-leave-active {
  transition: transform 0.5s ease-in-out;
  z-index: 2;
  transform: translateX(0%);
}
.router-view-back-leave-to {
  z-index: 2;
  transform: translateX(100%);
}
</style>
