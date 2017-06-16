<?php
	include "header.php";
?>
<div class="w1140" style="margin-top:30px"> 
    <h3 style="font-family:宋体">用户注册</h3>
<hr/>
<form class="form-horizontal" action="php/dologin.php" method="post" id="form" onSubmit="return submitIndex()">
  <div class="form-group">
    <label class="col-sm-2 control-label">用户名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="user" placeholder="用户名">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">输入密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="passwd1" placeholder="输入密码">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">确认密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="passwd2" placeholder="确认密码">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">手机号</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telephone" placeholder="手机号">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">地区</label>
    <div class="col-sm-10">
      	<select class="form-control" name="area">
          <option value="">请选择省份</option><option value="山东省">山东省</option><option value="河北省">河北省</option><option value="河南省">河南省</option>
        </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">性别</label>
    <div class="col-sm-10">
      <label class="radio-inline">
  		<input type="radio" id="inlineRadio1" value="男" name="sex">男
	  </label>
      <label class="radio-inline">
  		<input type="radio" id="inlineRadio2" value="女" name="sex">女
	  </label>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">爱好</label>
    <div class="col-sm-10">
      	<label class="checkbox-inline">
  			<input type="checkbox" name="hobby[]" value="音乐">音乐
		</label>
      	<label class="checkbox-inline">
  			<input type="checkbox" name="hobby[]" value="旅游">旅游
		</label>
        <label class="checkbox-inline">
  			<input type="checkbox" name="hobby[]" value="登山">登山
		</label>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="xieyi"> 阅读并接受<a href="#">《用户协议》</a>
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" style="background:#5cb85c;color:#fff;">注册</button> <button type="reset" class="btn btn-default">重置</button> <a href="http://www.webp.com/logon.php"><button type="button" class="btn btn-default" style="background:#d9534f;color:#fff;">已有账号，去登录</button></a>
    </div>
  </div>
</form>
</div>

<script src="js/login.js"></script>
<?php
	include "footer.php";
?>
