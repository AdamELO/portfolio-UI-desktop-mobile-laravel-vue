import Vue from "vue";
import Vuex from "vuex";
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(Vuex);
Vue.use(VueAxios, axios)

export default new Vuex.Store({
  state: {
    pageTransition: {
      name: "router-view",
      mode: "in-out",
    },
    isOpenWin10: false,
    projects: null,
  },
  getters: {
    projects: state => {
      return state.projects;
    }
  },
  mutations: {
    SET_Projects(state, projects) {
      state.projects = projects;
    },
    modalFalse(state) {
      state.isOpenWin10 === true ? (state.isOpenWin10 = false) : null;
    },
    toggleModalWin10(state) {
      state.isOpenWin10 = !state.isOpenWin10;
    },
    setPageTransition(state, value) {
      if ("default" === value) {
        Vue.set(state, "pageTransition", {
          name: "router-view",
          mode: "in-out",
        });
      }
      if ("back" === value) {
        Vue.set(state, "pageTransition", {
          name: "router-view-back",
          mode: "",
        });
      }
    },
  },
  actions: {
    loadProjects({ commit }) {
      axios
        .get('http://127.0.0.1:8000/api/dbprojects')
        .then(response => response.data)
        .then(projects => {
          // console.log(projects);
          commit('SET_Projects', projects)
        })
    }
  },
  modules: {},
});
