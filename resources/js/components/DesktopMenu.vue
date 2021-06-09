<template>
  <router-link
    style="text-decoration: none; color: inherit"
    :to="`/home/${route}`"
  >
    <div class="desktop_hov d-flex flex-column align-center mb-2 py-1">
      <img width="48px" :src="require(`../assets/${img}.png`).default" :alt="img" />
      <span class="desktopIconFont text-capitalize">{{ route }}</span>
    </div>
  </router-link>
</template>
<script>
export default {
  props: {
    img: String,
    route: String,
  },
};
</script>
