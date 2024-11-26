<?php
if($passed == "TRUE"){
header("location:main.php");
}
require_once dirname(__FILE__)."/include/head.php";
require_once dirname(__FILE__)."/login_nav.php";
?>
<body>
<div class="container">
	<div class="wrapper">
		<form
			id="form"
			class="form-signin"
			method="post"  
			action="models/checkpwd.php" 
			name="myForm"
		>       
			<h3 class="form-signin-heading">Login</h3>
			<input
				id="account"
				name="account" 
				type="account" 
				class="form-control" 
				placeholder="Username" 
				required=""
			>
			<input
				id="password"
				name="password"  
				type="password" 
				class="form-control" 
				placeholder="Password" 
				required=""
			>　     		  
			<button 
				class="btn"  
				name="submit" 
				value="Login" 
				type="submit"
			><b>Continue</b></button>  			
		</form>			
	</div>
</div>
<a href="#" style="color:#192a56;" onclick="window.location = '/project/project/registration.php'">
	Create an account ...
</a>

</body>


<script>

</script>


<style>
body{
	background:#eee;
	text-align: center;
}

.wrapper {    
	margin-top: 80px;
	margin-bottom: 20px;
}

.form-signin {
	max-width: 420px;
	padding: 30px 38px 66px;
	margin: 0 auto;
	border-radius: .5rem;
	background:#fff;
	border:.1rem solid rgba(0,0,0,.2);
	box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
}

.form-signin-heading {
	text-align:center;
	margin-bottom: 30px;
	font-weight: bolder;
    color:var(--black);
    font-size: 2.8rem;
}

.form-control {
	position: relative;
	font-size: 16px;
	height: auto;
	padding: 10px;
}

input[type="text"] {
	margin-bottom: 0px;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}

input[type="password"] {
	margin-bottom: 20px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}

.btn{
	display: inline-block;
    background:#192a56;
    color:#fff;
    cursor: pointer;
    margin-top: 0.5rem;
    font-size: 1.3rem;
    border-radius: .5rem;
}


</style>