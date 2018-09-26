
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Group 3</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="assets/images/banner.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">โภชนาการอาหารไทย</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <a href=""><img src="assets/images/padthai.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750"></a>
    </div>

    <div class="w3-col m6 w3-padding-large">
      <a href=""><h1 class="w3-center">ค้นหาอาหาร</h1></a><br>
      <h5 class="w3-center">ข้อมูลของอาหารไทยปรุงรสสำเร็จและอาหารจานเดี่ยว</h5>
      
      
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <a href=""><h1 class="w3-center">สารอาหารในเมนูของคุณ</h1></a><br>
      <h4>คำนวนสารอาหารที่ได้ในสูตรเมนูของคุณ หรือเมนูที่คุณคิดค้นขึ้นเอง</h4>
      
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <a href="" ><img src="assets/images/rawmaterial.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%"></a>
    </div>
  </div>

  <hr>

  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <a href="" ><img src="assets/images/padthai.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750"></a>
    </div>

    <div class="w3-col m6 w3-padding-large">
      <a href=""><h1 class="w3-center">ประวัติการรับประธานอาหารของคุณ</h1></a><br>
      <h5 class="w3-center"></h5>
      
      
    </div>
  </div>
  
  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
    <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>
