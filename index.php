<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Web Transaksi DD-Tronik</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<script type="text/javascript" src="jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Login</title>

    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700"> -->

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body>

    <div class="container">

      <div id="login">

        <form action="" method="post" id="login-form"> 

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" id="idmember" name="idmember" value="ID Member" onBlur="if(this.value == '') this.value = 'ID Member'" onFocus="if(this.value == 'ID Member') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" id="pin" name="pin" value="pin" onBlur="if(this.value == '') this.value = 'pin'" onFocus="if(this.value == 'pin') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" id="btnlogin" name="btnlogin" value="LOGIN"></p>

          </fieldset>

         </form> 

        <div id="peringatan">Masukkan ID Member dan Pin anda !!</div>
      </div> <!-- end login -->


    </div>

  </body>
</html>

</body>

</html>