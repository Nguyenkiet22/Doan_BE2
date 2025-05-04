<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Vehicle Maintenance</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #fff;
    }

    /* Navbar */
    .navbar {
      background-color: #000;
      padding: 10px 20px;
    }

    .nav-list {
      list-style: none;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .nav-list li {
      margin: 5px 10px;
    }

    .nav-list a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    /* .nav-list input[type="text"]name=""  {
      padding: 5px;
      border-radius: 4px;
      border: none;
    } */

    .nav-list button {
      padding: 5px 10px;
      margin-left: 5px;
      border: none;
      background-color: white;
      border-radius: 4px;
      cursor: pointer;
    }

    .header {
      background-color: #f9f9f9;
      padding: 20px;
      border-bottom: 2px solid #ccc;
    }

    .header h2 {
      margin: 0;
    }

    .main-section {
      display: flex;
      justify-content: space-between;
      padding: 40px 80px;
      flex-wrap: wrap;
      gap: 20px;
    }

    .pricing-table {
      flex: 1;
      min-width: 300px;
    }

    .pricing-table h3 {
      margin-bottom: 20px;
    }

    .pricing-card {
      background: #f5f5f5;
      border: 1px solid #ddd;
      margin-bottom: 20px;
      text-align: center;
    }

    .pricing-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .pricing-card .content {
      padding: 15px;
    }

    .price {
      background: red;
      color: white;
      padding: 10px 0;
      font-size: 24px;
    }

    .btn-learn {
      background-color: #fff;
      color: red;
      border: 1px solid red;
      padding: 8px 20px;
      cursor: pointer;
      margin-top: 10px;
    }

    .form-section {
      flex: 1;
      min-width: 300px;
      background-color: #f5f5f5;
      padding: 20px;
      border: 1px solid #ddd;
    }

    /* .form-section input,
    .form-sname="" ection select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      font-size: 14px;
    } */

    .form-section button {
      background-color: red;
      color: white;
      border: none;
      padding: 12px 30px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
    }

    .gallery-section {
      background: #111;
      color: white;
      padding: 40px 80px;
      text-align: center;
    }

    .gallery-section h3 {
      margin-bottom: 30px;
    }

    .gallery-grid {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .gallery-item {
      background: #222;
      padding: 10px;
      width: 200px;
    }

    .gallery-item img {
      width: 100%;
      height: 130px;
      object-fit: cover;
    }

    .gallery-item p {
      margin: 10px 0 0;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar">
    <ul class="nav-list">
      <li><a href="{{ route('indexHome')  }}">Home</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="{{ route('appointment')  }}">Make an Appointment</a></li>
      <li><a href="#">Shopping Cart</a></li>
      <li><a href="#">List Car</a></li>
      <li><a href="#">Customer Support</a></li>
      <li><a href="#">Introduce</a></li>
      <li><input type="text" name="" placeholder="Search..."> <button>🔍</button></li>
    </ul>
  </nav>

  <div class="header">
    <h2>Vehicle maintenance</h2>
  </div>

  <div class="main-section">
    <!-- Pricing Table -->
    <div class="pricing-table">
      <h3>Pricing <span style="color: red;">Table</span></h3>

      <div class="pricing-card">
        <img src="https://via.placeholder.com/300x180" alt="Engine Diagnostic">
        <div class="content">
          <div class="price">$80</div>
          <p>ENGINE DIAGNOSTIC</p>
          <button class="btn-learn">Learn More</button>
        </div>
      </div>

      <div class="pricing-card">
        <img src="https://via.placeholder.com/300x180" alt="Oil Changing">
        <div class="content">
          <div class="price">$80</div>
          <p>OIL CHANGING</p>
          <button class="btn-learn">Learn More</button>
        </div>
      </div>

      <div class="pricing-card">
        <img src="https://via.placeholder.com/300x180" alt="Engine Diagnostic">
        <div class="content">
          <div class="price">$80</div>
          <p>ENGINE DIAGNOSTIC</p>
          <button class="btn-learn">Learn More</button>
        </div>
      </div>
    </div>

    <!-- Form -->
    <div class="form-section">
      <h3>Get A Service Now</h3>
      <form action="{{ route('make.appointment') }}" method="POST">
        @csrf
        <div class="mt-3">
          <label for="" class="form-label">Date Book</label>
          <input type="date" name="Date_Book" class="form-control">
        </div>
        <div class="mt-3">
          <label for="" class="form-label">ID Product</label>
          <input type="text" name="ID_Product" class="form-control">
        </div>
        <div class="mt-3">
          <label for="" class="form-label">ID Customer</label>
          <input type="text" name="ID_Customer" class="form-control">
        </div>
        <!-- <select>
          <option disabled selected>-Select Your Vehicle Model-</option>
          <option>Honda</option>
          <option>Toyota</option>
          <option>Ford</option>
        </select> -->
        <button type="submit" class="mt-3">Apply Now</button>
        @if(session('success'))
        <script>
          alert("{{ session('success') }}");
        </script>
        @endif
      </form>
    </div>
  </div>

  <!-- Gallery -->
  <div class="gallery-section">
    <h3>PROJECT <span style="color: red;">GALLERY</span></h3>
    <div class="gallery-grid">
      <div class="gallery-item">
        <img src="https://via.placeholder.com/200x130" alt="Wheel Alignment">
        <p>WHEEL ALIGNMENT<br><small>- Worked by John -</small></p>
      </div>
      <div class="gallery-item">
        <img src="https://via.placeholder.com/200x130" alt="Engine Diagnostic">
        <p>ENGINE DIAGNOSTIC<br><small>- Worked by Mike -</small></p>
      </div>
      <div class="gallery-item">
        <img src="https://via.placeholder.com/200x130" alt="Oil Changing">
        <p>OIL CHANGING<br><small>- Worked by EEZY -</small></p>
      </div>
      <div class="gallery-item">
        <img src="https://via.placeholder.com/200x130" alt="Washing Car">
        <p>WASHING CAR<br><small>- Worked by Thomas -</small></p>
      </div>
    </div>
  </div>

</body>

</html>