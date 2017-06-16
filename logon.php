<?php
	include "header.php";
?>
<div class="w1140" style="margin-top:30px"> 
    <h3 style="font-family:宋体">用户登录</h3>
<hr/>
<form class="form-horizontal" action="php/dologon.php" method="post" id="form" onSubmit="return submitLogon()">
  <div class="form-group">
    <label class="col-sm-2 control-label">用户名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="user" placeholder="用户名">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="输入密码">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" style="background:#5cb85c;color:#fff;">登录</button> <button type="reset" class="btn btn-default">重置</button> <a href="http://www.webp.com/login.php"><button type="button" class="btn btn-default" style="background:#d9534f;color:#fff;">还没有账号，去注册</button></a>
    </div>
  </div>
</form>
</div>
<script src="js/logon.js"></script>
<?php
	include "footer.php";
?>