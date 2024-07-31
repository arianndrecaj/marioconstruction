<!DOCTYPE html>
<html>

<head>
  @include('header')
  <style>
    /* Ensure the map container and the contact info are responsive */
    .contact_section {
      padding: 20px;
    }

    .contact_info {
      margin-bottom: 20px;
    }

    #map {
      width: 100%;
      /* Make map take full width */
      height: 300px;
      /* Adjust height as needed */
      margin: 10px 0;
    }

    @media (min-width: 768px) {

      /* For tablets and larger devices */
      #map {
        width: 500px;
        /* Set a fixed width for larger devices */
        height: 400px;
        /* Set a fixed height */
        float: right;
        /* Align to the right */
        margin-left: 20px;
      }
    }
  </style>
</head>

<body>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="contact_info">
            <a href="tel:586-495-6378">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call: 586-495-6378
              </span>
            </a>
            <br>
            <a href="mailto:Avmarjan@gmail.com">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email: Avmarjan@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div id="map"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <footer>
    @include('footer')
  </footer>

  <!-- Leaflet JavaScript -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    // Initialize the map
    var map = L.map('map').setView([42.488304, -83.142436], 18); // Coordinates for 2319 Guthrie Ave, Royal Oak, MI

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Add a marker to the map
    L.marker([42.488304, -83.142436]).addTo(map)
      .bindPopup('2319 Guthrie Ave, Royal Oak, MI')
      .openPopup();
  </script>

</body>

</html>