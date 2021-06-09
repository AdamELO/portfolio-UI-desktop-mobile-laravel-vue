<template>
  <div class="icons d-flex justify-center align-center" :class="classIcon">
    <img
      :width="`${width}px`"
      :height="`${height}px`"
      :src="require(`../assets/${name}.png`).default"
      :alt="name"
    />
  </div>
</template>

<script>
export default {
  props: {
    name: String,
    width: {
      type: [Number, String],
      default: 24,
    },
    height: {
      type: [Number, String],
      default: 24,
    },
    classIcon: {
      type: String,
      default: "icons",
    },
  },
};
</script>
