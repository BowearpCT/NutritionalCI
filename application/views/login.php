<nav class="navbar navbar-inverse" id="navbar">
</nav>
<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" id="Flogin">
			<fieldset>
				<h2>Sign In</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username" required>
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
				</div>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Forgot Password?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="<?php echo base_url()?>/welcome/signup" class="btn btn-lg btn-primary btn-block">Register</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div><br><br><br>
<script>
    $(function(){
    $('.button-checkbox').each(function(){
		var $widget = $(this),
			$button = $widget.find('button'),
			$checkbox = $widget.find('input:checkbox'),
			color = $button.data('color'),
			settings = {
					on: {
						icon: 'glyphicon glyphicon-check'
					},
					off: {
						icon: 'glyphicon glyphicon-unchecked'
					}
			};

		$button.on('click', function () {
			$checkbox.prop('checked', !$checkbox.is(':checked'));
			$checkbox.triggerHandler('change');
			updateDisplay();
		});

		$checkbox.on('change', function () {
			updateDisplay();
		});

		function updateDisplay() {
			var isChecked = $checkbox.is(':checked');
			// Set the button's state
			$button.data('state', (isChecked) ? "on" : "off");

			// Set the button's icon
			$button.find('.state-icon')
				.removeClass()
				.addClass('state-icon ' + settings[$button.data('state')].icon);

			// Update the button's color
			if (isChecked) {
				$button
					.removeClass('btn-default')
					.addClass('btn-' + color + ' active');
			}
			else
			{
				$button
					.removeClass('btn-' + color + ' active')
					.addClass('btn-default');
			}
		}
		function init() {
			updateDisplay();
			// Inject the icon if applicable
			if ($button.find('.state-icon').length == 0) {
				$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
			}
		}
		init();
	});
});
</script>
<script>
        $("#Flogin").submit(function (e) { 
            e.preventDefault();
            var formdata = {
                "username": $("#username").val(),
                "password": $("#password").val()
            }
            $.post("http://localhost:8080/Nutritional/api/user/search", JSON.stringify(formdata),
            function (data, textStatus, jqXHR) {
				console.log(data.data);
                if(data.data.length == 0){
                    alert("Username หรือ Password ไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง !!");
                    window.location.href = "<?php echo base_url() ?>welcome/login";
                }
                else{
                    var username = data.data[0].username;
					localStorage.setItem("usernamelocal", username);
					localStorage.setItem("namelocal" , data.data[0].name);
					localStorage.setItem("lastnamelocal" , data.data[0].lastname);
                    alert("เข้าสู่ระบบสำเร็จ");
                    window.location.href = "<?php echo base_url() ?>";
                    
                    
                }  
            }
        );
        });
    </script>