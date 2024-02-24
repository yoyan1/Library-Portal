<script setup>
const props = defineProps({
  book: String,
})
</script>
<template>
    <header>
    <div class="nav-bar">
      <img src="../components/images/bars.png" width="29px" alt="">
      <form action="">
        <input type="search" name="" id="search" placeholder="Search">
      </form>
    </div>
    <div :class="(book) ? 'book-container' : 'book-hidden'" >
        <img src="./booksImage/science.png" width="92px" height="106px" alt="">
        <div class="book-name">
            <h3>Mathematics gsggsgs hshs</h3>
            <p>Name of author {{ book }}</p>
        </div>
    </div>
  </header>
</template>

<style scope>
    .book-hidden{
        display: none;
    }
</style>