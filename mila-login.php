<?php error_reporting(0); /* no direct access */ defined ( 'MILA' ) or die ( 'Restricted access' ); ?>
<!doctype HTML>
<html>
<head>
	<title>Sistem Pendukung Keputusan Penyeleksian Mahasiswa Berprestasi (Mawapres)</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/mila-login.css">
</head>
<body>
<div class="container">
	<div class="row navi">
		<div class="col-md-2 col-md-offset-10">
		<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-arrow-left"></span></span>
			<a href="./" class="btn btn-sm btn-primary btn-block btn-back" role="button">Kembali</a>
		</div>
		</div>
	</div>
    <div class="row main">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
					<h5 class="text-center bold">Sistem Pendukung Keputusan</h5>
					<h5 class="text-center">Penyeleksian Mahasiswa Beprestasi (Mawapres)</h5>
					<h5 class="text-center">Menggunakan Algoritma Naive Bayes</h5>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-body">
					<h4 class="text-center">Please Login!</h4>
                    <form id="FormLogin" class="form form-signup" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input id="email" type="text" autocomplete="off" class="form-control" placeholder="Email Address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input id="password" type="password" autocomplete="off" class="form-control" placeholder="Password" />
                        </div>
                    </div>
					</form>
					<a href="#" class="btn btn-sm btn-primary btn-block btn-login" role="button">Login</a>
                </div>
            </div>
			
            <div class="panel panel-danger divresult">
                <div class="panel-heading"><h5 class="result"></h5></div>
			</div>
        </div>
    </div>
</div>
</div> 
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mila-login.js"></script>
</body>
</html>