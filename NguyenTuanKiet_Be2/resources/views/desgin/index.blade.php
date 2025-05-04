<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Car Category</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    body {
      background-color: #f8f8f8;
      color: #333;
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

    .nav-list input[type="text"] {
      padding: 5px;
      border-radius: 4px;
      border: none;
    }

    .nav-list button {
      padding: 5px 10px;
      margin-left: 5px;
      border: none;
      background-color: white;
      border-radius: 4px;
      cursor: pointer;
    }

    /* Slider */
    .slider-container {
      position: relative;
      width: 100%;
      height: 400px;
      overflow: hidden;
    }

    .slider-wrapper {
      position: relative;
      width: 100%;
      height: 100%;
    }

    .slider-container {
      position: relative;
      width: 100%;
      height: 550px;
      overflow: hidden;
      margin-bottom: 20px;
    }

    .slider-wrapper {
      position: relative;
      width: 100%;
      height: 100%;
    }

    .slider-image {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Giúp ảnh vừa khung mà không bị méo */
      opacity: 0;
      transition: opacity 1s ease;
      border-radius: 10px;
    }

    .slider-image.active {
      opacity: 1;
    }

    .slider-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      font-size: 30px;
      padding: 8px 12px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
      z-index: 10;
    }

    .slider-btn.prev {
      left: 10px;
    }

    .slider-btn.next {
      right: 10px;
    }


    .slider-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      font-size: 30px;
      padding: 8px 12px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
      z-index: 10;
    }

    .slider-btn.prev {
      left: 10px;
    }

    .slider-btn.next {
      right: 10px;
    }

    .slider {
      position: relative;
      width: 100%;
      height: 400px;
      overflow: hidden;
    }

    .slider-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .dots {
      text-align: center;
      margin-top: -30px;
      position: relative;
      z-index: 1;
    }

    .dot {
      height: 12px;
      width: 12px;
      margin: 0 5px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
    }

    .dot.active {
      background-color: #333;
    }

    /* Product Section */
    .products {
      padding: 40px 20px;
      text-align: center;
    }

    .products h2 {
      margin-bottom: 30px;
      font-size: 28px;
    }

    .product-list {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .product-card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 250px;
      padding: 15px;
      text-align: center;
    }

    .product-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 6px;
    }

    .product-card h3 {
      margin: 10px 0 5px;
      font-size: 18px;
    }

    .product-card p {
      margin: 5px 0;
    }

    .product-card button {
      padding: 8px 12px;
      margin: 5px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .product-card button:first-of-type {
      background-color: black;
      color: white;
    }

    .product-card button:last-of-type {
      background-color: #ddd;
    }

    /* Footer */
    .footer {
      background-color: white;
      padding: 20px;
      text-align: right;
      font-weight: bold;
      color: green;
      font-size: 18px;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar">
    <ul class="nav-list">
      <li><a href="">Home</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="{{ route('appointment')  }}">Make an Appointment</a></li>
      <li><a href="#">Shopping Cart</a></li>
      <li><a href="#">List Car</a></li>
      <li><a href="#">Customer Support</a></li>
      <li><a href="#">Introduce</a></li>
      <li><input type="text" placeholder="Search..."> <button>🔍</button></li>
    </ul>
  </nav>

  <!-- Slider -->
  <!-- Slider (có nút chuyển ảnh) -->
  <!-- Slider -->
  <div class="slider-container">
    <div class="slider-wrapper">
      <img class="slider-image active" src="{{ asset('image/bmw.jpg') }}" alt="bmw">
      <img class="slider-image" src="{{ asset('image/xedep4kk.jpg') }}" alt="xedep4kk">
      <img class="slider-image" src="{{ asset('image/xedep4kkk.jpg') }}" alt="xedep4kkk">

    </div>
    <button class="slider-btn prev" onclick="changeSlide(-1)">❮</button>
    <button class="slider-btn next" onclick="changeSlide(1)">❯</button>
  </div>


  <!-- Product Section -->
  <section class="products">
    <h2>Product Hot</h2>
    <div class="product-list">
      @foreach($products as $product)
      <div class="product-card">
        <img src="{{ asset('image/'.$product->Image) }}" alt="{{ $product->Name_Car }}">
        <h3>{{ $product->Name_Car}}</h3>
        <p>Price: {{ $product->Price}}</p>
        <p>Evaluate: ⭐⭐⭐⭐⭐</p>
        <button>View</button>
        <button>Compare</button>
      </div>
      @endforeach


  </section>

  <!-- Footer Contact -->
  <footer class="footer">
    <p>📞 0123456789</p>
  </footer>

  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
  <df-messenger
    intent="WELCOME"
    chat-title="ChatBox"
    agent-id="a197d836-209a-4ff8-b1a4-643aacdd5ebf"
    language-code="vi"></df-messenger>

  <!-- Chat icon -->
  <!-- <div id="chat-icon" onclick="toggleChatBox()">💬</div> -->

  <!-- Chat box -->
  <!-- Chat box -->
  <!-- ĐỔI TỪ form thành div -->
  <!-- <div id="chat-box">
    <div class="chat-header">🤖 Xin chào, bạn cần gì ở tôi?</div>
    <div class="chat-content" id="chat-content">
      <div class="bot-message">Xin chào, bạn cần gì ở tôi ?</div>
      <button type="button" onclick="sendQuickMessage('Tôi cần giao dịch xe cũ')">Tôi cần giao dịch xe cũ</button>
      <button type="button" onclick="sendQuickMessage('Tôi cần bạn giới thiệu về chiếc xe này...')">Tôi cần bạn giới thiệu về
        chiếc xe này...</button>
    </div>
    <div class="chat-input">
      <input type="text" id="user-input" placeholder="gửi văn bản của bạn tại đây..." onkeypress="handleKeyPress(event)" />
      <button type="button" onclick="sendMessage()">➤</button>
    </div>
  </div> -->

  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slider-image');

    function changeSlide(step) {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + step + slides.length) % slides.length;
      slides[currentSlide].classList.add('active');
    }

    // Tự động chuyển ảnh mỗi 5 giây
    setInterval(() => {
      changeSlide(1);
    }, 5000);
  </script>
  <script src="{{ asset('js/home.js') }}"></script>

</body>

</html>