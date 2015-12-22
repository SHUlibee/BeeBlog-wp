<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bee's blog</title>

    <!-- Bootstrap -->
    <link href="/admin/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/public/css/common.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/admin/public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/admin/public/bootstrap/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/front/home/index">Beeblog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        个人中心 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">BEE</a></li>
                        <li><a href="#">修改密码</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/admin/login/do_logout">注销</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="全站搜索">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid" id="frame">
    <div class="row">
        <!-- 较大屏显示 -->
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
            <ul class="nav nav-pills nav-stacked">
                <li class="">
                    <a class="text-center" href="#menu-home" data-toggle="collapse"><span class="glyphicon glyphicon-asterisk"></span>系统</a>
                    <div class="panel-collapse collapse in" id="menu-home" >
                        <ul class="nav nav-pills nav-stacked">
                            <li id="home-index"><a class="text-right" href="/admin/home/index">首页</a></li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a href="#menu-blog" class="text-center" data-toggle="collapse"><span class="glyphicon glyphicon-pencil"></span>文章</a>
                    <div class="panel-collapse collapse in" id="menu-blog">
                        <ul class="nav nav-pills nav-stacked">
                            <li id="blog-index"><a class="text-right" href="/admin/blog/index">所有文章</a></li>
                            <li id="blog-add"><a class="text-right" href="/admin/blog/add">写文章</a></li>
                            <li id="category-index"><a class="text-right" href="/admin/category/index">分类目录</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 教小屏显示 -->
        <div class="hidden-lg hidden-md col-sm-1 col-xs-1">
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a class="btn btn-default" id="menu-min-home" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="系统" data-placement="right" data-html="true">
                        <span class="glyphicon glyphicon-asterisk"></span>
                    </a>
                </li>
                <li>
                    <a class="btn btn-default" id="menu-min-blog" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="文章" data-placement="right" data-html="true">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-11 col-xs-11">
            <?php include($body_template); ?>
        </div>
    </div>
</div>


<footer class="modal-footer">
    <div class="row">
        <ul class="list-inline text-center">
            <li><a href="www.beeblog.cn">beeblog.cn</a></li>
            <li><a href="#">报备号：xxxx</a></li>
        </ul>
    </div>
</footer>

</body>
</html>

<script>
    <?php global $BEE;?>
    var lid = "<?php echo $BEE->getCtrl().'-'.$BEE->getFunc();?>";
    $("#"+lid).addClass("active");

    $(function(){
        $('[data-toggle="popover"]').popover();

        var menuBlog =
            '<div class="btn-group-vertical" role="group">' +
                '<a class="btn btn-default" href="/admin/blog/index">所有文章</a>' +
                '<a class="btn btn-default" href="/admin/blog/add">写文章</a>' +
                '<a class="btn btn-default" href="/admin/category/index">分类目录</a>' +
            '</div>';
        $('#menu-min-blog').attr('data-content', menuBlog);
        var menuHome =
            '<div class="btn-group-vertical" role="group">' +
                '<a class="btn btn-default" href="/admin/home/index">首页</a>' +
            '</div>';
        $('#menu-min-home').attr('data-content', menuHome);
    });
</script>