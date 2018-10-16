
<table class="table table-bordered" >
<tr class="w3-hover-#f1f1f1">

        <th bgcolor="#f0f5f5">
        <center>
        <h2 >Edit Type</h2>
        <br>
        <img src="https://img.live/images/2018/10/15/settings.png" alt="settings.png" border="0" /><br><br>
        <p>Home &diams; Edit Type </p>
        <form id="edit" class="example"  style="margin:auto;max-width:300px">
        <input  type="hidden"  name="nametype"  id="typeId"  value='<?php echo urldecode($_id) ; ?>'>
        <input  type="text" placeholder="Edit Name Type" name="nametype"  id="nametype" required value='<?php echo urldecode($name) ; ?>'><br><br>
        <center>
        <button class="button" type="submit" style="vertical-align:middle" id="edit"><span><font color="#FFFFFF" >EDIT</span></button>
        </form>
        </center>
        </th>
</table>

  <script>
    $(document).ready(function(){
        $("#edit").submit(function(e){
                e.preventDefault();
                // var formdata = $(this).serializeObject();
                // console.log(formdata);
                var formdata = {
                    "id": $("#typeId").val(),
                    "name" : $("#nametype").val()
                }
                $.post("http://localhost:8080/Nutritional/api/type/update", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                         window.location.reload("http://localhost:81/NutritionalCI/welcome/insert_type");
                    }    
                );
            });
    });
</script>