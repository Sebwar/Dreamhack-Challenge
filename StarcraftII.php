<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'template/head.php'; ?>
    <style>
        #section-image-container {
            background-image: url(images/starcraftII.jpg);
            background-size: cover;
        }
    </style>
</head>

<body>
   <div id="wrapper">
        <?php require_once 'template/header&navbar.php'; ?>
        
        <div id="section-image-container">
            <img id="section-image" src="images/starcraftII.png" alt="Starcraft logotype"/>
        </div>
    
    <!--Navigation bar-->
    <nav id="navbar" class="navbar navbar-default">
        <div class="container">
            <!--The toggle button for collapsed menu.-->
            <button class="navbar-toggle" data-toggle="collapse" data-target="#menuFields">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--The brand on the leftmost side.-->
            <div class="navbar-header">
                <a class="navbar-brand">Navigation</a>
            </div>

            <!--The menu fields. Will be collapsed on small screens.-->
            <div class="collapse navbar-collapse" id="menuFields">
                <!--Fields on the left.-->
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active" "dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Games<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="csgo.html">Counter-Strike: Global Offensive</a></li>
                            <li><a href="dota2.html">Dota 2</a></li>
                            <li class="active"><a href="StarcraftII.html">Starcraft II</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                </ul>
                <!--Fields on the right.-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!--Main image-->
	 <div class="starcraftIIJumbo" style="background-image: url('images/SCIIJumbo2.jpg'); height: 350px;"></div>
    

        <nav id="navbar" class="navbar navbar-default">
        <div class="container">
            <!--The toggle button for collapsed menu.-->
            <button class="navbar-toggle" data-toggle="collapse" data-target="#menuFields2">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--The brand on the leftmost side.-->
            <div class="navbar-header">
                <a class="navbar-brand">Starcraft II</a>
            </div>

            <!--The menu fields. Will be collapsed on small screens.-->
            <div class="collapse navbar-collapse" id="menuFields2">
                <!--Fields on the left.-->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Matches</a></li>
                    <li><a href="#">Ranking</a></li>
                    <li><a href="stream.php">Stream</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <!--Content columns.-->
    <div id="content">
        <div class="container">
            <h2>Upcoming Matches</h2>
             <p>These matches are currently open for betting.</p>
            <div class="row" style="margin-top:40px;padding-bottom:40px;border-bottom: 1px solid #676461;">
                <div class="col-sm-4" style="display: block;margin: auto;">
                    <div class="teamversus">
                        <img src="images/teammayam.png" style="width:100px;"/>
                        <img src="images/vs.png" style="width:50px;"/>
                        <img src="images/teamevilgeniuses.png" style="width:100px;"/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="teamversus">
                        <img src="images/teammayam.png" style="width:100px;"/>
                        <img src="images/vs.png" style="width:50px;"/>
                        <img src="images/teamevilgeniuses.png" style="width:100px;"/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="teamversus">
                        <img src="images/teammayam.png" style="width:100px;"/>
                        <img src="images/vs.png" style="width:50px;"/>
                        <img src="images/teamevilgeniuses.png" style="width:100px;"/>
                    </div>
                </div>
            </div>
		</div>
		
		<div class="row">
            <div class="col-md-4">
                    <p>Kvarts</p>
                    <button class="btn btn-lg btn-success btn-block">Kvarts-match</button>
                    <button class="btn btn-lg btn-success btn-block">Kvarts-match</button>
                    <button class="btn btn-lg btn-success btn-block">Kvarts-match</button>
                    <button class="btn btn-lg btn-success btn-block">Kvarts-match</button>
            </div>
            <div class="col-md-4">
                    <p>Semi</p>
                    
                <div class="row voffset5">
                    <button class="btn btn-lg btn-warning btn-block">Semi-match</button>
                </div>
                <div class="row voffset5">
                    <button class="btn btn-lg btn-warning btn-block">Semi-match</button>
                 </div>        
            </div>
				
            <div class="col-md-4">
                    <p>Final</p>
                <div class="row voffset7">
                    <button class="btn btn-lg btn-danger btn-block">Final-match</button>
                    
				</div>
			</div>
		</div>
	</div>
		
</nav>
    </div>
        <?php require_once 'template/footer.php'; ?>
    </div>
</body>
</html>