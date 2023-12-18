<template>
  <Explorer>
    <v-container height="100%!important">
      <v-row dense>
        <v-col cols="3">
          <v-card color="#1f88ff" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/html5.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">Html</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#ff751f" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/css3.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">Css</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#000000" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/javascript.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">Javascript</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#ffc824" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/bootstrap.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">Bootstrap</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#28ff33" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/tailwind-css.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">TailwindCss</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#ff9985" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/vuetify.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">Vuetify</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#beace6" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/jquery.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">JQuery</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#1CACEA" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/angular.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-elipsis">Angular</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#c48a7c" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/react_64px.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">React</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#35495e" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/vue.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">Vue</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#6723db" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/react_native_64px.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">React Native</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#008080" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/csharp.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-elipsis">C#</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#68217A" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/asp.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-elipsis">Asp.Net</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#ffcf7c" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/php.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">Php</v-card-title>
            </div>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card color="#b06243" dark>
            <div class="d-flex flex-column align-center justify-center">
              <v-avatar class="mt-3" size="80" tile>
                <v-img :src="require('../assets/Skills/laravel_64px.png').default"></v-img>
              </v-avatar>
              <v-card-title class="text-h5">Laravel</v-card-title>
            </div>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </Explorer>
</template>

<script>
import Explorer from "../components/Explorer.vue";

export default {
  components: {
    Explorer,
  },
};
</script>
