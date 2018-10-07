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
    

<div class="container ">
  <div class="row">
    <h1 class="text-center">สารอาหารในเมนูของคุณ</h1>
    <h2 class="text-center">คำนวนสารอาหารที่ได้ในสูตรเมนูของคุณ หรือเมนูที่คุณคิดค้นขึ้นเอง</h2>
  </div>
  <div class="row">
  <div class="col-sm-offset-4 col-sm-4" >
    <form id="form">
      <div class="form-group">
        <label for="thname"></label>
        <input type="text" class="form-control" id="thname" name="thname" placeholder="ชื่อไทยหรือชื่ออังกฤษ">
      </div>
      <button type="submit" class="btn btn-primary">ส่ง</button>
    </form>
  </div>
  </div>
</div>


<br><br>
<!-- <div class="container">
  <div class="row">
    <div class="">
      <table class="table table-bordered">
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
        <tbody>
          <tr>
            <td scope="col"><center></td>
            <td scope="col"><center>rice cooked with chicken</td>
            <td scope="col"><center>158</td>
            <td scope="col"><center>63.4</td>
            <td scope="col"><center>5.1</td>
            <td scope="col"><center>3.3</td>
            <td scope="col"><center>26.9</td>
            <td scope="col"><center>(0.2)</td>
            <td scope="col"><center>1.3</td>
            <td scope="col"><center>282</td>
            <td scope="col"><center>69</td>
            <td scope="col"><center>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div> -->
</div>
<br>
<br><br><br><br><br>
<script>
    $(document).ready(function(){
        
        $("#form").submit(function(e){
                e.preventDefault();
                // var formdata = $(this).serializeObject();
                // console.log(formdata);
                var formdata = {
                    "thname" : $("#thname").val(),
                    "enname" : $('#thname').val()
                }
                $.post("http://localhost:8080/Nutritional/api/nutritional/search", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                    }    
                );
            });
    });
</script>


<!-- <div class="container-fluid">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-3">
      <img class="img-circle" src="../assets/images/rawmaterial.jpg" alt="">
    </div>
    <div class="col-sm-offset-1 col-sm-3">
      <img class="img-circle" src="../assets/images/rawmaterial.jpg" alt="">
    </div>
  </div>
</div> -->