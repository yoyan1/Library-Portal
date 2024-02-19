<script>
export default {
  data() {
    return {
        //Recommended Books list
      recommendedBooks:[
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
  <div class="books-recommended">
    <div v-for="books in recommendedBooks" class="books">
      <img src="./booksImage/philosophy.png" alt="" width="80px">
      <h3>{{ books.subject }}</h3>
    </div>
  </div>
</template>
<style scope>
    
</style>
