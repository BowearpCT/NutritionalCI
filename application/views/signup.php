<nav class="navbar navbar-inverse" id="navbar">
</nav>

<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" id="insert">
                <h2> Sign Up</h2>
                <hr class="colorgraph">
                <!-- <div class="row"> -->
                    <!-- <div class="col-xs-12 col-sm-6 col-md-6"> -->
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="col-xs-12 col-sm-6 col-md-6"> -->
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username" tabindex="3" required>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
                
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><input type="submit" value="Sign Up" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
<br><br><br><br>

<script>
        $(function(){
            $("#insert").submit(function (e) { 
                e.preventDefault();
                var formdata = {
                    "name":$("#first_name").val(),
                    "lastname":$("#last_name").val(),
                    "username":$("#username").val(),
                    "password":$("#password").val()
                    
                    
                };
                $.post("http://localhost:8080/Nutritional/api/user/insert", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                        window.location.href = "<?php echo base_url() ?>/welcome/login";
                    }
                );
            });
        });
    </script>