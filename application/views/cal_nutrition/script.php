<script>
    $(document).ready(function(){
        
        $("#form-calculat").submit(function(e){
                e.preventDefault();
                // var formdata = $(this).serializeObject();
                // console.log(formdata);
                var formdata = {
                    "products" : $("#products").val(),
                    "plants" : $("#plants").val(),
                    "seedlings" : $("#seedlings").val(),
                    "vegetable" : $("#vegetable").val(),
                    "fruit" : $("#fruit").val(),
                    "meat" : $("#meat").val(),
                    "aquatic" : $("#aquatic").val(),
                    "egg" : $("#egg").val(),
                    "milk" : $("#milk").val(),
                    "seasoningmachine1" : $("#seasoningmachine1").val(),
                    "seasoningmachine2" : $("#seasoningmachine2").val(),
                    "seasoningmachine3" : $("#seasoningmachine3").val(),
                }
            $.post("http://localhost:8080/Nutritional/api/Calnutrition/findAll", JSON.stringify(formdata),
                function (data, textStatus, jqXHR) {
                //     var listOfResult = data.data;
                //      var strResult = '<thead>'
                //                     +'<tr class="info">'
                //                     +'<th colspan="2"><center>ชื่อ</center></th>'
                //                     +'<th ><center>พลังงาน</th>'
                //                     +'<th ><center>น้ำ</th>'
                //                     +'<th ><center>โปรตีน</th>'
                //                     +'<th ><center>ไขมัน</th>'
                //                     +'<th ><center>คาร์โบไฮเดรต</th>'
                //                     +'<th ><center>ใยอาหาร/(เส้นใยดิบ)</th>'
                //                     +'<th ><center>เถ้า</th>'
                //                     +'<th ><center>แคลเซียม</th>'
                //                     +'<th ><center>ฟอสฟอรัส</th>'
                //                     +'<th ><center>ธาตุเหล็ก</th>'
                //                     +'<th ><center>เรตินอย</th>'
                //                     +'<th ><center>เบต้าคาโรทีน</th>'
                //                     +'<th ><center>วิตามินA</th>'
                //                     +'<th ><center>วิตามินE</th>'
                //                     +'<th ><center>ธิเอมิน</th>'
                //                     +'<th ><center>ลิโบฟลาวิน</th>'
                //                     +'<th ><center>นีเอซิน</th>'
                //                     +'<th ><center>วิตามินC</th>'
                //                     +'</tr>'
                //                     +'<tr class="info">'
                //                     +'<th><center>ชื่อไทย</th>'
                //                     +'<th><center>ชื่ออังกฤษ</th>'
                //                     +'<th><center>กิโลแคลลอลี่</th>'
                //                     +'<th colspan="6"><center>กรัม</center> </th>'
                //                     +'<th colspan="3"><center>มิลลิกรัม</center> </th>'
                //                     +'<th colspan="3"><center>ไมโครกรัม</center> </th>'
                //                     +'<th colspan="5"><center>มิลลิกรัม</center> </th>'
                //                     +'</tr>'
                //                     +'</thead>';
                //     $.each(listOfResult , function (index ,value){
                //         strResult += '<tr><td class="text-center">'+ value.thname+'</td>'
                //                     +'<td class="text-center">'+ value.enname+'</td>'
                //                     +'<td class="text-center">'+ value.composition.energy+'</td>'
                //                     +'<td class="text-center">'+ value.composition.water+'</td>'
                //                     +'<td class="text-center">'+ value.composition.protein+'</td>'
                //                     +'<td class="text-center">'+ value.composition.fat+'</td>'
                //                     +'<td class="text-center">'+ value.composition.carbohydrate+'</td>'

                //                     +'<td class="text-center" >'+ value.composition.fiber+'</td>'
                //                     +'<td class="text-center">'+ value.composition.ash+'</td>'
                //                     +'<td class="text-center">'+ value.mineral.calsium+'</td>'
                //                     +'<td class="text-center">'+ value.mineral.phosphorus+'</td>'
                //                     +'<td class="text-center">'+ value.mineral.iron+'</td>'
                //                     +'<td class="text-center" >'+ value.vitamin.retinol+'</td>'
                //                     +'<td class="text-center">'+ value.vitamin.betacarotene+'</td>'
                //                     +'<td class="text-center">'+ value.vitamin.vitaminA+'</td>'
                //                     +'<td class="text-center">'+ value.vitamin.vitaminE+'</td>'
                //                     +'<td class="text-center">'+ value.vitamin.thiamin+'</td>'
                //                     +'<td class="text-center">'+ value.vitamin.riboflavin+'</td>'
                //                     +'<td class="text-center">'+ value.vitamin.niacin+'</td>'
                //                     +'<td class="text-center">'+ value.vitamin.vitaminC+'</td>'
                //     });
                //     result.html(strResult);
                //     // alert(data.message);
                }    
            );
            
        });
    });
   



</script>