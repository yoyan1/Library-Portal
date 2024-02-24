<script setup>
  const props = defineProps({
    list: Object,
    show: Function,
  })
 
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
          <a href="" v-for="subject in list.subjects">{{ subject }}</a>
        </div>
        <div class="bottom">
          <p>Recomended for you</p>
          <div class="books-recommended">
            <a href="#" v-for="book in list.recommendedBooks" @click.prevent="callShow(book.subject)" class="books">
              <img src="../components/booksImage/philosophy.png" alt="" width="72px">
              <h3>{{ book.subject }}</h3>
            </a>
          </div>
        </div>
      </div>
      <div class="borrow-wrap">
        <p>Your Recently Borrowed Book</p>
        <div class="recent-borrow">
          <a href="#" v-for="recent in list.RecentBorrow" @click.prevent="callShow(recent.subject)"  class="books">
            <img src="../components/booksImage/english.png" alt="" width="72px">
            <h3>{{ recent.subject }}</h3>
          </a>
        </div>
      </div>
      <div class="subject-wrap">
        <a href="" v-for="subject in list.subjects">{{ subject }}</a>
      </div>
    </div>
  </main>
</template>
<script>
export default {
  data() {
    return {
      key: ''
    }
  },
  methods: {
    callShow(key) {
      this.show(key)
    }
  }
}
</script>
<style scope>
  
</style>
