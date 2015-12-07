<!DOCTYPE html>
<!-- saved from url=(0031)http://wp.com:8080/wp-login.php -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>bee的学习网站 › 登录</title>
    <link rel="stylesheet" id="buttons-css" href="/admin/public/css/buttons.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="/admin/public/css/dashicons.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="login-css" href="/admin/public/css/login.min.css" type="text/css" media="all">
    <meta name="robots" content="noindex,follow">
</head>
<body class="login login-action-login wp-core-ui  locale-zh-cn">
<div id="login">

    <?php if(isset($pattern)):?>
    <div id="login_error">
        <strong>错误</strong>：您为用户<strong>shulibee</strong>输入的密码无效。<a href="shulibee">忘记了密码？</a><br>
    </div>
    <?php endif;?>

    <form name="loginform" id="loginform" action="/admin/login/do_login" method="post">
        <p>
            <label for="user_login">用户名<br>
            <input type="text" name="log" id="user_login" class="input" value="<?php echo isset($log) ? $log : '' ?>" size="20"></label>
        </p>
        <p>
            <label for="user_pass">密码<br>
            <input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
        </p>
        <p class="submit">
            <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录">
            <input type="hidden" name="redirect_to" value="/admin/home">
            <input type="hidden" name="testcookie" value="1">
        </p>
    </form>

    <p id="nav">
        <a href=".." title="找回密码">忘记密码？</a>
    </p>

    <script type="text/javascript">
        function wp_attempt_focus(){
            setTimeout( function(){ try{
                d = document.getElementById('user_login');
                d.focus();
                d.select();
            } catch(e){}
            }, 200);
        }

        wp_attempt_focus();
        if(typeof wpOnload=='function')wpOnload();
    </script>

    <p id="backtoblog"><a href=".." title="不知道自己在哪？">← 回到bee的学习网站</a></p>

</div>


<div class="clear"></div>


</body></html>