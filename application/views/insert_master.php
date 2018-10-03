


<!-- Header -->


<!-- Page content -->
<div class="container-fluid">
  <div class="row">
    <h1 class="text-center">ฟอร์มกรอกข้อมูล</h1>
  </div>
</div>
<div class="container">
  
  <form class="form-horizontal" id="insert">
    <!-- ชื่อ -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="nameth">ชื่ออาหารหรือวัตถุดิบ</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="thname" id="thname" placeholder="ชื่อภาษาไทย">
      </div>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="enname" id="enname" placeholder="ชื่อภาษาอังกฤษ">
      </div>
    </div>
    <!-- ชื่อ --> 
    <hr>
    <!-- ชนิด -->
    <div class="form-group" >
      <!-- <label class="control-label col-sm-2" for="nameth">ชนิดของอาหาร</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="type" name="type" placeholder="พลังงาน">
      </div> -->
      <label class="control-label col-sm-2" for="nameth">ชนิดของอาหาร</label>
      <div class="radio col-sm-3">
        <label><input type="radio"  name="type" value="01" checked>ธัญพืชและผลิตภัณฑ์</label>
      </div>
      <div class="radio col-sm-3">
        <label><input type="radio"  name="type" value="02">รากและหัวของพืช</label>
      </div>
      <div class="radio  col-sm-3">
        <label><input type="radio"  name="type" value="03">ผลไม้เปลือกแข็ง พืชเมล็ด</label>
      </div>
      <div class="radio col-sm-offset-2 col-sm-3">
        <label><input type="radio"  name="type" value="04">ผัก</label>
      </div>
      <div class="radio col-sm-3">
        <label><input type="radio"  name="type" value="05">ผลไม้</label>
      </div>
      <div class="radio col-sm-3">
        <label><input type="radio"  name="type" value="06">เนื้อสัตว์</label>
      </div>
      <div class="radio col-sm-offset-2 col-sm-3">
        <label><input type="radio"  name="type" value="07">สัตว์น้ำ</label>
      </div>
      <div class="radio col-sm-3">
        <label><input type="radio"  name="type" value="08">ไข่</label>
      </div>
      <div class="radio col-sm-3">
        <label><input type="radio"  name="type" value="09">นม</label>
      </div>
      <div class="radio col-sm-offset-2 col-sm-3">
        <label><input type="radio"  name="type" value="10">เครื่องเทสเครื่องปรุง</label>
      </div>
      <div class="radio col-sm-3">
        <label><input type="radio"  name="type" value="11">อาหารปรุงสำเร็จอาหารจานเดียว</label>
      </div>
      <div class="radio col-sm-3">
        <label><input type="radio"  name="type" value="12">ขนมหวาน</label>
      </div>
      <div class="radio col-sm-offset-2 col-sm-3">
        <label><input type="radio"  name="type" value="13">อื่นๆ</label>
      </div>
    </div> 
    <!-- ชนิด -->
    <hr>
    <!-- ส่วนประกอบหลัก -->
    <div class="form-group">
    <label class="control-label col-sm-2" for="nameth">ส่วนประกอบหลัก</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="energy" name="energy" placeholder="พลังงาน">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="water" name="water" placeholder="น้ำ">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="protein" name="protein" placeholder="โปรตีน">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="fat" name="fat" placeholder="ไขมัน">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-2">
        <input type="text" class="form-control" id="carbohydrate" name="carbohydrate" placeholder="คาร์โบรไฮเดรต">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="fiber" name="fiber" placeholder="ใยอาหาร">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="ash" name="ash" placeholder="เถ้า">
      </div>
    </div>
    <!-- ส่วนประกอบหลัก -->
    <hr>
    
    <!-- แร่ธาตุ -->
    <div class="form-group">
    <label class="control-label col-sm-2" for="nameth">แร่ธาตุ</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="calsium" name="calsium" placeholder="แคลเซียม">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="phosphorus" name="phosphorus" placeholder="ฟอสฟอรัส">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="iron" name="iron" placeholder="เหล็ก">
      </div>
    </div>
      <!-- แร่ธาตุ -->
      <hr>
      <!-- วิตามิน -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="nameth">วิตามิน</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="retinol" name="retinol" placeholder="เรตินอย">
      </div>
      <div class=" col-sm-2">
        <input type="text" class="form-control" id="betacarotene" name="betacarotene" placeholder="เบต้าคาโรทีน">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="vitaminA" name="vitaminA" placeholder="วิตามินเอ">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="vitaminE" name="vitaminE" placeholder="วิตามินอี">
      </div>
      
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-2">
        <input type="text" class="form-control" id="thiamin" name="thiamin" placeholder="ทิเอมิน">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="riboflavin" name="riboflavin" placeholder="ลิโบฟลาวิน">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="niacin" name="niacin" placeholder="นิเอซิน">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="vitaminC" name="vitaminC" placeholder="วิตามินซี">
      </div>
    </div>
      <!-- วิตามิน -->


  
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>
</div>
<script>
    $(document).ready(function(){
        
        $("#insert").submit(function(e){
                e.preventDefault();
                // var formdata = $(this).serializeObject();
                // console.log(formdata);
                var formdata = {
                    "thname" : $("#thname").val(),
                    "enname" : $("#enname").val(),
                    "type" : $("input[name='type']:checked").val(),
                    "composition" :{
                        "energy" : $("#energy").val(),
                        "water" : $("#water").val(),
                        "protein" : $("#protein").val(),
                        "fat" : $("#fat").val(),
                        "carbohydrate" : $("#carbohydrate").val(), 
                        "fiber" : $("#fiber").val(),
                        "ash" : $("#ash").val()
                    }   ,    
                    "mineral" : {
                        "calsium" : $("#calsium").val(),
                        "phosphorus" : $("#phosphorus").val(),
                        "iron" : $("#iron").val()
                    },
                    "vitamin" : {
                        "retinol" : $("#retinol").val(),
                        "betacarotene" : $("#betacarotene").val(),
                        "vitaminA" : $("#vitaminA").val(),
                        "vitaminE" : $("#vitaminE").val(),
                        "thiamin" : $("#thiamin").val(),
                        "riboflavin" : $("#riboflavin").val(),
                        "niacin" : $("#niacin").val(),
                        "vitaminC" : $("#vitaminC").val()
                    }
                    
                }
                $.post("http://localhost:8080/Nutritional/api/master/insert", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                    }    
                );
            });
    });
</script>



