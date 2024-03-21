@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homespot</title>
  <link href="image/tittle.png" rel="shortcut icon">
  <style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
  }
  
  .navbar {
    background-color: #ffffff;
    color: #000000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    font-weight: bold;
  }
  
  .logo img {
    height: auto;
    width: auto;
  }
  
  .menu-left {
    list-style-type: none;
    margin: 0;
    padding: 0;
    padding-left: 30px;
    display: flex;
  }
  
  .menu-left li {
    margin-right: 20px;
  }
  
  .menu-left li:last-child {
    margin-right: 0;
  }
  
  .menu-left li a {
    color: #000000;
    text-decoration: none;
  }
  
  .login-button {
    margin-left: auto;
  }
  
  .login {
    padding: 10px 20px;
    background-color: #0066ff;
    color: #ffffff;
    text-decoration: none;
    border-radius: 5px;
    border: 3px solid #0066ff;
  }
  
  .login:hover {
    background-color: #777;
  }
  
  .dropdown {
    position: relative;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 120px;
    z-index: 1;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  .dropdown-content a {
    color: #000000;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {
    background-color: #555;
  }
  .heading {
    background-image: url(image/cover.png);
    background-repeat:no-repeat ;
    background-position: center;
    background-size: cover;
    color: rgb(255, 255, 255);
    height: 350px;
    text-align: center;
    margin: 0;
    padding: 45px;
    font-size: 30px;
    font-weight: bold;
    
  }
  .heading p{
    padding-top: 60px;
    margin: 0px;
  }

  .pencarian {
    background-color: rgb(255, 255, 255);
    border-radius: 6px;
    display: flex;
    width: 50%;
    margin: auto;
    margin-top: 40px;
    text-align: center;
    padding: auto ;
  }
  .pencarian input {
    width: 100%;
    margin: 10px;
    border-radius: 5px;
    padding: 10px;
    border:3px solid #0066ff

  }
  .container {
    width: 80%;
    margin: auto;
    overflow: hidden;
  }
  .header {
    text-align: center;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    
  }
  .property-list {
    display: flex;
    justify-content: space-between;
  }
  .property {
    border: 1px solid #ddd;
    border-radius: 5px;
    border: none;
    padding: 10px;
    width: 15%;
  }
  .property img {
    width: 100%;
    height: auto;
  }
  .price {
    color: green;
    font-weight: bold;
  }
  .book-now {
    color: #0066ff;
    padding: 10px;
    text-decoration: none;
    display: block;
    margin-top: 10px;
    border-radius: 5px;
    font-weight: bold;
  }
  .navigation {
    text-align: center;
    margin-top: 20px;
    text-decoration: none;
  }
  .view-all {
    color:#0066ff;
    padding: 10px;
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;
    font-weight: bold;
  }
 

  .property-container {
    display: flex;
    flex-wrap: wrap;
    justify-content:center;
    padding: 20px;
  }
  .property-card {
    box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.445);
    transition: 0.3s;
    width: 20%; /* Adjust width for 2 properties per row */
    margin-bottom: 20px;
    margin-right: 100px;
    margin-left: 100px;
    height: 40%;
    border-radius: 10px;
  }
  .property-card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  .property-image {
    width: 100%;
    height: auto;
  }
  .property-info {
    padding: 15px;
  }
  .property-title {
    font-size: 18px;
    font-weight: bold;
  }
  .property-price {
    color: green;
  }
  .book-now-btn {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: block;
    margin-top: 10px;
  }

  footer {
    background-color: #003366;
    color: white;
    padding: 20px 0;
  }
  
  .footer-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
  }
  
  section {
    max-width: 200px;
  }
  
  .logos img {
    height: auto;
    width: auto;
    max-width: 100px;
    max-height: 100px;
  }
   
  
  </style>
</head>
<body>

<nav class="navbar">
<div class="logo">
   <a href="index.html"><img src="image/logonavbar.png" alt="Logo" ></a>
</div>
  <ul class="menu-left">
    <li class="dropdown">
        <a href="#" class="dropbtn">Kota Pilihan</a>
        <div class="dropdown-content">
          <a href="#">Jakarta</a>
          <a href="#">Semarang</a>
          <a href="#">Yogyakarta</a>
          <a href="#">Makasar</a>
          <a href="#">Medan</a>
          <a href="#">bandung</a>
        </div>
      </li>
    <li><a href="#">Beli</a></li>
    <li><a href="#">Tentang Kami</a></li>
    <li><a href="#">Asuransi</a></li>
  </ul>
  <div class="login-button">
    <a href="dashboard.blade.php"><button class="login"> Daftar/Login</button></a>
  </div>
</nav>
<div class="heading">
    <p>Solusi mudah untuk menemukan rumah impian</p>
    <div class="pencarian">
      <input type="text" id="username" name="username" placeholder="cari lokasi, nama properti, nama devloper">
    </div>
    </div>
</div>

<div class="container">
  <div class="header">
    <h1>Ayo Cari rumah Impian mu sekarang</h1>
    <a href="#" class="view-all">LIHAT SEMUA</a>
  </div>
  
  <div class="property-list">
    <div class="property">
      <img src="image/rumah1.png" alt="Cluster Sanjaya Lembang">
      <h2>Cluster Sanjaya Lembang</h2>
      <p class="price">RP1.2 M - RP3.2 M</p>
      <a href="#" class="book-now">BOOK NOW</a>
    </div>
    <div class="property">
      <img src="image/rumah2.png" alt="Apartemen Grand Wijaya">
      <h2>Apartemen Grand Wijaya</h2>
      <p class="price">RP320 JT - RP1.3 M</p>
      <a href="#" class="book-now">BOOK NOW</a>
    </div>
    <div class="property">
      <img src="image/rumah3.png" alt="Cluster Medan Untomen">
      <h2>Cluster Medan Untomen</h2>
      <p class="price">RP1.1 M - RP2.2 M</p>
      <a href="#" class="book-now">BOOK NOW</a>
    </div>
    <div class="property">
      <img src="image/rumah3.png" alt="Cluster Medan Untomen">
      <h2>Cluster Medan Untomen</h2>
      <p class="price">RP1.1 M - RP2.2 M</p>
      <a href="#" class="book-now">BOOK NOW</a>
    </div>
    <div class="property">
      <img src="image/rumah3.png" alt="Cluster Medan Untomen">
      <h2>Cluster Medan Untomen</h2>
      <p class="price">RP1.1 M - RP2.2 M</p>
      <a href="#" class="book-now">BOOK NOW</a>
    </div>
  </div>
  
  <div class="navigation">
    <a href="#" class="previous" style="text-decoration: none;">Previous</a>
    <a href="#" class="next" style="text-decoration: none;">Next</a>
  </div>
  <div class="header">
    <h1>Masih Kurang Yakin? Ayo Jelajahi dengan virtual </h1> 
    <a href="#" class="view-all">LIHAT SEMUA</a>
  </div>
</div>

<div class="property-container">
  <!-- Property 1 -->
  <div class="property-card">
    <img src="image/cluster1.png" alt="Property 1" class="property-image">
    <div class="property-info">
      <div class="property-title">Cluster Sanjaya Lembang</div>
      <div class="property-price">RP1.2 M - RP3.2 M</div>
      <a href="#" class="book-now-btn">BOOK NOW</a>
    </div>
  </div>

  <div class="property-card">
    <img src="image/cluster1.png" alt="Property 2" class="property-image">
    <div class="property-info">
      <div class="property-title">Apartemen Grand Wijaya</div>
      <div class="property-price">RP320 JT - RP1.3 M</div>
      <a href="#" class="book-now-btn">BOOK NOW</a>
    </div>
  </div>
</div>
<div class="property-container">
 
  <div class="property-card">
    <img src="image/cluster2.png" alt="Property 1" class="property-image">
    <div class="property-info">
      <div class="property-title">Cluster Sanjaya Lembang</div>
      <div class="property-price">RP1.2 M - RP3.2 M</div>
      <a href="#" class="book-now-btn">BOOK NOW</a>
    </div>
  </div>

  <div class="property-card">
    <img src="image/cluster3.png" alt="Property 2" class="property-image">
    <div class="property-info">
      <div class="property-title">Apartemen Grand Wijaya</div>
      <div class="property-price">RP320 JT - RP1.3 M</div>
      <a href="#" class="book-now-btn">BOOK NOW</a>
    </div>
  </div>
</div>


<footer>
  <div class="footer-container">
    <section>
      <h4>Kantor Pusat</h4>
      <p>PT Beringin Tri Investama (BIT)<br>Indoland Tower Lt.5<br>Jalan Jenderal Sudirman No. 32<br>Jakarta Pusat 10220 Indonesia</p>
    </section>
    <section>
      <h4>Dukungan</h4>
      <p>Kebijakan Privasi<br>Syarat dan Ketentuan</p>
    </section>
    <section>
      <h4>Hubungi Kami</h4>
      <p>T: +62-819-8888-1867<br>E: support@homespot.id</p>
    </section>
    <section class="logos">
      <h4>Homespot by:</h4>
      <img src="image/logobit.png" alt="BIT Logo">
      <h4>Powered by:</h4>
      <img src="image/brilogo.png" alt="BRI Logo">
    </section>
  </div>
</footer>
</body>
</html>
@endsection