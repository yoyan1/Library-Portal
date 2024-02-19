<script setup>
  import Recommended from '../components/RecommendedBooks.vue'
  import RecentBorrow from '../components/RecentBorrow.vue'
</script>
<script>
export default {
  data() {
    return {
      //subjects
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
    }
  },
}
</script>
<template>
  <main>
    <div class="container">
      <div class="text-wrap">
        <h1>CPSU</h1>
        <p>Central Philippine State University</p>
      </div>
      <div class="book-wrap">
        <div class="top">
          <div class="left">
            <h3>DIGITAL LIBRARY</h3   >
            <p>San Carlos DJVV Campus</p>
          </div>
          <div class="right">
            <img src="../components/images/cpsu-logo.png" width="77px" alt="">
          </div>
        </div>
        <div class="center">
          <a href="" v-for="subject in subjects">{{ subject }}</a>
        </div>
        <div class="bottom">
          <p>Recomended for you</p>
          <Recommended/>
        </div>
      </div>
      <div class="borrow-wrap">
        <p>Your Recently Borrowed Book</p>
        <RecentBorrow/>
      </div>
      <div class="subject-wrap">
        <a href="" v-for="subject in subjects">{{ subject }}</a>
      </div>
    </div>
  </main>
</template>
<style scope>
  
</style>
