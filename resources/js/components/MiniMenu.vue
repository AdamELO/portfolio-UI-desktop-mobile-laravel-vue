<template>
  <v-col cols="1" class="flex-column d-flex align-center">
    <v-icon color="white" class="py-2" dense> mdi-menu </v-icon>
    <v-spacer></v-spacer>
    <div class="pb-3">
      <router-link
        style="text-decoration: none; color: inherit"
        to="/home/about"
      >
        <img
          width="20px"
          height="20px"
          class="rounded-circle"
          :src="require('../assets/adam_avatar.png').default"
          alt="profilePicture"
        />
      </router-link>
    </div>
    <v-icon color="white" class="py-3" dense> mdi-file-outline </v-icon>
    <v-icon color="white" class="py-3" dense> mdi-image-outline </v-icon>
    <v-icon color="white" class="py-3" dense> mdi-cog </v-icon>
    <v-icon v-on:click="shutdown()" color="white" class="pt-3" dense> mdi-power </v-icon>
  </v-col>
</template>

<script>
export default {
  methods: {
    shutdown() {
      this.$store.commit("shutdown");
    },
  },
};
</script>
