<template>
  <v-system-bar lights-out dark>
    <v-icon>mdi-signal-cellular-outline</v-icon>
    <v-icon>mdi-wifi-strength-4</v-icon>
    <v-spacer></v-spacer>
    <span class="white--text">El Omari Adam || Web Dev</span>
    <v-spacer></v-spacer>
    <v-icon>mdi-battery</v-icon>
    <span>{{ currentTime }}</span>
  </v-system-bar>
</template>

<script>
export default {
  data() {
    return {
      currentTime: "Time",
    };
  },
  created() {
    setInterval(this.getNow, 1000);
  },
  methods: {
    getNow: function () {
      const today = new Date();
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
    },
  },
};
</script>
