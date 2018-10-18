
<!-- <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body> -->
<style>
table {
  font-size:medium;
  text-align:center;
}
</style>
<script>
  var usernamelocal = localStorage.getItem("usernamelocal");
  var namelocal = localStorage.getItem("namelocal");
  var lastnamelocal = localStorage.getItem("lastnamelocal");
  
  if(usernamelocal==null  ){
    alert("กรุณาเข้าสู่ระบบก่อนทำการบันทึกข้อมูลและเรียกดูประวัติ")
    window.location.href = "<?php echo base_url() ?>/welcome/login";
  }
</script>
<nav class="navbar navbar-inverse" id="navbar">
</nav>

<table class="table table-bordered">
<tr class="w3-hover">

        <th bgcolor="#f0f5f5">
        <center>
        <h2>HISTORY</h2>
        <h3 >ประวัติการรับประทานอาหารของคุณ</h3>
        <br>
        <img src="https://img.live/images/2018/10/06/fork.png" alt="fork.png" border="0" /><br><br>
        <p>Home &diams; History</p><br>
        <div class="container">
          <div class="row">
          <div class="col">
          <form id="find">
            <div class="input-group col-sm-3">
              <input type="date" id="date" class="form-control" >
              <div class="input-group-btn">
                <button class="btn btn-info" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>
          </div>
          </div>
        </div>
                  
        </center>
        </th>

</table>

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table">
      <thead>
          <tr class="info"> 
            <th rowspan="2">วันที่</th>
            <th rowspan="2">มื้อ</th>
            <th colspan="2"><center>ชื่อ</center> </th>
            <th rowspan="2">ชนิด</th>
            <th >พลังงาน</th>
            <th >น้ำ</th>
            <th >โปรตีน</th>
            <th >ไขมัน</th>
            <th >คาร์โบไฮเดรต</th>
            <th >ใยอาหาร/(เส้นใยดิบ)</th>
            <th >เถ้า</th>
            <th >แคลเซียม</th>
            <th >ฟอสฟอรัส</th>
            <th >ธาตุเหล็ก</th>
            <th >เรตินอย</th>
            <th >เบต้าคาโรทีน</th>
            <th >วิตามินA</th>
            <th >วิตามินE</th>
            <th >ธิเอมิน</th>
            <th >ลิโบฟลาวิน</th>
            <th >นีเอซิน</th>
            <th >วิตามินC</th>
            
          </tr>
          <tr class="info">
            <th>ชื่อไทย</th>
            <th>ชื่ออังกฤษ</th>
            <th>กิโลแคลลอลี่</th>
            <th colspan="6"><center> กรัม</center> </th>
            <th colspan="3"><center>มิลลิกรัม</center> </th>
            <th colspan="3"><center>ไมโครกรัม</center> </th>
            <th colspan="5"><center>มิลลิกรัม</center> </th>    
          </tr>
        </thead>
        <tbody id="result">
        </tbody>   
        <tbody id="result2">
        </tbody>
    </table>
  </div>
</div>


<script>
    $(document).ready(function(){
        let result = $("#result");
        var formdata = {
            "username" : usernamelocal,
            // "startDate" : "",
            // "toDate" : ""
        }
        $.post("http://localhost:8080/Nutritional/api/history/findAll", JSON.stringify(formdata),
          function (data, textStatus, jqXHR) {
              var listOfResult = data.data;
              var strResult = "";
              
                  $.each(listOfResult , function (index ,value){
                      strResult +='<tr>'
                                +'<td class="text-center">' +value.date+'</td>'
                                +'<td class="text-center">' +value.potion+'</td>'
                                
                                +'<td class="text-center">' +value.food.thname+'</td>'
                                +'<td class="text-center">' +value.food.enname+'</td>'
                                +'<td class="text-center">' +value.food.type+'</td>'
                                +'<td class="text-center">' +value.food.composition.energy+'</td>'
                                +'<td class="text-center">' +value.food.composition.water+'</td>'
                                +'<td class="text-center">' +value.food.composition.protein+'</td>'
                                +'<td class="text-center">' +value.food.composition.fat+'</td>'
                                +'<td class="text-center">' +value.food.composition.carbohydrate+'</td>'

                                +'<td class="text-center">' +value.food.composition.fiber+'</td>'
                                +'<td class="text-center">' +value.food.composition.ash+'</td>'
                                +'<td class="text-center">' +value.food.mineral.calsium+'</td>'
                                +'<td class="text-center">' +value.food.mineral.phosphorus+'</td>'
                                +'<td class="text-center">' +value.food.mineral.iron+'</td>'
                                +'<td class="text-center">' +value.food.vitamin.retinol+'</td>'
                                +'<td class="text-center">' +value.food.vitamin.betacarotene+'</td>'
                                +'<td class="text-center">' +value.food.vitamin.vitaminA+'</td>'
                                +'<td class="text-center">' +value.food.vitamin.vitaminE+'</td>'
                                +'<td class="text-center">' +value.food.vitamin.thiamin+'</td>'
                                +'<td class="text-center">' +value.food.vitamin.riboflavin+'</td>'
                                +'<td class="text-center">' +value.food.vitamin.niacin+'</td>'
                                +'<td class="text-center">' +value.food.vitamin.vitaminC+'</td>'
                                
                                +'</tr>'
                    });
                    result.html(strResult);
                    // alert(data.message);
                }    
            );
            
        // });
    });
</script>
<script>
    $(document).ready(function(){
      $("#find").submit(function(e){
        e.preventDefault();
        $("#result").remove("");
        var formdata = {
        "username" : usernamelocal,
        "startDate" : $("#date").val()
        }
        var result = $("#result2");
        $.post("http://localhost:8080/Nutritional/api/history/find", JSON.stringify(formdata),
          function (data, textStatus, jqXHR) {
            var listOfResult = data.data;
            var strResult = "";
            $.each(listOfResult, function(index , value){
              strResult +='<tr>'
                        +'<td class="text-center">' +value.date+'</td>'
                        +'<td class="text-center">' +value.potion+'</td>'
                                
                        +'<td class="text-center">' +value.food.thname+'</td>'
                        +'<td class="text-center">' +value.food.enname+'</td>'
                        +'<td class="text-center">' +value.food.type+'</td>'
                        +'<td class="text-center">' +value.food.composition.energy+'</td>'
                        +'<td class="text-center">' +value.food.composition.water+'</td>'
                        +'<td class="text-center">' +value.food.composition.protein+'</td>'
                        +'<td class="text-center">' +value.food.composition.fat+'</td>'
                        +'<td class="text-center">' +value.food.composition.carbohydrate+'</td>'

                        +'<td class="text-center">' +value.food.composition.fiber+'</td>'
                        +'<td class="text-center">' +value.food.composition.ash+'</td>'
                        +'<td class="text-center">' +value.food.mineral.calsium+'</td>'
                        +'<td class="text-center">' +value.food.mineral.phosphorus+'</td>'
                        +'<td class="text-center">' +value.food.mineral.iron+'</td>'
                        +'<td class="text-center">' +value.food.vitamin.retinol+'</td>'
                        +'<td class="text-center">' +value.food.vitamin.betacarotene+'</td>'
                        +'<td class="text-center">' +value.food.vitamin.vitaminA+'</td>'
                        +'<td class="text-center">' +value.food.vitamin.vitaminE+'</td>'
                        +'<td class="text-center">' +value.food.vitamin.thiamin+'</td>'
                        +'<td class="text-center">' +value.food.vitamin.riboflavin+'</td>'
                        +'<td class="text-center">' +value.food.vitamin.niacin+'</td>'
                        +'<td class="text-center">' +value.food.vitamin.vitaminC+'</td>'
                                
                        +'</tr>'
            });
            result.html(strResult);
            
          }
        );
      })
      

    });
</script>



