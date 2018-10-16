<nav class="navbar navbar-inverse" id="navbar">
</nav>

<div class="container-fluid bg-5" >
 <div class="row">
    <H1 class="col-sm-offset-1">ตารางโภชนาการอาหาร</H1>
 </div>
</div>

<div class="container-fluid">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="info"> 
                    <th colspan="2"><center>ชื่อ</center></th>
                    <th rowspan="2"><center>ชนิด</center></th>
                    <th ><center>พลังงาน</th>
                    <th ><center>น้ำ</th>
                    <th ><center>โปรตีน</th>
                    <th ><center>ไขมัน</th>
                    <th ><center>คาร์โบไฮเดรต</th>
                    <th ><center>ใยอาหาร/(เส้นใยดิบ)</th>
                    <th ><center>เถ้า</th>
                    <th ><center>แคลเซียม</th>
                    <th ><center>ฟอสฟอรัส</th>
                    <th ><center>ธาตุเหล็ก</th>
                    <th ><center>เรตินอย</th>
                    <th ><center>เบต้าคาโรทีน</th>
                    <th ><center>วิตามินA</th>
                    <th ><center>วิตามินE</th>
                    <th ><center>ธิเอมิน</th>
                    <th ><center>ลิโบฟลาวิน</th>
                    <th ><center>นีเอซิน</th>
                    <th ><center>วิตามินC</th>
                    <th rowspan="2"><center>แก้ไข</th>
                    <th rowspan="2"><center>ลบ</th>
                </tr>
                <tr class="info">
                    <th><center>ชื่อไทย</th>
                    <th><center>ชื่ออังกฤษ</th>
                    <th><center>กิโลแคลลอลี่</th>
                    <th colspan="6"><center>กรัม</center> </th>
                    <th colspan="3"><center>มิลลิกรัม</center> </th>
                    <th colspan="3"><center>ไมโครกรัม</center> </th>
                    <th colspan="5"><center>มิลลิกรัม</center> </th>    
                </tr>
            </thead>
            <tbody id="result">
            </tbody>   
        </table>
        <a href="<?php base_url()?>/NTTCI/welcome/insert_master"><button class="btn btn-info btn-block btn-lg" ><span class="glyphicon glyphicon-plus-sign "></span></button></a>
    </div>
</div>







<script>
    $(document).ready(function(){
        
        // $("#form").submit(function(e){
        //     e.preventDefault();
        //     // var formdata = $(this).serializeObject();
        //     // console.log(formdata);
        //     var formdata = {
        //         "thname" : $("#name").val(),
        //         "enname" : $(#name).val()
        //     }
            let result = $("#result");
            $.post("http://localhost:8080/Nutritional/api/master/findAll", {},
                function (data, textStatus, jqXHR) {
                    var listOfResult = data.data;
                     var strResult = "";
                    $.each(listOfResult , function (index ,value){
                        strResult +='<tr>'
                                    +'<td class="text-center">' +value.thname+'</td>'
                                    +'<td class="text-center">' +value.enname+'</td>'
                                    +'<td class="text-center">' +value.type+'</td>'
                                    +'<td class="text-center">' +value.composition.energy+'</td>'
                                    +'<td class="text-center">' +value.composition.water+'</td>'
                                    +'<td class="text-center">' +value.composition.protein+'</td>'
                                    +'<td class="text-center">' +value.composition.fat+'</td>'
                                    +'<td class="text-center">' +value.composition.carbohydrate+'</td>'

                                    +'<td class="text-center">' +value.composition.fiber+'</td>'
                                    +'<td class="text-center">' +value.composition.ash+'</td>'
                                    +'<td class="text-center">' +value.mineral.calsium+'</td>'
                                    +'<td class="text-center">' +value.mineral.phosphorus+'</td>'
                                    +'<td class="text-center">' +value.mineral.iron+'</td>'
                                    +'<td class="text-center">' +value.vitamin.retinol+'</td>'
                                    +'<td class="text-center">' +value.vitamin.betacarotene+'</td>'
                                    +'<td class="text-center">' +value.vitamin.vitaminA+'</td>'
                                    +'<td class="text-center">' +value.vitamin.vitaminE+'</td>'
                                    +'<td class="text-center">' +value.vitamin.thiamin+'</td>'
                                    +'<td class="text-center">' +value.vitamin.riboflavin+'</td>'
                                    +'<td class="text-center">' +value.vitamin.niacin+'</td>'
                                    +'<td class="text-center">' +value.vitamin.vitaminC+'</td>'
                                    +'<td class="text-center">'
                                    +'<a href="update/'+value._id+'/'+value.thname+'/'+value.enname+'/'+value.type+'/'+value.composition.energy+'/'
                                    +value.composition.water+'/'
                                    +value.composition.protein+'/'+value.composition.carbohydrate+'/'+value.composition.fat+'/'
                                    +value.composition.fiber+'/'+value.composition.ash+'/'+value.mineral.calsium+'/'+value.mineral.phosphorus+'/'
                                    +value.mineral.iron+'/'+value.vitamin.retinol+'/'+value.vitamin.betacarotene+'/'+value.vitamin.vitaminA+'/'
                                    +value.vitamin.vitaminE+'/'+value.vitamin.thiamin+'/'+value.vitamin.riboflavin+'/'+value.vitamin.niacin+'/'
                                    +value.vitamin.vitaminC+'">'
                                    +'<button type="button" class="btn btn-warning">แก้ไข</button>'
                                    +'</a>'
                                    +'</td>'
                                    +'<td class="text-center">'
                                    // +'<a href="delete/'+value._id+'">'
                                    +'<button type="button" onclick="deleted(\''+value._id+'\')" class="btn btn-danger">ลบ</button>'
                                    // +'</a>'
                                    +'</td>'
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
    function deleted(id){
  $.ajax({
    type: "delete",
    url: "http://localhost:8080/Nutritional/api/master/delete",
    data: JSON.stringify({
      "id": id
    }),
    dataType: "json",
    success: function (response) {
      alert(response.message);
      window.location.href = "<?php echo base_url() ?>welcome/master";
    }
  });
}
</script>