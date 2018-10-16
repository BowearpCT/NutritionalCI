
var usernamelocal = localStorage.getItem("usernamelocal");
var namelocal = localStorage.getItem("namelocal");
var navbar = $("#navbar");
var base_url = window.location.origin;
var strnav ="";
if(usernamelocal == null){
    strnav    +='<div class="navbar-header">'
                +'<a class="navbar-brand" href="'+base_url+'/NTTCI">โภชนาการอาหาร</a>'
                +'</div>'
                +'<ul class="nav navbar-nav navbar-right">'
                +'<li><a href="'+base_url+'/NTTCI/welcome/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>'
                +'<li><a href="'+base_url+'/NTTCI/welcome/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>'
                +'</ul>'
}
else{
    strnav  +='<div class="navbar-header">'
            +'<a class="navbar-brand" href="'+base_url+'/NTTCI">โภชนาการอาหาร</a>'
            +'</div>'
            +'<ul class="nav navbar-nav navbar-right">'
            +'<li><a href=""><span class="glyphicon glyphicon-user"></span>'+namelocal+'</a></li>'
            +'<li><a href="" onclick="logout();"><span class="glyphicon glyphicon-log-in"></span>'
            +'logout</a>'
            +'</li>'
            +'</ul>'
}
navbar.html(strnav);
function logout (){
    localStorage.removeItem("namelocal");
    localStorage.removeItem("usernamelocal");
    window.location.href = "welcome/login";
}