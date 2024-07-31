<!DOCTYPE html>
<html>

<head>
  @include('header')
  <style>
    .video-section {
      padding: 40px 15px;
      /* Added padding for mobile view */
      text-align: center;
    }

    .video-section h2 {
      margin-bottom: 20px;
    }

    .video-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      /* Adjust the gap as needed */
      justify-content: center;
    }

    .video-container video {
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2> Our Services </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/s1.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>Maintenance</h5>
              <p>
                At Mario Construction, we provide reliable maintenance services to keep your home in top condition. From
                minor repairs to regular upkeep, our team ensures your space remains functional and beautiful.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/painting-removebg-preview.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>Painting</h5>
              <p>
                Transform your space with Mario Construction’s professional painting services. Whether you’re looking to
                refresh a single room or revitalize your entire home, our skilled team delivers flawless results with
                precision and care.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/floor-removebg-preview.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>Cabinet Installs</h5>
              <p>
                Upgrade your kitchen or bathroom with Mario Construction’s expert cabinet installation services. Our
                skilled team ensures precise and efficient installation, delivering beautiful and functional cabinetry
                that perfectly fits your space.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="{{route('home')}}">Go Back</a>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section class="video-section">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Watch Our Work</h2>
      </div>
      <div class="video-container">
        <video controls width="320" height="240">
          <source src="{{ asset('videos/mario.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <video controls width="320" height="240">
          <source src="{{ asset('videos/video2.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <video controls width="320" height="240">
          <source src="{{ asset('videos/video3.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <video controls width="320" height="240">
          <source src="{{ asset('videos/video4.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- info section -->
  <footer>
    @include('footer')
  </footer>

</body>

</html>