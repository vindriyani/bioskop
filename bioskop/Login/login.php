
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script language="javascript">
function validasi(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }

  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>

<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description"  content=""/>
<meta name="keywords" content=""/>
<meta name="robots" content="ALL,FOLLOW"/>
<meta name="Author" content="AIT"/>
<meta http-equiv="imagetoolbar" content="no"/>
<title>Login E-learning</title>
<link rel="stylesheet" type="text/css" href="css_login/gayalogin.css" />


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/cufon.js"></script>
<script type="text/javascript" src="js/Geometr231_Hv_BT_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</head>

<body >



   <hgroup>
  <h1>E-learning Project</h1>
  <h3>By RDFKM Group</h3>
</hgroup>
<form name="login" action="cek_login.php" method="POST" onSubmit="return validasi(this)">
  <div class="group">
       <input type="text" name="username"  class="text" /><span class="highlight"></span><span class="bar"></span>
    <label>Username</label>
  </div>
  <div class="group">
  <input type="password" class="text" name="password" /><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  <button type="submit" class="button buttonBlue"  value="LOGIN">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<footer>
  <p>06 Elearning Project. Powered by <a href="http://www.polymer-project.org/" target="_blank">Google</a></p>
</footer>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
</body>

<meta http-equiv="content-type" content="text/html;charset=UTF-8">
</html>
