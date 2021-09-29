<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php include '../partials/head.php';?>
  </head>
  <body>
  <?php include '../partials/nav.php';?>
    <div class="title d-flex justify-content-center">
      <span>Contact</span>
    </div>
    <div class="icons">
      <div class="emailbox">
        <img src="../../source/mailicon.png" width="100" height="100" alt="" id="mailicon">
        <div id="email">
         mel.jamespark@gmail.com
        </div>
      </div>
      <a href="https://www.youtube.com/channel/UCfKexLVfgR8gnP5JUdWq2uw" target="_blank">
        <img src="../../source/youtubeicon.png" width="100" height="100" alt="">
      </a>
      <a href="https://www.instagram.com/james_park_89/" target="_blank">
        <img src="../../source/instaicon.png" width="100" height="100" alt="">
      </a>
    </div>
    <script>
      const mailicon = document.getElementById('mailicon');
      mailicon.addEventListener('click',(e)=>{
        const email = document.getElementById('email');
        (email.style.display == 'none') ? ((email.style.display = 'block') & (mailicon.style.display = 'none')) : (email.style.display = 'none');
      })
    </script>
  </body>
  <!-- footer -->
  <?php include '../partials/footer.php';?>
</html>
