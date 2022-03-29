<template>
  <Explorer>
    <v-row class="height justify-center align-center">
      <v-col cols="4" class="flip-card d-flex justify-center align-center">
        <v-card class="flip-card-inner">
          <div
            class="flip-card-front d-flex flex-column justify-center align-center"
          >
            <v-img
              :src="require('../assets/adam_avatar.png').default"
              class="white--text align-end"
              gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
            >
            </v-img>
          </div>
          <div class="flip-card-back">
            <div class="text-h5">El Omari Adam <v-spacer></v-spacer>Web Developer</div>
            <p class="ma-3">
              <v-row>
                <v-col cols="12"
                  >I <v-icon color="white"> mdi-heart </v-icon></v-col
                >
                <v-col
                  cols="4"
                  class="d-flex justify-center align-center flex-column"
                >
                  <span>Football</span>
                  <v-icon large color="white"> mdi-soccer </v-icon>
                </v-col>
                <v-col
                  cols="4"
                  class="d-flex justify-center align-center flex-column"
                >
                  <span>Greek Mythology</span>
                  <v-icon large color="white"> mdi-lightning-bolt </v-icon>
                </v-col>
                <v-col
                  cols="4"
                  class="d-flex justify-center align-center flex-column"
                >
                  <span>Detective Novels</span>
                  <v-icon large color="white"> mdi-book </v-icon>
                </v-col>
              </v-row>
            </p>
          </div>
        </v-card>
      </v-col>
      <v-col cols="8" class="d-flex justify-center align-center">
        <v-card>
          <v-card-text>
            <div class="text--primary font-weight-bold">
              Hello &#128587; !!! My name is Adam and I'm a FullStack Web
              Developer <br />
              I'm currently looking for a job <br />
              So if you're looking for a nice, curious and determined fellow,<br />
              Don't hesitate to contact me !!! <br />
              Why do I think I am the one you need ? Well, I don't fear bugs or
              problems, <br />
              I'm always looking to learn new things and understand how things
              work. <br />
              <blockquote class="blockquote">
                <i class="mb-0">
                  "If there is no struggle, there is no progress".
                </i>
                <div class="blockquote-footer">Frederick Douglass</div>
              </blockquote>
            </div>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
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

<style scoped>
.flip-card {
  width: 80%;
  height: 80%;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-back {
  background-image: linear-gradient(to right top, #004d7a, #0ea6b4);
  color: white;
  transform: rotateY(180deg);
}
</style>
