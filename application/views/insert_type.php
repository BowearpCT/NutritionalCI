<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

<table class="table table-bordered" >
<tr class="w3-hover-#f1f1f1">

        <th bgcolor="#f0f5f5">
        <center>
        <h2 >หมวดหมู่อาหาร</h2>
        <h3>หมวดหมู่อาหารของอาหารไทยแต่ละชนิด</h2><br>
        <img src="https://img.live/images/2018/10/10/broccoli1.png" alt="broccoli1.png" border="0" />
        <img src="https://img.live/images/2018/10/10/meat.png" alt="meat.png" border="0" />
        <img src="https://img.live/images/2018/10/10/orange1.png" alt="orange1.png" border="0" />
        <img src="https://img.live/images/2018/10/10/soybean.png" alt="soybean.png" border="0" />
        <img src="https://img.live/images/2018/10/10/fish.png" alt="fish.png" border="0" /><br><br>
        <p>Home &diams; Type Of Foods</p>
        <form id="insert" class="example"  style="margin:auto;max-width:300px">
        <input  type="text" placeholder="Enter Type" name="nametype"  id="nametype" required><br><br>
        <center>
        <button class="button"type="submit" style="vertical-align:middle"><span><font color="#FFFFFF" >INSERT</span></button>
        </form>
        </center>
        </th>
</table>

<!-- insert -->
<script>
    $(document).ready(function(){
        $("#insert").submit(function(e){
                e.preventDefault();
                // var formdata = $(this).serializeObject();
                // console.log(formdata);
                var formdata = {
                    "name" : $("#nametype").val(), 
                }
                $.post("http://localhost:8080/Nutritional/api/type/insert", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                         window.location.reload("http://localhost:81/NutritionalCI/welcome/insert_type");
                    }    
                );
            });
    });
</script>

<!-- table -->

<div class="container" center>
  <h2>Type Of Foods</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>NameType</th>
        <th></th>
      </tr>
    </thead>
    <tbody id="type">
    </tbody>
  </table>
</div>

<!-- findAll -->
<script>
        let type = $("#type");
        let i = 1;
        $.post("http://localhost:8080/Nutritional/api/type/findAll/", {},
            function (data, textStatus, jqXHR) {
                console.log(data);
                var listOfherb = data.data;
                var strType = "";
                $.each(listOfherb, function( index, value ) {
                    strType += '<tr>'
                            + '<td>'+i+'</td>'
                            // + '<td>'+value._id+'</td>'
                            + '<td>'+value.name+'</td>'
                            + '<td>'
                            +'<a href="edit_type/'+value._id+'/'+value.name+'" class="btn btn-info">'
                            + '<i class="far fa-edit"></i> Edit'
                            + '</a> &nbsp;'
                            + '<button class="btn btn-danger" onclick="deleteType (\''+value._id+'\')">'
                            + '<i class="far fa-edit"></i> Delete'
                            + '</button>'
                            + '</td>'
                            + '</tr>';

                            i++;            
                });
                type.html(strType);  
            }
        );



function deleteType(typeId){
  $.ajax({
    type: "delete",
    url: "http://localhost:8080/Nutritional/api/type/delete/",
    data: JSON.stringify({
      "id": typeId
    }),
    dataType: "json",
    success: function (response) {
      alert(response.message);
      window.location.reload("http://localhost:81/NutritionalCI/welcome/insert_type");
    }
  });
}

</script>