<div class="container">
  <div class="row">
        <h1 class="text-center">สารอาหารในเมนูของคุณ</h1>
        <h2 class="text-center">คำนวนสารอาหารที่ได้ในสูตรเมนูของคุณ หรือเมนูที่คุณคิดค้นขึ้นเอง</h2>
  </div>
        <br><q>คำอธิบาย : หากใส่ส่วนผสมในช่อง มากกว่า 1 อย่าง ให้คั่นด้วย , ต.ย. กุ้ง, ปลาหมึก</q><br>
        <center><H3>บอกชนิดของส่วนประกอบของอาหาร</H3></center><br>
  </div>
</div>

<br>
<br>
<form id="form-calculat">
  <div class="container">
    <div class="col-md-2">
      <button type="button" class="btn btn-primary col-md-4 btn-block ">ส่ง</button>
    </div>
<br>
    <div class="row">    
      <div class="col-sm-6"> <!-- //ช่อง1// -->
          <div class="row">
            <div class="col-md-6">
            <label>ธัญพืชและผลิตภัณฑ์</label>
              <input type="text" class="form-control" id="products"  placeholder="ธัญพืช" style="color: #0000FF" >
            </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" id="productscal"  placeholder="กรัม">
                  <span class="input-group-btn">
                    <button class="btn  glyphicon glyphicon-plus" type="button" id="create_one"></button>
                  </span>
              </div>
            </div>
          </div>
          <span id="temp_one"></span>


          <div class="row">
            <div class="col-md-6">
            <label>รากและหัวของพืช</label>
              <input type="text" class="form-control" id="plants"  placeholder="รากและหัวของพืช">
            </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" id="plantscal"  placeholder="กรัม">  
                  <span class="input-group-btn">
                    <button class="btn  glyphicon glyphicon-plus" type="button" id="create_two"></button>
                  </span>
              </div>
            </div>
          </div>
          <span id="temp_two"></span>


          <div class="row">
            <div class="col-md-6">
            <label>ผลไม้เปลือกแข็ง พืชเมล็ด</label>
              <input type="text" class="form-control" id="seedlings"  placeholder="ผลไม้เปลือกแข็ง">
            </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" id="seedlingscal"  placeholder="กรัม">  
                  <span class="input-group-btn">
                    <button class="btn  glyphicon glyphicon-plus" type="button" id="create_three"></button>
                  </span>
              </div>
            </div>
          </div>
          <span id="temp_three"></span>

          <div class="row">
            <div class="col-md-6">
            <label>ผัก</label>
              <input type="text" class="form-control" id="vegetable"  placeholder="ผัก"> 
            </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" id="vegetablecal"  placeholder="กรัม"> 
                  <span class="input-group-btn">
                    <button class="btn  glyphicon glyphicon-plus" type="button" id="create_four"></button>
                  </span>
              </div>
            </div>
          </div>
          <span id="temp_four"></span>

          <div class="row">
            <div class="col-md-6">
              <label>ผลไม้</label>
                <input type="text" class="form-control" id="fruit"  placeholder="ผลไม้">
              </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" id="fruitcal"  placeholder="กรัม">
                  <span class="input-group-btn">
                    <button class="btn  glyphicon glyphicon-plus" type="button" id="create_five"></button>
                  </span>
              </div>
            </div>
          </div>
          <span id="temp_five"></span>

      </div>
      
      <div class="col-sm-6" ><!-- //ช่อง2// -->
          <div class="row">
            <div class="col-md-6">
            <label>เนื้อสัตว์</label>
              <input type="text" class="form-control" id="meat" placeholder="เนื้อสัตว์"> 
            </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" id="meatcal" placeholder="กรัม"> 
                  <span class="input-group-btn">
                    <button class="btn  glyphicon glyphicon-plus" type="button" id="create_six"></button>
                  </span>
              </div>
            </div>
          </div>
          <span id="temp_six"></span>

          <div class="row">
            <div class="col-md-6">
              <label>สัตว์น้ำ</label>
                <input type="text" class="form-control" id="aquatic" placeholder="สัตว์น้ำ">
              </div>
              <div class="col-md-5">
              <label>ปริมาณ</label>                
                <div class="input-group">
                  <input type="text" class="form-control" id="aquaticcal"  placeholder="กรัม">
                    <span class="input-group-btn">
                      <button class="btn  glyphicon glyphicon-plus" type="button" id="create_seven"></button>
                    </span>
                </div>
              </div>
            </div>
            <span id="temp_seven"></span>

             <div class="row">
              <div class="col-md-6">
                <label>ไข่</label>
                  <input type="text" class="form-control" id="egg" placeholder="ไข่"> 
                </div>
                <div class="col-md-5">
                <label>ปริมาณ</label>                
                  <div class="input-group">
                    <input type="text" class="form-control" id="eggcal" placeholder="กรัม"> 
                      <span class="input-group-btn">
                        <button class="btn  glyphicon glyphicon-plus" type="button" id="create_eight"></button>
                      </span>
                  </div>
                </div>
              </div>
              <span id="temp_eight"></span>

          <div class="row">
            <div class="col-md-6">
            <label>นม</label>
              <input type="text" class="form-control" id="milk"  placeholder="นม">
            </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" id="milkcal"  placeholder="มิลลิลิตร">
                  <span class="input-group-btn">
                    <button class="btn  glyphicon glyphicon-plus" type="button" id="create_nine"></button>
                  </span>
              </div>
            </div>
          </div>
          <span id="temp_nine"></span>

        <div class="row">
          <div class="col-md-6">
            <label>เครื่องเทสเครื่องปรุง</label>
              <input type="text" class="form-control" id="seasoningmachine" placeholder="เครื่องเทสเครื่องปรุง"> 
            </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" id="seasoningmachinecal" placeholder="กรัม"> 
                  <span class="input-group-btn">
                    <button class="btn  glyphicon glyphicon-plus" type="button" id="create_ten"></button>
                  </span>
              </div>
            </div>
          </div>
          <span id="temp_ten"></span>

         

      </div>
    </div>
    
  </div>
</form>
<br>

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