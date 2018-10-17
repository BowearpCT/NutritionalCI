
<!-- <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body> -->
<script>
  var usernamelocal = localStorage.getItem("usernamelocal");
  var namelocal = localStorage.getItem("namelocal");
  if(usernamelocal==null  ){
    alert("กรุณาเข้าสู่ระบบก่อนทำการบันทึกข้อมูลและเรียกดูประวัติ")
    window.location.href = "<?php echo base_url() ?>/welcome/login";
  }
</script>
<nav class="navbar navbar-inverse" id="navbar">
</nav>


<table class="table table-bordered">
<tr class="w3-hover-">

        <th bgcolor="#f0f5f5">
        <center>
        <h2>HISTORY</h2>
        <h3 >ประวัติการรับประทานอาหารของคุณ</h3>
        <p>Home &diams; History</p>
        <br>
<div class="w3-row-container">
  <div class="w3-col s5 ">
  บันทึกการรับประทานอาหาร<br>
  <a href="https://img.live/image/bgKbr"><img src="https://img.live/images/2018/10/17/save.png" alt="save.png" border="0" /></a>
  </div>
  </div>
  <div class="w3-col s2 ">
    <img src="https://img.live/images/2018/10/17/double-arrow.png" alt="double-arrow.png" border="0" /></div>
  <div class="w3-col s5 ">
     ดูประวัติการรับประทานอาหาร<br>
     <a href="https://img.live/image/bgiCF"><img src="https://img.live/images/2018/10/17/notebook2.png" alt="notebook2.png" border="0" /></a>
    
</div>
        </center>
        </th>

</table><br><br>













