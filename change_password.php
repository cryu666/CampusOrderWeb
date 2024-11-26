<?php
require_once dirname(__FILE__) . "/include/head.php";
require_once dirname(__FILE__) . "/change_password_nav.php";     
?>

<div>
  <form style="background:rgb(121, 134, 121);"
    id="form" 
    method="POST"  
    action="/HW3_109705013_賴郁忻/password_check.php"
  >
    <div>
      <label>
        <p class="label-txt" style="color: #333"><b>輸入使用者名稱</b></p>
        <input 
          id="username" 
          name="username" 
          type="text" 
          class="input" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <div>
      <label>
        <p class="label-txt" style="color: #333"><b>請輸入原本密碼</b></p>
        <input 
          id="oldpassword" 
          name="oldpassword" 
          type="password" 
          class="input" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <div>
      <label>
        <p class="label-txt" style="color: #333"><b>請輸入新密碼</b></p>
        <input 
          id="passwordInput" 
          name="passwordInput" 
          type="password" 
          class="input" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <div>
      <label>
        <p class="label-txt" style="color: #333"><b>再確認一次新密碼</b></p>
        <input 
          id="passwordConfirm" 
          name="passwordConfirm" 
          type="password" 
          class="input" 
          autocomplete="Off" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <button 
        class="btn" 
        name="submit" 
        value="Login" 
		    type="submit"
    >submit</button>
  </form>
</div>


<style>
.btn{
    padding:.7rem 1.5rem;
    background:#333;
    color:#fff;
    cursor: pointer;
    margin-top: 0.5rem;
    font-size: 1rem;
    border-radius: 2rem;
}
</style>


<script>
if(getUrlVars()['error']) {            // “getUrlVars()” 用來取得網址所帶的參數，如果登入失敗 server會將網址帶上"?error=帳號密碼錯誤"
	Swal.fire({
			icon: 'warning',
			title: 'Oops...',
			text: decodeURIComponent(getUrlVars()['error']),
	});
} 
function getUrlVars()
{
	var vars = [], hash;
	var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for(var i = 0; i < hashes.length; i++)
	{
		hash = hashes[i].split('=');
		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	return vars;
}
</script>


