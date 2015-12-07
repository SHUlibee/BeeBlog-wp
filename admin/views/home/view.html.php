
<div id="wpbody-content" aria-label="主内容" tabindex="0" style="overflow: hidden;">
    <div id="screen-meta" class="metabox-prefs">

        <div id="contextual-help-wrap" class="hidden" tabindex="-1" aria-label="“上下文帮助”选项卡">
            <div id="contextual-help-back"></div>
            <div id="contextual-help-columns">
                <div class="contextual-help-tabs">
                    <ul>

                        <li id="tab-link-overview" class="active">
                            <a href="http://wp.com:8080/wp-admin/index.php#tab-panel-overview" aria-controls="tab-panel-overview">
                                概述								</a>
                        </li>

                        <li id="tab-link-help-navigation">
                            <a href="http://wp.com:8080/wp-admin/index.php#tab-panel-help-navigation" aria-controls="tab-panel-help-navigation">
                                导航								</a>
                        </li>

                        <li id="tab-link-help-layout">
                            <a href="http://wp.com:8080/wp-admin/index.php#tab-panel-help-layout" aria-controls="tab-panel-help-layout">
                                布局								</a>
                        </li>

                        <li id="tab-link-help-content">
                            <a href="http://wp.com:8080/wp-admin/index.php#tab-panel-help-content" aria-controls="tab-panel-help-content">
                                内容								</a>
                        </li>
                    </ul>
                </div>

                <div class="contextual-help-sidebar">
                    <p><strong>更多信息：</strong></p><p><a href="https://codex.wordpress.org/Dashboard_Screen" target="_blank">仪表盘帮助</a></p><p><a href="http://cn.forums.wordpress.org/" target="_blank">中文支持论坛</a></p>					</div>

                <div class="contextual-help-tabs-wrap">

                    <div id="tab-panel-overview" class="help-tab-content active">
                        <p>欢迎访问WordPress仪表盘！在您每次登录站点后，您都会看到本页面。您可以在这里访问WordPress的各种管理页面。点击任何页面右上角的“帮助”选项卡可阅读相应帮助信息。</p>							</div>

                    <div id="tab-panel-help-navigation" class="help-tab-content">
                        <p>左侧的导航菜单提供了所有WordPress管理页面的链接。将鼠标移至菜单项目上，子菜单将显示出来。您可以使用最下方的“收起菜单”箭头来收起菜单，菜单项将以小图标的形式显示。</p><p>上方“工具栏”上的链接将仪表盘和站点前台连接起来，默认在站点的所有页面显示，提供您的个人资料信息以及相关的WordPress信息。</p>							</div>

                    <div id="tab-panel-help-layout" class="help-tab-content">
                        <p>您可以依您的喜好和工作方式来安排仪表盘页面的布局。大部分其它管理页面也支持重新排列功能。</p><p><strong>显示选项</strong> - 使用“显示选项”选项卡来选择要显示的仪表模块。</p><p><strong>拖放自如</strong> - 要重新排列模块，按住模块的标题栏，将其拖到您希望的位置，在灰色虚线框出现后松开鼠标即可调整模块的位置。</p><p><strong>管理模块</strong> - 点击模块的标题栏即可展开或收起它。另外，有些模块提供额外的配置选项，在您将鼠标移动到这些模块的标题栏上方时，会出现“配置”链接。</p>							</div>

                    <div id="tab-panel-help-content" class="help-tab-content">
                        <p>仪表盘中的模块有：</p><p><strong>概况</strong> - 显示您站点上的内容概况，以及主题与WordPress程序的版本信息。</p><p><strong>活动</strong> - 显示即将发布和最近发布的文章，近期的若干条评论，并进行审核。</p><p><strong>快速草稿</strong> - 让您创建新文章并保存为草稿，并显示5个指向最近草稿的链接。</p><p><strong>WordPress新闻</strong> - 来自WordPress项目的最新消息、<a href="https://planet.wordpress.org/">WordPress Planet</a>和热门与最新的插件。</p><p><strong>欢迎</strong> - 显示配置新站点的实用功能。</p>							</div>
                </div>
            </div>
        </div>
        <div id="screen-options-wrap" class="hidden" tabindex="-1" aria-label="“显示选项”选项卡">
            <form id="adv-settings" method="post">
                <h5>显示下列项目</h5>
                <div class="metabox-prefs">
                    <label for="dashboard_right_now-hide"><input class="hide-postbox-tog" name="dashboard_right_now-hide" type="checkbox" id="dashboard_right_now-hide" value="dashboard_right_now" checked="checked">概览</label>
                    <label for="dashboard_quick_press-hide"><input class="hide-postbox-tog" name="dashboard_quick_press-hide" type="checkbox" id="dashboard_quick_press-hide" value="dashboard_quick_press" checked="checked"><span class="hide-if-no-js">快速草稿</span> <span class="hide-if-js">草稿</span></label>
                    <label for="wp_welcome_panel-hide"><input type="checkbox" id="wp_welcome_panel-hide" checked="checked">Welcome</label>
                    <br class="clear">
                </div>
                <div><input type="hidden" id="screenoptionnonce" name="screenoptionnonce" value="090db5a8da"></div>
            </form>
        </div>
    </div>
    <div id="screen-meta-links">
        <div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle">
            <button type="button" id="contextual-help-link" class="button show-settings" aria-controls="contextual-help-wrap" aria-expanded="false">帮助</button>
        </div>
        <div id="screen-options-link-wrap" class="hide-if-no-js screen-meta-toggle">
            <button type="button" id="show-settings-link" class="button show-settings" aria-controls="screen-options-wrap" aria-expanded="false">显示选项</button>
        </div>
    </div>

    <div class="wrap">
        <h1>仪表盘</h1>
        <div id="welcome-panel" class="welcome-panel">
            <input type="hidden" id="welcomepanelnonce" name="welcomepanelnonce" value="7c2140e66c">		<a class="welcome-panel-close" href="http://wp.com:8080/wp-admin/?welcome=0">不再显示</a>
            <div class="welcome-panel-content">
                <h3>欢迎使用WordPress！</h3>
                <p class="about-description">我们准备了几个链接供您开始：</p>
                <div class="welcome-panel-column-container">
                    <div class="welcome-panel-column">
                        <h4>开始使用</h4>
                        <a class="button button-primary button-hero load-customize hide-if-no-customize" href="http://wp.com:8080/wp-admin/customize.php">自定义您的站点</a>
                        <a class="button button-primary button-hero hide-if-customize" href="http://wp.com:8080/wp-admin/themes.php">自定义您的站点</a>
                        <p class="hide-if-no-customize">或<a href="http://wp.com:8080/wp-admin/themes.php">更换主题</a></p>
                    </div>
                    <div class="welcome-panel-column">
                        <h4>接下来</h4>
                        <ul>
                            <li><a href="http://wp.com:8080/wp-admin/post-new.php" class="welcome-icon welcome-write-blog">撰写您的第一篇博文</a></li>
                            <li><a href="http://wp.com:8080/wp-admin/post-new.php?post_type=page" class="welcome-icon welcome-add-page">添加“关于”页面</a></li>
                            <li><a href="http://wp.com:8080/" class="welcome-icon welcome-view-site">查看站点</a></li>
                        </ul>
                    </div>
                    <div class="welcome-panel-column welcome-panel-last">
                        <h4>更多操作</h4>
                        <ul>
                            <li><div class="welcome-icon welcome-widgets-menus">管理<a href="http://wp.com:8080/wp-admin/widgets.php">边栏小工具</a>和<a href="http://wp.com:8080/wp-admin/nav-menus.php">菜单</a></div></li>
                            <li><a href="http://wp.com:8080/wp-admin/options-discussion.php" class="welcome-icon welcome-comments">打开/关闭评论功能</a></li>
                            <li><a href="https://codex.wordpress.org/First_Steps_With_WordPress" class="welcome-icon welcome-learn-more">了解更多新手上路知识</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="dashboard-widgets-wrap">
            <div id="dashboard-widgets" class="metabox-holder">
                <div id="postbox-container-1" class="postbox-container">
                    <div id="normal-sortables" class="meta-box-sortables ui-sortable"><div id="dashboard_right_now" class="postbox ">
                            <div class="handlediv" title="点击以切换"><br></div><h3 class="hndle ui-sortable-handle"><span>概览</span></h3>
                            <div class="inside">
                                <div class="main">
                                    <ul>
                                        <li class="post-count"><a href="http://wp.com:8080/wp-admin/edit.php?post_type=post">2篇文章</a></li><li class="page-count"><a href="http://wp.com:8080/wp-admin/edit.php?post_type=page">2个页面</a></li>		<li class="comment-count"><a href="http://wp.com:8080/wp-admin/edit-comments.php">2条评论</a></li>
                                    </ul>
                                    <p id="wp-version-message"><span id="wp-version">WordPress 4.3.1，使用<a href="http://wp.com:8080/wp-admin/themes.php">Twenty Fifteen</a>主题。</span></p>	</div>
                            </div>
                        </div>
                    </div>	</div>
                <div id="postbox-container-2" class="postbox-container">
                    <div id="side-sortables" class="meta-box-sortables ui-sortable"><div id="dashboard_quick_press" class="postbox ">
                            <div class="handlediv" title="点击以切换"><br></div><h3 class="hndle ui-sortable-handle"><span><span class="hide-if-no-js">快速草稿</span> <span class="hide-if-js">草稿</span></span></h3>
                            <div class="inside">

                                <form name="post" action="http://wp.com:8080/wp-admin/post.php" method="post" id="quick-press" class="initial-form hide-if-no-js">


                                    <div class="input-text-wrap" id="title-wrap">
                                        <label class="prompt" for="title" id="title-prompt-text">

                                            标题			</label>
                                        <input type="text" name="post_title" id="title" autocomplete="off">
                                    </div>

                                    <div class="textarea-wrap" id="description-wrap">
                                        <label class="prompt" for="content" id="content-prompt-text">在想些什么？</label>
                                        <textarea name="content" id="content" class="mceEditor" rows="3" cols="15" autocomplete="off"></textarea>
                                    </div>

                                    <p class="submit">
                                        <input type="hidden" name="action" id="quickpost-action" value="post-quickdraft-save">
                                        <input type="hidden" name="post_ID" value="3">
                                        <input type="hidden" name="post_type" value="post">
                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="f6d3f16f8b"><input type="hidden" name="_wp_http_referer" value="/wp-admin/index.php">			<input type="submit" name="save" id="save-post" class="button button-primary" value="保存草稿">			<br class="clear">
                                    </p>

                                </form>
                            </div>
                        </div>

                    </div>	</div>
                <div id="postbox-container-3" class="postbox-container">
                    <div id="column3-sortables" class="meta-box-sortables ui-sortable empty-container"></div>	</div>
                <div id="postbox-container-4" class="postbox-container">
                    <div id="column4-sortables" class="meta-box-sortables ui-sortable empty-container"></div>	</div>
            </div>

            <input type="hidden" id="closedpostboxesnonce" name="closedpostboxesnonce" value="0ee92eedf1"><input type="hidden" id="meta-box-order-nonce" name="meta-box-order-nonce" value="22c5e235f8">	</div><!-- dashboard-widgets-wrap -->

    </div><!-- wrap -->


    <div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div>
