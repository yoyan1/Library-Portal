<template>
  <div class="container-welcome">
    <div class="welcome-wrap">
      <div class="text-logo">
        <p id="text">Welcome to</p>
        <h1>CPSU </h1>
        <h2>DIGITAL LIBRARY</h2> 
        <p>San Carlos DJJV Campus</p>
      </div>
      <div class="right logo">
        <img src="./images/cpsu-logo.png" width="150px" alt="">
      </div>
    </div>
    <div class="contact">
      Website: www.cpsu.edu.ph <br>
      E-mail add: cpsu.sancarlos@cpsu.edu.ph <br>
      Contact No.: 09173015565 (Mobile); (034) 702-9903 (Landline)
    </div>
  </div>
</template>
<style>

  .container-welcome{
    background:  url('./images/background.png');
    box-sizing: border-box;
    height: 100vh;
    width: 100%;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0;
  }

  .welcome-wrap{
    display: flex;
    justify-content: space-between;
    background: #3A563A4A;
    color: white;
    width: 100%;
    height: 143px;
  }

  .text-logo{
    text-align: center;
    padding: 10px 20px;
  }

  #text{
    font-family: sans-serif;
  }

  .text-logo p{
    font-size: 12px;
  }

  .text-logo h1{
  background-image: linear-gradient(#234F23, #45F02A);
  -webkit-background-clip: text; /* For webkit browsers */
  background-clip: text;
  color: transparent;
  font-family: "Inter", serif;
  font-weight: 600;
  font-style: normal;
  font-size: 36px;
  text-shadow: 0px 4px 4px #000000a8;
  color: none;
  }

  .text-logo h2{
    color: white;
    font-family: "Suez One", serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    line-height: 21px;
    letter-spacing: 0.1em;
  }

  .logo{
    background: #E4B81A;
    width: 160px;
    height: 150px;
    border-top-left-radius: 130px;
    border-bottom-left-radius: 130px;
    position: relative;
    top: -12px;
  }


  .contact{
    font-size: 12px;
    text-align: center;
    color: white;
    position: relative;
    top: 150px;
  }
</style>