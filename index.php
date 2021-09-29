<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php 
  include_once 'views/partials/head.php';?>
  </head>
  <body>
  <?php include_once 'views/partials/nav.php';?>

  <div class="bgimg" >
  <img src="source/bgimg.jpg" alt="...">
  </div>

    <div class="content">
      <div class="d-flex justify-content-center m-5">
        <h1>Welcome!</h1>
      </div>
      <div class="d-flex justify-content-center intro">
        <p class="shadow-lg p-5 mb-5 bg-body rounded" id="intro">
          Hi, I'm a hobbyist photographer & videographer in Melbounre,
          Australia.<br />Please check my work and if you have any inquiries or
          want to collaborate,<br />
          please contact me via link in contact.
        </p>
      </div>
      <!-- carousel -->
      <div class="container-sm" id="carousel">
        <div
          id="carouselExampleIndicators"
          class="carousel slide carousel-fade"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="source/carousel1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="source/carousel2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="source/carousel3.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </body>
  <?php include_once 'views/partials/footer.php';?>
</html>
