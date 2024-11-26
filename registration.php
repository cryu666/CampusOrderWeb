<?php
require_once dirname(__FILE__) . "/include/head.php";
require_once dirname(__FILE__) . "/login_nav.php";
?>

<body>
<div class="container">
	  <div class="wrapper">
        <form class="form-signin"
            style="background:#fff;"
            id="form" 
            onsubmit="return false" 
            action="/project/project/models/registration_check.php"
            >
            <div>
                <label>
                    <p class="form-signin-heading"><b>請輸入EMAIL</b></p>
                    <input 
                        id="email" 
                        type="email" 
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
                    <p class="form-signin-heading"><b>請輸入使用者名稱</b></p>
                    <input 
                        id="username" 
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
                    <p class="form-signin-heading"><b>請輸入密碼</b></p>
                    <input 
                        id="passwordInput" 
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
                    <p class="form-signin-heading"><b>再確認一次密碼</b></p>
                    <input 
                        id="passwordConfirm" 
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
            <button class="btn">submit</button>
        </form>
    </div>
</div>
</body>


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
    color: #192a56;
    font-size: 1.5rem;
}

label {
  display: block;
  position: relative;
  margin: 40px 0px;
  width: 100%;
}

.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #eee;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #27ae60;
  transition: ease .6s;
}

.input:focus+.line-box .line {
  width: 100%;
}

.label-active {
  top: -3em;
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


<script>
$("#form").submit(function(e) {
  if ($("#passwordInput").val() !== $("#passwordConfirm").val()) {
    Swal.fire({
      icon: 'warning',
      title: 'Oops...',
      text: '請再確認一次密碼',
    });
    return;
  } else {
    var params = {
      email: $('#email').val(),
      username: $('#username').val(),
      password: md5($('#passwordInput').val()),        //密碼經過md5加密(此md5加密方法為外部js，在/include/資料夾下)
    };
    var query = jQuery.param(params);
    var form = $(this);
    var url = form.attr('action');
    $.ajax({                                           //以Ajax的方式將表單的內容以網址query的方式傳入到 /models/registration_check.php，等待結果回傳。
      type: "POST",
      url: url + '?' + query,
      success: function(data) {                        //等待/models/registration_check.php echo的結果
        if (data.includes('已註冊過')) {
          Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            html:data,
          });
        }
        if (data.includes('資料新增成功')) {
          Swal.fire({
            icon: 'success',
            title: 'OK',
            text: '資料新增成功',
            allowOutsideClick: false,
            showCancelButton: false,
          }).then((result) => {
            if (result.value) {
              window.location = '/project/project/index.php'
            }
          })
        }
      }
    });
    e.preventDefault();                               // avoid to execute the actual submit of the form.  避免真的發送表單造成頁面重整
  }
});
</script>