<template>
  <div class="text-center mt-2">
    <img width="300px" :src="require('../assets/404.svg').default" alt="404 error" />
    <h1 class="font-weight-bold">404 - Page not found</h1>
    <p>
      The page you are looking for does not exist or is temporarily unavailable
    </p>
    <router-link to="/">
      <v-btn color="primary">Go to HOMEPAGE</v-btn>
    </router-link>
  </div>
</template>
