<script>
export default {
  data() {
    return {
        //Recent Borrow Books list
      RecentBorrow:[
        {
          image: "./math.png",
          subject: "Mathematics"
        },
        {
          image: "./booksImage/english.png",
          subject: "English"
        },
        {
          image: "./booksImage/science.png",
          subject: "Science"
        },
        {
          image: "./booksImage/philosophy.png",
          subject: "Philosophy"
        },
        {
          image: "./booksImage/philosophy.png",
          subject: "History"
        }
      ]
    };
  },
};
</script>

<template>
  <div class="recent-borrow">
    <div v-for="recent in RecentBorrow" class="books">
      <img src="./booksImage/philosophy.png" alt="" width="80px">
      <h3>{{ recent.subject }}</h3>
    </div>
  </div>
</template>
<style scope>
.recent-borrow{
  overflow-y: scroll;
  display: flex;
  gap: 20px;
  max-width: 18.5rem;
  padding: 20px;
}
</style>
