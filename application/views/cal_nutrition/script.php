<script>
    $(document).ready(function(){
        
        $("#form-calculat").submit(function(e){
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