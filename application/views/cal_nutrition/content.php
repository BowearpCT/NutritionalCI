<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<br>
<div class="bg-search">
  <div class="container">
    <div class="row">
      <h1 class="text-center">สารอาหารในเมนูของคุณ</h1>
      <h2 class="text-center">คำนวนสารอาหารที่ได้ในสูตรเมนูของคุณ หรือเมนูที่คุณคิดค้นขึ้นเอง</h2>
    </div>
    <div class="row">
      <form id="form-calculat">
        <br><q>คำอธิบาย : หากใส่ส่วนผสมในช่อง มากกว่า 1 อย่าง ให้คั่นด้วย , ต.ย. กุ้ง, ปลาหมึก</q><br>
          <H3><center>บอกชนิดของส่วนประกอบของอาหาร</center></H3><br>
          <div class="container">
            <div class="row justify-content-md-center">
              <table style="border-left-style:dotted; border-left-width:1px">
                <div class="col-sm-3" style="background-color:lavender;">
                  <label>ธัญพืชและผลิตภัณฑ์</label>
                    <input type="text" class="form-control" id="products"  placeholder="ธัญพืช" style="color: #0000FF" >
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label>                
                    <input type="text" class="form-control" id="volume1cal"  placeholder="กรัม">
                  </div>
                  
                  <div class="col-sm-3" style="background-color:lavender;">
                  <label>รากและหัวของพืช</label>
                    <input type="text" class="form-control" id="plants"  placeholder="รากและหัวของพืช">
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label>                
                    <input type="text" class="form-control" id="volume2cal"  placeholder="กรัม">  
                  </div>
              </table>

              <table style="border-left-style:dotted; border-left-width:1px">
                <div class="col-sm-3" style="background-color:lavender;">
                  <label>ผลไม้เปลือกแข็ง พืชเมล็ด</label>
                    <input type="text" class="form-control" id="seedlings"  placeholder="ผลไม้เปลือกแข็ง">
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label>                
                    <input type="text" class="form-control" id="volume3cal"  placeholder="กรัม">  
                  </div>
                  
                  <div class="col-sm-3" style="background-color:lavender;">
                  <label>ผัก</label>
                    <input type="text" class="form-control" id="vegetable"  placeholder="ผัก"> 
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label> 
                    <input type="text" class="form-control" id="volume4cal"  placeholder="กรัม"> 
                  </div>
              </table>

              <table style="border-left-style:dotted; border-left-width:1px">
                <div class="col-sm-3" style="background-color:lavender;">
                  <label>ผลไม้</label>
                    <input type="text" class="form-control" id="fruit"  placeholder="ผลไม้">
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label>                
                    <input type="text" class="form-control" id="volume5cal"  placeholder="กรัม">
                  </div>
                  
                  <div class="col-sm-3" style="background-color:lavender;">
                  <label>เนื้อสัตว์</label>
                    <input type="text" class="form-control" id="meat" placeholder="เนื้อสัตว์"> 
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label> 
                    <input type="text" class="form-control" id="volume6cal" placeholder="กรัม"> 
                  </div>
              </table>
              
              <table style="border-left-style:dotted; border-left-width:1px">
                <div class="col-sm-3" style="background-color:lavender;">
                  <label>สัตว์น้ำ</label>
                    <input type="text" class="form-control" id="aquatic" placeholder="สัตว์น้ำ">
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label>                
                    <input type="text" class="form-control" id="volume7cal"  placeholder="กรัม">
                  </div>
                  
                  <div class="col-sm-3" style="background-color:lavender;">
                  <label>ไข่</label>
                    <input type="text" class="form-control" id="egg"  placeholder="ไข่"> 
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label> 
                    <input type="text" class="form-control" id="volume8cal"  placeholder="กรัม"> 
                  </div>
              </table>

              <table style="border-left-style:dotted; border-left-width:1px">
                <div class="col-sm-3" style="background-color:lavender;">
                  <label>นม</label>
                    <input type="text" class="form-control" id="milk"  placeholder="นม">
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label>                
                    <input type="text" class="form-control" id="volume9cal"  placeholder="มิลลิลิตร">
                  </div>
                  
                  <div class="col-sm-3" style="background-color:lavender;">
                  <label>เครื่องเทสเครื่องปรุง1</label>
                    <input type="text" class="form-control" id="seasoningmachine1" placeholder="เครื่องเทสเครื่องปรุง1"> 
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label> 
                    <input type="text" class="form-control" id="volume10cal" placeholder="กรัม"> 
                  </div>
              </table>

              <table style="border-left-style:dotted; border-left-width:1px">
                <div class="col-sm-3" style="background-color:lavender;">
                  <label>เครื่องเทสเครื่องปรุง2</label>
                    <input type="text" class="form-control" id="seasoningmachine2"  placeholder="เครื่องเทสเครื่องปรุง2">
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label>                
                  <input type="text" class="form-control" id="volume11cal"  placeholder="กรัม">
                  </div>
                  
                  <div class="col-sm-3" style="background-color:lavender;">
                  <label>เครื่องเทสเครื่องปรุง3</label>
                    <input type="text" class="form-control" id="seasoningmachine3"  placeholder="เครื่องเทสเครื่องปรุง3"> 
                  </div>
                  <div class="col-sm-3" style="background-color:lavenderblush;">
                  <label>ปริมาณ</label> 
                    <input type="text" class="form-control" id="volume12cal"  placeholder="กรัม"> 
                  </div>
              </table>
            </div>
              <div class="form-group"><br>
                <button type="submit" id="search" class="btn btn-primary">ส่ง</button>
              </div>
          </div>
      </form>
    </div>
  </div>
</div>



<br><br>
<!-- <div class="container">
  <div class="row">
    <div class="">
      <table class="table table-bordered" id="brand-table">
        <thead>
          <tr>
            <th scope="col" colspan="2"><center>ชื่อ</center></th>
            <th scope="col" ><center>พลังงาน</th>
            <th scope="col" ><center>น้ำ</th>
            <th scope="col" ><center>โปรตีน</th>
            <th scope="col" ><center>ไขมัน</th>
            <th scope="col" ><center>คาร์โบไฮเดรต</th>
            <th scope="col" ><center>ใยอาหาร/(เส้นใยดิบ)</th>
            <th scope="col" ><center>เถ้า</th>
            <th scope="col" ><center>แคลเซียม</th>
            <th scope="col" ><center>ฟอสฟอรัส</th>
            <th scope="col" ><center>ธาตุเหล็ก</th>
          </tr>
 
          <tr>
            <th scope="col"><center>ชื่อไทย</th>
            <th scope="col"><center>ชื่ออังกฤษ</th>
            <th scope="col"><center>กิโลแคลลอลี่</th>
            <th scope="col" colspan="6"><center>กรัม</center> </th>
            <th scope="col" colspan="3"><center>มิลลิกรัม</center> </th>
          </tr>
        </thead>
        
        
        <p id="tbody"></p>
        <tbody>
       
        </tbody>

      </table>
    </div>
  </div>
</div>
</div> -->



