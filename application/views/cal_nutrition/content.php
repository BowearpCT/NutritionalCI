<!-- <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    
    </style> -->
    <br><br>
<div class="bg-search">
  <div class="container">
    <div class="row">
      <h1 class="text-center">สารอาหารในเมนูของคุณ</h1>
      <h2 class="text-center">คำนวนสารอาหารที่ได้ในสูตรเมนูของคุณ หรือเมนูที่คุณคิดค้นขึ้นเอง</h2>
    </div>
    <div class="row">

     <div class="card-tools one">
      <form id="form-calculat">
        <div class="centercheckbox">
          <div class="card-body black bg-light">
            <div class="row">
              <div class="col-sm-offset-0 col-sm-3" >
                <div class="form-group">
                  <label for="thname"><div>ชนิดของอาหาร</div></label>
                  <input type="text" class="form-control" id="thname" name="thname" placeholder="ชื่อไทยหรือชื่ออังกฤษ">
                </div>
              </div>
            </div>
            <H3><center>บอกส่วนประกอบของอาหาร</center></H3><br>
            <q>คำอธิบาย : หากใส่ส่วนผสมในช่อง มากกว่า 1 อย่าง ให้คั่นด้วย , ต.ย. กุ้ง, ปลาหมึก</q>

<!-- <div class="row"><br><br>
  <label>ธัญพืช      กรัม</label><br>
  <input class="col-sm-offset-0 col-md-2" type= “text" name= “fullname" id= “fullname" /> : กรัม 
  <label>ธัญพืช</label><br>
  <input class="col-sm-offset-1 col-md-2" type= “text" name= “fullname" id= “fullname" /> : กรัม 
  <label>ธัญพืช</label><br>
  <input class="col-sm-offset-1 col-md-2" type= “text" name= “fullname" id= “fullname" /> : กรัม 
  <label>รากและหัวของพืช</label><br>
  <input class="col-sm-offset-1 col-md-2" type= “text" name= “fullname" id= “fullname" /> : กรัม 
  </div> -->
  <!-- <br>
  <div class="col-sm-offset-0 col-md-2">
  <input class="form-control" type="text" name="Cereal" id="Cereal" value="Mickey">   กรัม <br>
  <input class="form-control" type="text" name="Roots" id="Roots" value="Mouse">  กรัม <br>
  <input class="form-control" type="text" name="fruitHardshell" id="fruitHardshell" value="Mickey">  กรัม <br>
  <input class="form-control" type="text" name="Vegetable" id="Vegetable" value="Mouse">  กรัม <br>
  <input class="form-control" type="text" name="FirstName" id="Cereal" value="Mickey">  กรัม <br>
  <input class="form-control" type="text" name="LastName" id="Cereal" value="Mouse">  กรัม <br>
  </div> -->



            <div class="row">
            
              <div class="col-sm-offset-0 col-md-2">
                <label>ธัญพืช</label>
                <input type="text" class="form-control" id="name1" name="name1" placeholder="ธัญพืช" style="color: #0000FF" >                     
                <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม"> 
              </div>
              <div class="col-sm-offset-1 col-md-2">
                <div class="form-group">
                <label>รากและหัวของพืช</label>
                <input type="text" class="form-control" id="name2" name="name2" placeholder="รากและหัวของพืช"> 
                <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม">     
                </div>
              </div>
              <div class="col-sm-offset-1 col-md-2">
                <div class="form-group">
                <label>ผลไม้เปลือกแข็ง</label>
                <input type="text" class="form-control" id="name3" name="name3" placeholder="ผลไม้เปลือกแข็ง">                
                <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม">   
              </div>
              </div>  
              <div class="col-sm-offset-1 col-md-2">
                <div class="form-group">
                <label>ผัก</label>
                <input type="text" class="form-control" id="name4" name="name4" placeholder="ผัก">                        
                <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม">   
              </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-offset-0 col-md-2">
                <div class="form-group">
                  <label>ผลไม้</label>
                  <input type="text" class="form-control" id="name5" name="name5" placeholder="ผลไม้">                        
                  <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม"> 
                </div>
              </div>
              <div class="col-sm-offset-1 col-md-2">
                <div class="form-group">
                <label>เนื้อสัตว์</label>
                <input type="text" class="form-control" id="name6" name="name6" placeholder="เนื้อสัตว์">                
                <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม"> 
                </div>
              </div>  
              <div class="col-sm-offset-1 col-md-2">
                <div class="form-group">
                <label>สัตว์น้ำ</label>
                <input type="text" class="form-control" id="name7" name="name7" placeholder="สัตว์น้ำ">                        
                <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม"> </div>
              </div>
              <div class="col-sm-offset-1 col-md-2">
                <div class="form-group">
                <label>ไข่</label>
                <input type="text" class="form-control" id="name8" name="name8" placeholder="ไข่">                        
                <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม"> </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-offset-0 col-md-2">
                <div class="form-group">
                  <label>เครื่องเทสเครื่องปรุง1</label>
                  <input type="text" class="form-control" id="name9" name="name9" placeholder="เครื่องเทสเครื่องปรุง1">                        
                  <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม"> </div>
              </div>
              <div class="col-sm-offset-1 col-md-2">
                <div class="form-group">
                <label>เครื่องเทสเครื่องปรุง2</label>
                <input type="text" class="form-control" id="name10" name="name10" placeholder="เครื่องเทสเครื่องปรุง2">                       
                <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม"> </div>
              </div>
              <div class="col-sm-offset-1 col-md-2">
                <div class="form-group">
                <label>เครื่องเทสเครื่องปรุง3</label>
                <input type="text" class="form-control" id="name11" name="name11" placeholder="เครื่องเทสเครื่องปรุง3">                        
                <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม"> </div>
              </div>
              <div class="col-sm-offset-1 col-md-2">
                <div class="form-group">
                  <label>เครื่องเทสเครื่องปรุง4</label>
                  <input type="text" class="form-control" id="name12" name="name12" placeholder="เครื่องเทสเครื่องปรุง">                        
                  <label>ปริมาณ</label>                
                <input type="text" class="form-control" id="name2" name="name2" placeholder="กรัม"> </div>
              </div>
            </div>
                <div class="form-group">
                <button type="submit" id="btn-calculat" class="btn btn-primary">ส่ง</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div>


<br><br>
<div class="container">
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
</div>



