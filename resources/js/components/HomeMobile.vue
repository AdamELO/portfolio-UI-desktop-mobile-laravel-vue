<template>
  <div>
    <v-container
      fluid
      class="d-flex justify-center align-center white--text my-5 py-5"
    >
      <v-row>
        <v-col
          cols="7"
          style="border-right: white solid 1px"
          class="d-flex flex-column align-end"
        >
          <div class="fontHour">{{ currentTime }}</div>
          <div class="fontDate">{{ currentDate }}</div>
        </v-col>
        <v-col cols="4" class="d-flex align-center">
          <v-icon x-large color="white">mdi-weather-partly-cloudy</v-icon>
          <v-spacer></v-spacer>
          <span class="fontWeather">17°</span>
        </v-col>
      </v-row>
    </v-container>
    <div class="mx-3">
      <v-toolbar
        color="rgba(255,255,255,0.7)"
        dense
        flat
        class="searchbarBorder"
      >
        <v-text-field
          hide-details
          prepend-icon="mdi-magnify mdi-rotate-90"
          placeholder="Search Projects"
        ></v-text-field>
      </v-toolbar>
    </div>
    <v-container fluid class="mobileMenu">
      <v-row class="white--text my-2">
        <v-col cols="4">
          <router-link
            style="text-decoration: none; color: inherit"
            to="/mobile/about"
            class="d-flex flex-column justify-center align-center"
          >
            <v-img width="64px" :src="require('../assets/about.png').default"></v-img>
            <span>About</span>
          </router-link>
        </v-col>
        <v-col cols="4">
          <router-link
            style="text-decoration: none; color: inherit"
            to="/mobile/skills"
            class="d-flex flex-column justify-center align-center"
          >
            <v-img width="64px" :src="require('../assets/skillsMobile.png').default"></v-img>
            <span>Skills</span>
          </router-link>
        </v-col>
        <v-col cols="4">
          <router-link
            style="text-decoration: none; color: inherit"
            to="/mobile/projects"
            class="d-flex flex-column justify-center align-center"
          >
            <v-img width="64px" :src="require('../assets/gallery.png').default"></v-img>
            <span>Projects</span>
          </router-link>
        </v-col>
      </v-row>
      <hr />
      <v-row class="white--text mt-1">
        <v-col cols="3">
          <a href="tel:+32483716885">
            <v-img width="64px" :src="require('../assets/phoneMobile.png').default"></v-img>
          </a>
        </v-col>
        <v-col cols="3">
          <a href="mailto:elomari-adam@hotmail.com">
            <v-img width="64px" :src="require('../assets/messagesMobile.png').default"></v-img>
          </a>
        </v-col>
        <v-col cols="3">
          <a href="https://www.linkedin.com/in/adam-el-omari" target="_blank">
            <v-img width="64px" :src="require('../assets/linkedin_64px.png').default"></v-img>
          </a>
        </v-col>
        <v-col cols="3">
          <a href="https://github.com/AdamELO" target="_blank">
            <v-img width="64px" :src="require('../assets/github.png').default"></v-img>
          </a>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
export default {
  data() {
    return {
      currentTime: "Time",
      currentDate: "Date",
    };
  },
  created() {
    setInterval(this.getNow, 1000);
  },
  methods: {
    getNow: function () {
      const today = new Date();
      // date
      const monthNames = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];
      const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

      const day =
        today.getDate() >= 10 ? today.getDate() : "0" + today.getDate();
      const dateTime = `${dayNames[today.getDay()]} ${day} ${
        monthNames[today.getMonth()]
      }`;
      //hour
      const minutes =
        today.getMinutes() >= 10
          ? today.getMinutes()
          : "0" + today.getMinutes();
      const hours =
        today.getHours() >= 10 ? today.getHours() : "0" + today.getHours();
      const time = hours + ":" + minutes;
      //current
      this.currentTime = time;
      this.currentDate = dateTime;
    },
  },
};
</script>

<style scoped>
.fontWeather {
  font-size: 1.7rem;
}
.fontHour {
  font-size: 3rem;
}
.fontDate {
  font-size: 1.2rem;
}
.mobileMenu {
  position: absolute;
  bottom: 60px;
}
.searchbarBorder {
  border-radius: 40px !important;
}
</style>
