
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
<table class="table table-bordered" >
<tr class="w3-hover-#f1f1f1">

        <th bgcolor="#f0f5f5">
        <center>
        <h2 >HISTORY</h2>
        <h2 >บันทึกประวัตืการรับประทานอาหาร</h2>
        <br>
        <img src="https://img.live/images/2018/10/16/medical-history.png" alt="settings.png" border="0" /><br><br>
        <?php echo date('d F  Y') ?>
        <p>Home &diams; Record History </p><br><br>
        <div class="w3-row" w3-container >
            <div class="w3-col m4 w3 w3-center">
                    <label><input type="radio"  name="potion" value="ิbreakfast" checked>มื้อเช้า</label><br>
                    <img src="https://img.live/images/2018/10/16/cereals.png" border="0"  id="food1" />
            </div>
            <div class="w3-col m4 w3 w3-center">
                    <label><input type="radio"  name="potion" value="lunch" checked>มื้อเที่ยง</label><br>
                    <img src="https://img.live/images/2018/10/16/lunch-box.png" border="0"  id="food2"  />
            </div>
            <div class="w3-col m4 w3 w3-center">
                    <label><input type="radio"  name="potion" value="dinner" checked>มื้อเย็น</label><br>
                    <img src="https://img.live/images/2018/10/16/salad1.png"  border="0"   id="food3" />
            </div>
        </div>
        <br><br>
        <form id="save" class="example"  style="margin:auto;max-width:500px">
        <!-- อาหารที่รับประทาน <input  type="text" placeholder="อาหารที่รับประทาน" name="food"  id="food" required >
        ปริมาณ <input  type="text" placeholder="อาหารที่รับประทาน" name="food"  id="food" required ><br><br> -->
        <div class="row">
            <div class="col-md-6">
             <span>อาหารที่รับประทาน</span>
                <input type="text" class="form-control" id="food" placeholder="ชื่ออาหาร">
              </div>
              <div class="col-md-5">
              <span>ปริมาณ/กรัม</span>               
                <div class="input-group">
                  <input type="text" class="form-control" id="volumn"  placeholder="กรัม">
                </div>
              </div>
            </div>
            <br><br>
        <center>
        <button class="button" type="submit" style="vertical-align:middle" id="edit"><span><font color="#FFFFFF" >SAVE</span></button>
        </form>
        </center>
        </th>
</table>

<!-- insert -->
<script>
    $(document).ready(function(){
        $("#save").submit(function(e){
                e.preventDefault();
                var formdata = {
                    "username" : usernamelocal,
                    "date" : "<?php echo date('d-m-Y') ?>",
                    "potion" : $("input[name='potion']:checked").val(),
                    "food" : $("#food").val(),
                    "volumn" :$("#volumn").val()
                }
                $.post("http://localhost:8080/Nutritional/api/history/record", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                         window.location.reload("http://localhost:81/NutritionalCI/welcome/");
                    }    
                );
            });
    });
</script>