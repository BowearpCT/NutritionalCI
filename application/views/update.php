<div class="container-fluid">
  <div class="row">
    <h1 class="text-center">ฟอร์มแก้ไขข้อมูล</h1>
  </div>
</div>


<div class="container">
  
  <form class="form-horizontal" id="insert">
    <!-- ชื่อ -->
    <div class="row">
      <p class="col-sm-offset-2 col-sm-4">ชื่อภาษาไทย</p>
      <p class="col-sm-4">ชื่อภาษาอังกฤษ</p>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nameth">ชื่ออาหารหรือวัตถุดิบ</label>
      <div class="col-sm-4" id="input_thname">
        <input type="text" class="form-control" name="thname" id="thname" value="<?php echo $thname?>">
      </div>
      <div class="col-sm-4" id="input_enname">          
        <input type="text" class="form-control" name="enname" id="enname" value="<?php echo $enname?>">
      </div>
    </div>
    <!-- ชื่อ  -->
    <hr>
    <!-- ชนิด -->
    <div class="form-group" >
      <!-- <label class="control-label col-sm-2" for="nameth">ชนิดของอาหาร</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="type" name="type" value="พลังงาน">
      </div> -->
      <label class="control-label col-sm-2" for="nameth">ชนิดของอาหาร</label>
      <?php
        $zero = "0";
        $name_type = array(
          "","ธัญพืชและผลิตภัณฑ์","รากและหัวของพืช","ผลไม้เปลือกแข็ง พืชเมล็ด","ผัก","ผลไม้"
          ,"เนื้อสัตว์","สัตว์น้ำ","ไข่","นม","เครื่องเทสเครื่องปรุง","อาหารปรุงสำเร็จอาหารจานเดียว","ขนมหวาน","อื่นๆ"
        );
        $num = 1;
        for ($i=1;$i<=13;$i++) {
           $number = ($i<10)?$zero.$i:$i;
           $equal = strcmp($number,$type);
           if ($num<=3){
              $num ++;
           ?>
          
                    <div class="radio  col-sm-3">
                      <label><input class="col-sm-2" type="radio"  name="type" value="<?php echo $number?>" <?php echo ($equal==0)?"checked":"";?>>
                        <?php echo $name_type[$i]?>
                      </label>
                    </div>
           <?php }
           else{
              $num =2; 
            ?>
                    <div class="radio col-sm-offset-2 col-sm-3">
                      <label><input class="col-sm-2" type="radio"  name="type" value="<?php echo $number?>" <?php echo ($equal==0)?"checked":"";?>>
                        <?php echo $name_type[$i]?>
                      </label>
                    </div>
              
           
                    

      
        <?php }}?>
      <!-- <div class="radio col-sm-3">
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
      </div> -->
    </div> 
    <!-- ชนิด -->
    <hr>
    <!-- ส่วนประกอบหลัก -->
    <div class="form-group">
    <div class="row">
          <p class="col-sm-offset-2 col-sm-2"> พลังงาน</p>
          <p class="col-sm-2">น้ำ</p>
          <p class="col-sm-2">โปรตีน</p>
          <p class="col-sm-2">ไขมัน</p>
    </div>
    <label class="control-label col-sm-2" for="nameth">ส่วนประกอบหลัก</label>
    
      <div class="col-sm-2">
        <input type="text" class="form-control" id="energy" name="energy" value="<?php echo $energy?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="water" name="water" value="<?php echo $water?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="protein" name="protein" value="<?php echo $protein?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="fat" name="fat" value="<?php echo $fat?>">
      </div>
    </div>

    

    <div class="form-group">
      <div class="row">
        <p class="col-sm-offset-2 col-sm-2"> คาร์โบรไฮเดรต</p>
        <p class="col-sm-2">ใยอาหาร</p>
        <p class="col-sm-2">เถ้า</p>
      </div>
      <div class="col-sm-offset-2 col-sm-2">
        <input type="text" class="form-control" id="carbohydrate" name="carbohydrate" value="<?php echo $carbohydrate?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="fiber" name="fiber" value="<?php echo $fiber?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="ash" name="ash" value="<?php echo $ash?>">
      </div>
    </div>
    <!-- ส่วนประกอบหลัก -->
    <hr>
    
    <!-- แร่ธาตุ -->
    <div class="form-group">
    <div class="row">
      <p class="col-sm-offset-2 col-sm-2">แคลเซียม</p>
      <p class="col-sm-2">ฟอสฟอรัส</p>
      <p class="col-sm-2">เหล็ก</p>
    </div>
    <label class="control-label col-sm-2" for="nameth">แร่ธาตุ</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="calsium" name="calsium" value="<?php echo $calsium?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="phosphorus" name="phosphorus" value="<?php echo $phosphorus?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="iron" name="iron" value="<?php echo $iron?>">
      </div>
    </div>
      <!-- แร่ธาตุ -->
      <hr>
      <!-- วิตามิน -->
    <div class="form-group">
     <div class="row">
          <p class="col-sm-offset-2 col-sm-2">เรตินอย</p>
          <p class="col-sm-2">เบต้าคาโรทีน</p>
          <p class="col-sm-2">วิตามินเอ</p>
          <p class="col-sm-2">วิตามินอี</p>
     </div>
      <label class="control-label col-sm-2" for="nameth">วิตามิน</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="retinol" name="retinol" value="<?php echo $retinol?>">
      </div>
      <div class=" col-sm-2">
        <input type="text" class="form-control" id="betacarotene" name="betacarotene" value="<?php echo $betacarotene?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="vitaminA" name="vitaminA" value="<?php echo $vitaminA?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="vitaminE" name="vitaminE" value="<?php echo $vitaminE?>">
      </div>
      
    </div>

    <div class="form-group">
    <div class="row">
          <p class="col-sm-offset-2 col-sm-2">ธิเอมีน</p>
          <p class="col-sm-2">ลิโบฟลาวิน</p>
          <p class="col-sm-2">นิเอซิน</p>
          <p class="col-sm-2">วิตามินซี</p>
     </div>
      <div class="col-sm-offset-2 col-sm-2">
        <input type="text" class="form-control" id="thiamin" name="thiamin" value="<?php echo $thiamin?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="riboflavin" name="riboflavin" value="<?php echo $riboflavin?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="niacin" name="niacin" value="<?php echo $niacin?>">
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="vitaminC" name="vitaminC" value="<?php echo $vitaminC?>">
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
                    "id" : "<?php echo $id ?>",
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
                $.post("http://localhost:8080/Nutritional/api/master/update", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                    }    
                );
            });
    });
</script>