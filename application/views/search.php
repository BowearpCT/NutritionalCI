<nav class="navbar navbar-inverse" id="navbar">
</nav>


<table class="table table-bordered">
<tr class="w3-hover-#f1f1f1">

        <th bgcolor="#f0f5f5">
        <center>
        <h3 >ค้นหาอาหาร</h3>
        <h3>ข้อมูลของอาหารไทยปรุงรสสำเร็จและอาหารจานเดี่ยว</h2><br>
        <img src="https://www.picz.in.th/images/2018/10/05/hwNyxf.png" alt="hwNyxf.png" border="0"><br><br>
        <p>Home &diams; Search</p>
        <form class="example" id="form" style="margin:auto;max-width:300px">
        <input id="name" type="text"><br><br>
        <center>
        <button class="button" style="vertical-align:middle"><span><font color="#FFFFFF" id="search">SEARCH</span></button>
        </form>
        </center>
        </th>
</table>
<div class="container-fluid  ">
<table class="table table-bordered" id="result">
</table>
</div>

<script>
    $(document).ready(function(){
        
        $("#form").submit(function(e){
            e.preventDefault();
            // var formdata = $(this).serializeObject();
            // console.log(formdata);
            var formdata = {
                "thname" : $("#name").val(),
                "enname" : $('#name').val()
            }
            let result = $("#result");
            $.post("http://localhost:8080/Nutritional/api/nutritional/search", JSON.stringify(formdata),
                function (data, textStatus, jqXHR) {
                    var listOfResult = data.data;
                     var strResult = '<thead>'
                                    +'<tr class="info">'
                                    +'<th colspan="2"><center>ชื่อ</center></th>'
                                    +'<th ><center>พลังงาน</th>'
                                    +'<th ><center>น้ำ</th>'
                                    +'<th ><center>โปรตีน</th>'
                                    +'<th ><center>ไขมัน</th>'
                                    +'<th ><center>คาร์โบไฮเดรต</th>'
                                    +'<th ><center>ใยอาหาร/(เส้นใยดิบ)</th>'
                                    +'<th ><center>เถ้า</th>'
                                    +'<th ><center>แคลเซียม</th>'
                                    +'<th ><center>ฟอสฟอรัส</th>'
                                    +'<th ><center>ธาตุเหล็ก</th>'
                                    +'<th ><center>เรตินอย</th>'
                                    +'<th ><center>เบต้าคาโรทีน</th>'
                                    +'<th ><center>วิตามินA</th>'
                                    +'<th ><center>วิตามินE</th>'
                                    +'<th ><center>ธิเอมิน</th>'
                                    +'<th ><center>ลิโบฟลาวิน</th>'
                                    +'<th ><center>นีเอซิน</th>'
                                    +'<th ><center>วิตามินC</th>'
                                    +'</tr>'
                                    +'<tr class="info">'
                                    +'<th><center>ชื่อไทย</th>'
                                    +'<th><center>ชื่ออังกฤษ</th>'
                                    +'<th><center>กิโลแคลลอลี่</th>'
                                    +'<th colspan="6"><center>กรัม</center> </th>'
                                    +'<th colspan="3"><center>มิลลิกรัม</center> </th>'
                                    +'<th colspan="3"><center>ไมโครกรัม</center> </th>'
                                    +'<th colspan="5"><center>มิลลิกรัม</center> </th>'
                                    +'</tr>'
                                    +'</thead>';
                    $.each(listOfResult , function (index ,value){
                        strResult += '<tr><td class="text-center">'+ value.thname+'</td>'
                                    +'<td class="text-center">'+ value.enname+'</td>'
                                    +'<td class="text-center">'+ value.composition.energy+'</td>'
                                    +'<td class="text-center">'+ value.composition.water+'</td>'
                                    +'<td class="text-center">'+ value.composition.protein+'</td>'
                                    +'<td class="text-center">'+ value.composition.fat+'</td>'
                                    +'<td class="text-center">'+ value.composition.carbohydrate+'</td>'

                                    +'<td class="text-center" >'+ value.composition.fiber+'</td>'
                                    +'<td class="text-center">'+ value.composition.ash+'</td>'
                                    +'<td class="text-center">'+ value.mineral.calsium+'</td>'
                                    +'<td class="text-center">'+ value.mineral.phosphorus+'</td>'
                                    +'<td class="text-center">'+ value.mineral.iron+'</td>'
                                    +'<td class="text-center" >'+ value.vitamin.retinol+'</td>'
                                    +'<td class="text-center">'+ value.vitamin.betacarotene+'</td>'
                                    +'<td class="text-center">'+ value.vitamin.vitaminA+'</td>'
                                    +'<td class="text-center">'+ value.vitamin.vitaminE+'</td>'
                                    +'<td class="text-center">'+ value.vitamin.thiamin+'</td>'
                                    +'<td class="text-center">'+ value.vitamin.riboflavin+'</td>'
                                    +'<td class="text-center">'+ value.vitamin.niacin+'</td>'
                                    +'<td class="text-center">'+ value.vitamin.vitaminC+'</td>'
                    });
                    result.html(strResult);
                    // alert(data.message);
                }    
            );
            
        });
    });
   

</script>
<!--
<div class="container">

<br>
<table class="table table-bordered" id="searchlist">

      <tr class="w3-hover-">
        <th align="center" colspan=2 color="blue">Name</th>
        <th align="center" colspan=7>ProximateComposition</th>
        <th align="center" colspan=3>Minerals</th>
        <th align="center" colspan=8>Vitamins</th>
      </tr>
  
      <tr>
        <td width=20><font size="2">NameThai</td>
        <td><font size="2">NameEnglish</td>

        <td><font size="2">energy</td>
        <td><font size="2">water</td>
        <td><font size="2">protein</td>
        <td><font size="2">fat</td>
        <td><font size="2">carbohydrate</td>
        <td><font size="2">dietFire</td>
        <td><font size="2">ash</td>
       
        <td><font size="2">calcium</td>
        <td><font size="2">phosphorus</td>
        <td><font size="2">iron</td>

        
        <td><font size="2">retinol</td>
        <td><font size="2">betaCarotene</td>
        <td><font size="2">totalvitA</td>
        <td><font size="2">vitE</td>
        <td><font size="2">thiamin</td>
        <td><font size="2">riboflavin</td>
        <td><font size="2">niacin</td>
        <td><font size="2">vitC</td>
   </font>
      </tr>  
  </table>
</div>
//-->








