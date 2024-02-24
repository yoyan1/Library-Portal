<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HeaderView from './components/header.vue'

</script>

<template>
   <Welcome v-if="showWelcome"/>
  <HeaderView v-if="!showWelcome" :book="book"/>
  <RouterView v-if="!showWelcome" :list="list" :show="show"/>
  <div v-if="!showWelcome" class="footer"></div>

</template>
<script>
import Welcome from './components/TheWelcome.vue'

export default {
  components: {
    Welcome
  },
  data() {
    return {
      //book info at header book details visibility
      visibility: false,
      showWelcome: true, //show welcome
      //subject key
      book: '',
      list:{
        
        //Recommended Books list
        recommendedBooks:[
          {
            imageUrl: "../components/booksImage/philosophy.png",
            subject: "Mathematics"
          },
          {
            imageUrl: "./components/booksImage/english.png",
            subject: "English"
          },
          {
            imageUrl: "./components/booksImage/english.png",
            subject: "Science"
          },
          {
            imageUrl: "./components/booksImage/english.png",
            subject: "Philosophy"
          },
          {
            imageUrl: "./components/booksImage/english.png",
            subject: "History"
          }
        ],
        //recent borrow list details
        RecentBorrow:[
          {
            imageUrl: "../components/booksImage/math.png",
            subject: "Mathematics"
          },
          {
            imageUrl: "../components/booksImage/english.png",
            subject: "English"
          },
          {
            imageUrl: "../components/booksImage/science.png",
            subject: "Science"
          },
          {
            imageUrl: "../components/booksImage/philosophy.png",
            subject: "Philosophy"
          },
          {
            imageUrl: "../components/booksImage/history.png",
            subject: "History"
          }
        ],
        //list of subjects
        subjects:[
          "English",
          "Philosophy",
          "Chemistry",
          "Social Science",
          "Social studies",
          "Info Tech",
          "Calculus",
          "Arts",
          "Music",
          "Mass Media",
          "Mass Communication"
        ],
      },
    };
  },
  methods: {
    show(key){
      this.visibility = true;
      this.book = key;
      window.location.href = '/viewBooks'
    }
  },
  mounted() {
    setTimeout(() => {
      this.showWelcome = false; //hide welcome
    }, 3000);
  },
};
</script>
<style scoped>
  .footer{
    height: 43px;
    border-top-right-radius: 25px;
    border-top-left-radius: 25px;
    box-shadow: 0px 4px 4px 0px #00000040 inset;
  }
</style>
