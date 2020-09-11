<!-- Overlay for fixed sidebar -->
<div class="sidebar-overlay "></div>

<!-- Material sidebar -->
<aside id="sidebar" class="sidebar sidebar-colored  sidebar-fixed-left" role="navigation">

    <div id="sidebar-main">
        <!-- Sidebar Header -->
        <?php if (!empty($this->options->sidebarheader)): ?>
        <div class="sidebar-header header-cover" style="background-image: url(<?php $this->options->sidebarheader() ?>);">
            <?php else: ?>
            <div class="sidebar-header header-cover" style="background-image: url(<?php getThemeFile('img/sidebarheader.jpg', true); ?>);">
                <?php endif; ?>
                <!-- Top bar -->
                <!--<div class="top-bar"></div>-->
                <!-- Sidebar toggle button -->
                <button type="button" class="sidebar-toggle mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons">clear_all</i>
                </button>

                <!-- Sidebar brand name -->
                <a data-toggle="dropdown" class="sidebar-brand" href="#settings-dropdown">
                    <?php $this->user->mail(); ?>
                    <b class="caret"></b>
                </a>
            </div>
            <!-- Top bar -->
            <!--<div class="top-bar"></div>-->

            <!-- Sidebar Navigation  -->
            <ul class="nav sidebar-nav">
                <!-- User dropdown  -->
                <li class="dropdown">
                    <ul id="settings-dropdown" class="dropdown-menu">
                        <?php if ($this->user->hasLogin()): ?>
                            <li>
                                <a href="<?php $this->options->adminUrl(); ?>" tabindex="-1">
                                    <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">account_circle</i>
                                    用户概要
                                </a>
                            </li>
                            <li>
                                <a href="<?php $this->options->adminUrl('options-theme.php'); ?>" tabindex="-1">
                                    <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">settings</i>
                                    设置外观
                                </a>
                            </li>
                            <li>
                                <a href="<?php $this->options->logoutUrl(); ?>" class="md-menu-list-a" tabindex="-1">
                                    <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">exit_to_app</i>
                                    退出登录
                                </a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php $this->options->loginUrl(); ?>" class="md-menu-list-a" tabindex="-1">
                                    <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">fingerprint</i>
                                    Login
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <!-- Homepage -->
                <li id="sidebar-first-li">
                    <a href="<?php $this->options->siteUrl(); ?>" target="_self">
                        <i class="material-icons sidebar-material-icons">home</i>
                        <?php lang("sidebar.homepage") ?>
                    </a>
                </li>

                <!-- divider -->
                <li class="divider"></li>

                <!-- Article Numebr  -->
                <li>
                    <a href="http://39.107.58.77/welcome.html">关于</a>
                </li>
                <li>
                    <a href="http://39.107.58.77/links.html">友链</a>
                </li>
                <li>
                    <a href="http://39.107.58.77/archive.html">归档</a>
                </li>
                <li>
                    <a href="http://39.107.58.77/malody.html">Malody 自制谱下载</a>
                </li>
            </ul>

            <?php if (!empty($this->options->switch) && in_array('ShowPixiv', $this->options->switch)) : ?>
            <div>
                <iframe src="https://cloud.mokeyjay.com/pixiv/" frameborder="0"  style="width: 240px; height: 380px; margin: 0 auto; text-align: center"></iframe>
            </div>
            <?php endif; ?>

        </div>

</aside>
