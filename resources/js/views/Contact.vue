<template>
  <Explorer>
    <v-card elevation="2">
      <v-card-title class="ml-2 d-flex justify-center"
        ><h1 class="primary--text">Contact Form</h1></v-card-title
      >
      <v-alert v-if="success" text type="success" dense>
        Message successfully sent
      </v-alert>
      <v-alert v-if="failed" text type="error" dense>
        Message has not been sent, an error occured please retry or send your
        message through another way
      </v-alert>
      <v-form class="pa-1" v-model="valid">
        <v-container>
          <v-row class="d-flex justify-center align-center">
            <v-col cols="2"></v-col>
            <v-col cols="8">
              <v-text-field
                v-model="fields.subject"
                label="Subject"
                :rules="subjectRules"
                name="subject"
                required
              ></v-text-field>
            </v-col>
            <v-col cols="2"></v-col>
            <v-col cols="4">
              <v-text-field
                v-model="fields.name"
                :rules="nameRules"
                label="Name"
                name="name"
                required
              ></v-text-field>
            </v-col>

            <v-col cols="4">
              <v-text-field
                v-model="fields.email"
                label="E-mail"
                :rules="emailRules"
                name="email"
                required
              ></v-text-field>
            </v-col>
            <v-col cols="8">
              <v-textarea
                label="Message"
                v-model="fields.message"
                :rules="messageRules"
                required
                name="message"
              ></v-textarea>
            </v-col>
          </v-row>
        </v-container>
        <div class="text-center">
          <v-btn @click="submitForm" color="primary"> send </v-btn>
        </div>
      </v-form>
    </v-card>
  </Explorer>
</template>

<script>
import Explorer from "../components/Explorer.vue";
import axios from "axios";

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
    messageRules: [(v) => !!v || "Message is required"],
    fields: {},
    success: false,
    failed: false,
  }),
  methods: {
    submitForm() {
      return axios
        .post("/api/submit", this.fields)
        .then((response) => {
          this.success = true;
          this.failed = false;
        })
        .catch(()=>{
          this.failed = true;
          this.success = false;
        });
    },
  },
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
