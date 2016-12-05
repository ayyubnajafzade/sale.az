<title>Sale.Az</title>
<head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="frontend/css/bootstrap.min.css">
<script src="frontend/jquery-3.1.1.min.js"></script>
<script src="frontend/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sale.az</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="?nav=main">Ana Səhifə</a></li>
                <li><a href="?nav=endrm">Endirimlər</a></li>
                <li><a href="?nav=mkn">Məkanlar</a></li>
                <li><a href="?nav=abt">Haqqımızda</a></li>
                <li><a href="?nav=prt">Partnyorlar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right"  style="">
                
              <li>  <form class="form-inline">
                    <input type="text" class="form-control" size="30" placeholder="axtar">
                    <button type="button" class="btn "><i class="glyphicon glyphicon-search"></i></button>
                </form> </li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
        background-color: #000000;
        color: white;
        padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height:auto;}
    }
</style>