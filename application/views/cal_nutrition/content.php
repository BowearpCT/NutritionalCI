
<nav class="navbar navbar-inverse" id="navbar">
</nav>
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
<div class="container">
    <br>
    <div class="row">     
      <div class="col-sm-6"> <!-- //ช่อง1// -->

        <form id="cerealscal">  
            <div class="row">
              <div class="col-md-6">
              <label>ธัญพืชและผลิตภัณฑ์</label>
                <input type="text" class="form-control"  placeholder="ธัญพืช" name="cereals" style="color: #0000FF"  required >
              </div>
              <div class="col-md-5">
              <label>ปริมาณ</label>                
                <div class="input-group">
                  <input type="text" class="form-control" name="cerealscal" placeholder="กรัม" style="color: #0000FF" required>
                    <span class="input-group-btn">
                      <!-- <button class="btn  glyphicon glyphicon-plus" type="button" id="create_one"></button> -->
                      <button type="submit" class="btn btn-primary col-md-4 btn-block ">ส่ง</button>
                    </span>
                </div>
              </div>
            </div>
            <!-- <span id="temp_one"></span> -->
        </form>

          <form id="namecal">  
            <div class="row">
              <div class="col-md-6">
              <label>รากและหัวของพืช</label>
                <input type="text" class="form-control" name="plants"  placeholder="รากและหัวของพืช" style="color: #0000FF"  required>
              </div>
              <div class="col-md-5">
              <label>ปริมาณ</label>                
                <div class="input-group">
                  <input type="text" class="form-control" name="plantscal"  placeholder="กรัม" style="color: #0000FF"  required>  
                    <span class="input-group-btn">
                      <!-- <button class="btn  glyphicon glyphicon-plus" type="button" id="create_two"></button> -->
                      <button type="submit" class="btn btn-primary col-md-4 btn-block " >ส่ง</button>
                    </span>
                </div>
              </div>
            </div>
            <!-- <span id="temp_two"></span> -->
          </form>

          <form id="namecal">
            <div class="row">
              <div class="col-md-6">
              <label>ผลไม้เปลือกแข็ง พืชเมล็ด</label>
                <input type="text" class="form-control" name="seedlings"  placeholder="ผลไม้เปลือกแข็ง"  style="color: #0000FF"  required>
              </div>
              <div class="col-md-5">
              <label>ปริมาณ</label>                
                <div class="input-group">
                  <input type="text" class="form-control" name"seedlingscal"  placeholder="กรัม"  style="color: #0000FF"  required>  
                    <span class="input-group-btn">
                      <!-- <button class="btn  glyphicon glyphicon-plus" type="button" id="create_three"></button> -->
                      <button type="submit" class="btn btn-primary col-md-4 btn-block " >ส่ง</button>
                    </span>
                </div>
              </div>
            </div>
            <!-- <span id="temp_three"></span> -->
          </form>

          <form id="namecal">
            <div class="row">
              <div class="col-md-6">
              <label>ผัก</label>
                <input type="text" class="form-control" name="vegetable"  placeholder="ผัก"  style="color: #0000FF"  required> 
              </div>
              <div class="col-md-5">
              <label>ปริมาณ</label>                
                <div class="input-group">
                  <input type="text" class="form-control" name="vegetablecal"  placeholder="กรัม"  style="color: #0000FF"  required> 
                    <span class="input-group-btn">
                      <!-- <button class="btn  glyphicon glyphicon-plus" type="button" id="create_four"></button> -->
                      <button type="submit" class="btn btn-primary col-md-4 btn-block " >ส่ง</button>
                    </span>
                </div>
              </div>
            </div>
            <!-- <span id="temp_four"></span> -->
          </form>

          <form id="namecal">
            <div class="row">
              <div class="col-md-6">
                <label>ผลไม้</label>
                  <input type="text" class="form-control" name="fruit"  placeholder="ผลไม้"  style="color: #0000FF"  required>
                </div>
              <div class="col-md-5">
              <label>ปริมาณ</label>                
                <div class="input-group">
                  <input type="text" class="form-control" name="fruitcal"  placeholder="กรัม"  style="color: #0000FF"  required>
                    <span class="input-group-btn">
                      <!-- <button class="btn  glyphicon glyphicon-plus" type="button" id="create_five"></button> -->
                      <button type="submit" class="btn btn-primary col-md-4 btn-block " id="create_five">ส่ง</button>
                    </span>
                </div>
              </div>
            </div>
            <!-- <span id="temp_five"></span> -->
          </form>

        </div>
      
      <div class="col-sm-6" ><!-- //ช่อง2// -->
      
      <form id="namecal">
          <div class="row">
            <div class="col-md-6">
            <label>เนื้อสัตว์</label>
              <input type="text" class="form-control" name="meat" placeholder="เนื้อสัตว์"  style="color: #0000FF"  required> 
            </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" name="meatcal" placeholder="กรัม"  style="color: #0000FF"  required> 
                  <span class="input-group-btn">
                    <!-- <button class="btn  glyphicon glyphicon-plus" type="button" id="create_six"></button> -->
                    <button type="submit" class="btn btn-primary col-md-4 btn-block " id="create_six">ส่ง</button>
                  </span>
              </div>
            </div>
          </div>
          <!-- <span id="temp_six"></span> -->
      </form>
      
      <form id="namecal">
          <div class="row">
            <div class="col-md-6">
              <label>สัตว์น้ำ</label>
                <input type="text" class="form-control" name="aquatic" placeholder="สัตว์น้ำ"  style="color: #0000FF"  required>
              </div>
              <div class="col-md-5">
              <label>ปริมาณ</label>                
                <div class="input-group">
                  <input type="text" class="form-control" name="aquaticcal"  placeholder="กรัม"  style="color: #0000FF"  required>
                    <span class="input-group-btn">
                      <!-- <button class="btn  glyphicon glyphicon-plus" type="button" id="create_seven"></button> -->
                      <button type="submit" class="btn btn-primary col-md-4 btn-block " id="create_seven">ส่ง</button>
                    </span>
                </div>
              </div>
            </div>
            <!-- <span id="temp_seven"></span> -->
      </form>

      <form id="namecal">
             <div class="row">
              <div class="col-md-6">
                <label>ไข่</label>
                  <input type="text" class="form-control" name="egg" placeholder="ไข่"  style="color: #0000FF"  required> 
                </div>
                <div class="col-md-5">
                <label>ปริมาณ</label>                
                  <div class="input-group">
                    <input type="text" class="form-control" name="eggcal" placeholder="กรัม"  style="color: #0000FF"  required> 
                      <span class="input-group-btn">
                        <!-- <button class="btn  glyphicon glyphicon-plus" type="button" id="create_eight"></button> -->
                        <button type="submit" class="btn btn-primary col-md-4 btn-block " id="create_eight">ส่ง</button>
                      </span>
                  </div>
                </div>
              </div>
              <!-- <span id="temp_eight"></span> -->
      </form>

      <form id="namecal">
          <div class="row">
            <div class="col-md-6">
            <label>นม</label>
              <input type="text" class="form-control" name="milk"  placeholder="นม"  style="color: #0000FF"  required>
            </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" name="milkcal"  placeholder="มิลลิลิตร"  style="color: #0000FF"  required>
                  <span class="input-group-btn">
                    <!-- <button class="btn  glyphicon glyphicon-plus" type="button" id="create_nine"></button> -->
                    <button type="submit" class="btn btn-primary col-md-4 btn-block " id="create_nine">ส่ง</button>
                  </span>
              </div>
            </div>
          </div>
          <!-- <span id="temp_nine"></span> -->
      </form>

      <form id="namecal">
        <div class="row">
          <div class="col-md-6">
            <label>เครื่องเทสเครื่องปรุง</label>
              <input type="text" class="form-control" name="seasoningmachine" placeholder="เครื่องเทสเครื่องปรุง"  style="color: #0000FF"  required> 
            </div>
            <div class="col-md-5">
            <label>ปริมาณ</label>                
              <div class="input-group">
                <input type="text" class="form-control" name="seasoningmachinecal" placeholder="กรัม"  style="color: #0000FF"  required> 
                  <span class="input-group-btn">
                    <!-- <button class="btn  glyphicon glyphicon-plus" type="button" id="create_ten"></button> -->
                    <button type="submit" class="btn btn-primary col-md-4 btn-block " id="create_ten">ส่ง</button>
                  </span>
              </div>
            </div>
          </div>
          <!-- <span id="temp_ten"></span> -->
      </form>
      </div>
    </div>
  </div>
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