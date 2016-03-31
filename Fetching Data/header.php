<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand page-scroll" href="http://localhost/">Work Land</a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">找你要的 <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">公司</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">工作</a></li>
                <li><a href="#">實習</a></li>
            </ul>
        </li>

        <?php if(!isset($_SESSION['accountType'])){ ?>
            <!--anonymous-->
            <li>
                <a class="page-scroll" href="../view/business_sign_in.php">企業登入</a>
            </li>
            <li>
                <a class="page-scroll" href="./view/sign_up.php">註冊</a>
            </li>
            <li>
                <a class="page-scroll" href="./view/sign_in.php">登入</a>
            </li>

        <?php }else if(isset($_SESSION['accountType'])&&$_SESSION['accountType']=='user'){ ?>
            <!--general user-->
            <li>
                <a class="page-scroll" href="#">求職進度 <span class="glyphicon glyphicon-tasks"></span></a>
            </li>
            <li>
                <a class="page-scroll" href="#">行事曆 <span class="glyphicon glyphicon-calendar"></span></a>
            </li>
            <li>
                <a class="page-scroll" href="#">訊息 <span class="glyphicon glyphicon-bell"></span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle img-a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="./img/header.jpg" alt="..." class="img-circle">
                    <span>Neo</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">帳號資訊</a></li>
                    <li><a href="./view/manageView.php">編輯資訊</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">檢視履歷</a></li>
                    <li><a href="#">編輯履歷</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">統計分析</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">登出</a></li>
                </ul>
            </li>

        <?php }else if(isset($_SESSION['accountType'])&&$_SESSION['accountType']=='company'){ ?>
            <!--company-->
            <li>
                <a class="page-scroll" href="#">統計分析 <span class="glyphicon glyphicon-stats"></a>
            </li>
            <li>
                <a class="page-scroll" href="#">訊息 <span class="glyphicon glyphicon-bell"></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle img-a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="./img/header.jpg" alt="..." class="img-rounded">
                    <span>黑心企業家</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">公司資訊</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">工作管理</a></li>
                    <li><a href="#">求職回覆</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">登出</a></li>
                </ul>
            </li>

        <?php }else if(isset($_SESSION['accountType'])&&$_SESSION['accountType']=='manager'){ ?>
            <!--manager-->
            <li>
                <a class="page-scroll" href="#">公司審核 <span class="glyphicon glyphicon-check"></a>
            </li>
            <li>
                <a class="page-scroll" href="#">分析統計 <span class="glyphicon glyphicon-stats"></a>
            </li>
            <li>
                <a class="page-scroll" href="#">訊息 <span class="glyphicon glyphicon-bell"></a>
            </li>
            <li>
                <a class="page-scroll" href="#">登出 <span class="glyphicon glyphicon-off"></a>
            </li>
        <?php } ?>
    </ul>
</div>
<!-- /.navbar-collapse -->
