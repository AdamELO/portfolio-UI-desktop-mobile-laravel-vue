<template>
  <Explorer>
    <v-card elevation="2">
      <v-card-title class="ml-2 d-flex justify-center"
        ><h1 class="primary--text">Contact Form</h1></v-card-title
      >
      <v-form v-model="valid" class="pa-1">
        <v-container>
          <v-row class="d-flex justify-center align-center">
            <v-col cols="2"></v-col>
            <v-col cols="8">
              <v-text-field
                :rules="subjectRules"
                label="Subject"
                required
              ></v-text-field>
            </v-col>
            <v-col cols="2"></v-col>
            <v-col cols="4">
              <v-text-field
                :rules="nameRules"
                label="Name"
                required
              ></v-text-field>
            </v-col>

            <v-col cols="4">
              <v-text-field
                :rules="emailRules"
                label="E-mail"
                required
              ></v-text-field>
            </v-col>
            <v-col cols="8">
              <v-textarea
                label="Message"
                required
                :rules="messageRules"
              ></v-textarea>
            </v-col>
          </v-row>
        </v-container>
        <div class="text-center">
          <v-btn color="primary"> Send </v-btn>
        </div>
      </v-form>
    </v-card>
  </Explorer>
</template>

<script>
import Explorer from "../components/Explorer.vue";

export default {
  components: {
    Explorer,
  },
  data: () => ({
    valid: false,
    nameRules: [(v) => !!v || "Name is required"],
    emailRules: [
      (v) => !!v || "E-mail is required",
      (v) => /.+@.+/.test(v) || "E-mail must be valid",
    ],
    subjectRules: [(v) => !!v || "Subject is required"],
    messageRules: [(v) => !!v || "message is required"],
  }),
};
</script>

<style scoped>
.circlecontact {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: solid 3px white;
  color: white !important;
  background-color: #c42d40;
  transform: rotate(0deg);
  transition: color ease 2s, transform ease 2s, background-color ease 2s;
}
.circlecontact:hover {
  background-color: white;
  color: #c42d40 !important;
  transition: all ease 2s;
  transform: rotate(360deg);
}
</style>
