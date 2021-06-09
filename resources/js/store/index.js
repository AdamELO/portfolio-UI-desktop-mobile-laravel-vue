import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    pageTransition: {
      name: "router-view",
      mode: "in-out",
    },
    isOpenWin10: false,
    projects: [
      {
        framework: ["Vue", "JavaScript"],
        projectName: "Portfolio",
        id: 10,
        images: [
          {
            src_alt: "portfolio",
            src: "@/assets/portfolio.png",
          },
        ],
      },
      {
        framework: ["React Native", "JavaScript"],
        projectName: "Restaurants Search",
        id: 9,
        images: [
          {
            src_alt: "restaurants",
            src: "@/assets/projects/restaurants.png",
          },
        ],
      },
      {
        framework: ["Laravel 8", "TailwindCss", "Php", "LiveWire"],
        projectName: "Real time chat",
        id: 8,
        images: [
          {
            src_alt: "whatsup_home",
            src: "@/assets/projects/whatsup_home.png",
          },
          {
            src_alt: "whats'up_login",
            src: "@/assets/projects/whats'up_login.png",
          },
          {
            src_alt: "whatsup_add_friend",
            src: "@/assets/projects/whatsup_add_friend.png",
          },
          {
            src_alt: "whatsup_chat",
            src: "@/assets/projects/whatsup_chat.png",
          },
          {
            src_alt: "whatsup_dash",
            src: "@/assets/projects/whatsup_dash.png",
          },
        ],
      },
      {
        framework: ["Laravel 7", "Php"],
        projectName: "The Labs Backoffice",
        id: 7,
        images: [
          {
            src_alt: "labs",
            src: "@/assets/projects/labs.png",
          },
          {
            src_alt: "labsservice",
            src: "@/assets/projects/labsservice.png",
          },
          {
            src_alt: "labstesti",
            src: "@/assets/projects/labstesti.png",
          },
          {
            src_alt: "articlelabs",
            src: "@/assets/projects/articlelabs.png",
          },
        ],
      },
      {
        framework: ["Laravel 7", "Php"],
        projectName: "MolenGeek Room Booking System",
        id: 6,
        images: [
          {
            src_alt: "MolengeekLogin",
            src: "@/assets/projects/MolengeekLogin.png",
          },
          {
            src_alt: "tablette",
            src: "@/assets/projects/tablette.png",
          },
          {
            src_alt: "reservation",
            src: "@/assets/projects/reservation.png",
          },
          {
            src_alt: "agenda2",
            src: "@/assets/projects/agenda2.png",
          },
          {
            src_alt: "backofficemolengeek",
            src: "@/assets/projects/backofficemolengeek.png",
          },
        ],
      },
      {
        framework: ["React", "JavaScript"],
        projectName: "Yahtzee Game",
        id: 5,
        images: [
          {
            src_alt: "yahtzeeStart",
            src: "@/assets/projects/yahtzeeStart.png",
          },
          {
            src_alt: "yathzeeRoll",
            src: "@/assets/projects/yathzeeRoll.png",
          },
          {
            src_alt: "yahtzeeEnd",
            src: "@/assets/projects/yahtzeeEnd.png",
          },
        ],
      },
      {
        framework: ["Laravel 7", "Php"],
        projectName: "The Real Wedding Backoffice",
        id: 4,
        images: [
          {
            src_alt: "weddingbo",
            src: "@/assets/projects/weddingbo.png",
          },
          {
            src_alt: "weddinggal",
            src: "@/assets/projects/weddinggal.png",
          },
          {
            src_alt: "weddingheader",
            src: "@/assets/projects/weddingheader.png",
          },
          {
            src_alt: "weddingabout",
            src: "@/assets/projects/weddingabout.png",
          },
        ],
      },
      {
        framework: ["Html5", "Css3", "JavaScript"],
        projectName: "Emporium Website",
        id: 3,
        images: [
          {
            src_alt: "empor",
            src: "@/assets/projects/empor.png",
          },
          {
            src_alt: "emporiumcarousel",
            src: "@/assets/projects/emporiumcarousel.png",
          },
          {
            src_alt: "emporiumproducts",
            src: "@/assets/projects/emporiumproducts.png",
          },
        ],
      },
      {
        framework: ["JQuery", "JavaScript"],
        projectName: "Api Weather",
        id: 2,
        images: [
          {
            src_alt: "weather",
            src: "@/assets/projects/weather.png",
          },
        ],
      },
      {
        framework: ["Figma"],
        projectName: "SpriteSheet Loaders",
        id: 1,
        images: [
          {
            src_alt: "rainbowloader",
            src: "@/assets/projects/rainbowloader.png",
          },
          {
            src_alt: "leafwindloader",
            src: "@/assets/projects/leafwindloader.png",
          },
          {
            src_alt: "halloweenloader",
            src: "@/assets/projects/halloweenloader.png",
          },
        ],
      },
    ],
  },
  mutations: {
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
  actions: {},
  modules: {},
});
