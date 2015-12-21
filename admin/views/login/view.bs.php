<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Beeblog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="row collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid" id="frame">
    <div class="row">
        <div class="col-md-8" id="testCarousel">
            <div id="myCarousel" class="carousel slide">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/admin/public/images/1.jpg" alt="First slide">
                        <div class="carousel-caption">这是标题</div>
                    </div>
                    <div class="item">
                        <img src="/admin/public/images/1.jpg" alt="Second slide">
                    </div>
                    <div class="item">
                        <img src="/admin/public/images/1.jpg" alt="Third slide">
                    </div>
                </div>
                <!-- 轮播（Carousel）导航 -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&lsaquo;</a>
            </div>
        </div>

        <!-- 登录框 -->
        <div class="col-md-4 bg-success" id="login">
            <form class="form-horizontal" role="form" action="login/do_login" method="POST">
                <div class="form-group">
                    <div class="panel panel-danger">
                        <div class="panel-title">
                            <h2 class="text-center">登录</h2>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">帐号</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="log" name="log"
                               placeholder="请输入帐号">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">密码</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="pwd" name="pwd"
                               placeholder="请输入密码">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <div class="checkbox pull-right">
                            <label><input type="checkbox">请记住我</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-default pull-right">登录</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#myCarousel").carousel({
        interval : 2000
    });
</script>