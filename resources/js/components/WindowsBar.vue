<template>
  <div class="winBar">
    <transition name="slide-up">
      <div v-if="isOpenWin10" class="modalwin10">
        <WindowsMenu />
      </div>
    </transition>
    <button class="icons win10" @click="toggleModalWin10">
      <v-icon color="white" class="win10" medium>
        mdi-microsoft-windows
      </v-icon>
    </button>
    <v-icon class="icons" color="white" medium>
      mdi-magnify mdi-rotate-90
    </v-icon>
    <a
      href="mailto:elomari-adam@hotmail.com"
      style="text-decoration: none; color: inherit; display: flex"
    >
      <BaseIcon name="mail_icon" />
    </a>
    <router-link
      to="/home/projects"
      style="text-decoration: none; color: inherit; display: flex"
    >
      <BaseIcon name="explorer-6" />
    </router-link>
    <a
      href="https://github.com/AdamELO"
      style="text-decoration: none; color: inherit; display: flex"
      target="_blank"
    >
      <v-icon class="icons" color="white" medium> mdi-github </v-icon>
    </a>
    <a
      href="https://google.com"
      style="text-decoration: none; color: inherit; display: flex"
      target="_blank"
    >
      <BaseIcon name="chrome" />
    </a>
    <v-spacer></v-spacer>
    <v-tooltip top>
      <template v-slot:activator="{ on, attrs }">
          <div class="d-flex justify-center align-center" v-bind="attrs"
              v-on="on">
            <img
              width="`24px`"
              height="`24px`"
              :src="require(`../assets/help.png`).default"
              alt="help_icon"
            />
          </div>
      </template>
      <span>For an optimal experience you should activate full screen (f11)</span>
    </v-tooltip>

    <BaseIcon
      name="collapse_arrow"
      width="20"
      height="20"
      classIcon="right-icons"
    />
    <BaseIcon
      name="battery_level"
      width="20"
      height="20"
      classIcon="right-icons"
    />
    <BaseIcon name="wi-fi" width="20" height="20" classIcon="right-icons" />
    <BaseIcon name="speaker" width="20" height="20" classIcon="right-icons" />
    <div
      class="right-icons date d-flex flex-column align-center justify-space-around"
    >
      <span>{{ currentTime }}</span>
      <span>{{ currentDate }}</span>
    </div>
    <BaseIcon
      name="notif icon"
      width="20"
      height="20"
      classIcon="right-icons px-3 mr-2"
    />
    <router-link
      class="verticalBar"
      style="text-decoration: none; color: inherit"
      to="/home"
    >
    </router-link>
  </div>
</template>

<script>
import WindowsMenu from "../components/WindowsMenu";
export default {
  components: {
    WindowsMenu,
  },
  data() {
    return {
      currentTime: "Time",
      currentDate: "Date",
    };
  },
  created() {
    setInterval(this.getNow, 1000);
  },
  computed: {
    isOpenWin10() {
      return this.$store.state.isOpenWin10;
    },
  },
  methods: {
    toggleModalWin10() {
      this.$store.commit("toggleModalWin10");
    },
    getNow: function () {
      const today = new Date();
      const month =
        today.getMonth() + 1 >= 10
          ? today.getMonth() + 1
          : "0" + (today.getMonth() + 1);
      const day =
        today.getDate() >= 10 ? today.getDate() : "0" + today.getDate();
      const date = `${day}-${month}-${today
        .getFullYear()
        .toString()
        .substr(-2)}`;
      const minutes =
        today.getMinutes() >= 10
          ? today.getMinutes()
          : "0" + today.getMinutes();
      const hours =
        today.getHours() >= 10 ? today.getHours() : "0" + today.getHours();
      const time = hours + ":" + minutes;
      const dateTime = date;
      this.currentTime = time;
      this.currentDate = dateTime;
    },
  },
};
</script>

<style scoped>
.winBar {
  background-color: rgb(0, 63, 149);
  display: flex;
  height: 50px;
}
.icons {
  padding: 0 11.5px;
}
.right-icons {
  padding: 0 5px;
}
.icons:hover,
.right-icons:hover,
.verticalBar:hover {
  background-color: rgba(255, 255, 255, 0.1);
}
.win10:hover {
  color: rgb(28, 146, 224) !important;
  outline: none !important;
}
.date {
  color: gainsboro;
  text-align: center;
  font-size: 0.75em;
}
.verticalBar {
  border-left: solid 1px gray;
  padding: 2.5px;
}
.modalwin10 {
  position: absolute;
  bottom: 50px;
  width: 40%;
  height: 80vh;
  background-color: rgb(6, 74, 170);
  z-index: 9999;
}
.v-icon::before {
  background-color: transparent;
}
</style>
