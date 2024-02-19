<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Bars from './components/icons/ClassicBars.vue'

</script>

<template>
  <header>
    <div class="nav-bar">
      <div class="icon">
        <Bars/>
      </div>
      <form action="">
        <input type="search" name="" id="search" placeholder="search">
      </form>
    </div>
  </header>

  <RouterView />

  <div class="footer"></div>
</template>

<style scoped>
  .footer{
    height: 43px;
    border-top-right-radius: 25px;
    border-top-left-radius: 25px;
    box-shadow: 0px 4px 4px 0px #00000040 inset;
  }
</style>
