<div class="container">
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
                        <img src="/admin/public/images/2.jpg" alt="Second slide">
                    </div>
                    <div class="item">
                        <img src="/admin/public/images/3.jpg" alt="Third slide">
                    </div>
                </div>
                <!-- 轮播（Carousel）导航 -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>

        <div class="col-md-4 bg-success" id="login">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">帐号</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username"
                               placeholder="请输入帐号">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">密码</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password"
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