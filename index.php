<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="utility.js" type="text/javascript"></script>
		<style>
			a {
				text-decoration: none;
				font-family: 標楷體, 微軟正黑體;
				
			}
			h1 {text-align: center;}
			p {font-family: 標楷體, 微軟正黑體;}
			form {text-align: center;}
			input[type = "text"] {font-family: 微軟正黑體;font-size: 18px;}
			input[type = "password"] {font-family: 微軟正黑體;font-size: 18px;}
			select {font-family: 標楷體, 微軟正黑體;font-size: 18px;}
			input[type = "submit"] {background: #00008A;color: #fff;padding: 4px;font-family: 標楷體, 微軟正黑體;font-size: 15px;width: 50%;}
		</style>
		
		<style>
			window.status = "國立嘉義大學政府採購文件管理系統(NCYU GPDMS)";
		</style>
		
		<style>
		#laylout
		{
			width: 100%;
			margin: auto;
		}
		header
		{
			background-color: lightgreen;
			font-family: 標楷體, 微軟正黑體;
			font-size: 30px;
			text-align: center;
			
			width: 100%;
			height: 10%;
			float: left;
			margin-top: 5px;
		}
		nav
		{
			background-color: lightgreen;
			color: blue;
			font-family: 標楷體, 微軟正黑體;
			font-size: 12px;
			text-align: center;
			width: 100%;
			height: 10%;
			float: center;
		}
		aside
		{
			color: blue;
			font-family: 標楷體, 微軟正黑體;
			font-size: 16px;
			text-align: justify;
			width: 100%;
			height: 30%;
			float: center;
			margin-top: 15px;
			#margin-left: 5%;
		}
		
		</style>
		
		<title>國立嘉義大學學生事務處課外活動組資料管理系統(NCYU GPDMS)</title>
	</head>
	
<body>
	<div id="layout">
		
		<header>國立嘉義大學學生事務處<br>課外活動組資料管理系統</header>
		<nav>NCYU Government Procurement Document Management System (NCYU GPDMS)</nav>
		
		<aside>
			<form method="POST" action="login.php" autocomplete="on" target="new">
			<fieldset style="background-color: lightblue;text-align: left;">
				<legend style="font-family: 標楷體, 微軟正黑體;"><img src="images/logo_ncyu_header.gif" width="180px"></legend>
				<legend style="font-family: 標楷體, 微軟正黑體;">系統登入 (NCYU GPDMS Login)</legend>
				<table>
					<tr>
						<td><input type="text" name="UserID" size="10" placeholder="您的帳號" autocomplete="on" required></td>
						<td><input type="password" name="UserPasswd" size="10" placeholder="密碼" autocomplete="new-password" required></td>
					</tr>
				</table>
				</p>
				<p>功能選單：</p>
				<select name="serviceType">
					<option value="採購案件新增">採購案件新增</option>	
					<option value="採購案件管理" selected>採購案件管理</option>
					<option value="標案報表輸出">標案報表輸出</option>
					<option value="採購文件借閱管理系統">採購文件借閱管理系統</option>
					<option value="開標及驗收通知系統">開標及驗收通知系統</option>
					<option value="開標室預借管理系統">開標室預借管理系統</option>
				</select><p>
				<select name="serviceTypeOhr" class="username_email">
					<option value="進用人員勞健保加退保管理系統">勞健保加退保管理系統</option>
				</select>
				<p><input type="submit" value="登 入" style="width:100px;height:30px;"></p>
			</fieldset>
			</form>
		</aside>
		
		
		
		
	</div>

</body>
</html>
