<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <!-- Fixed navbar -->
                    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">Bet Yolo</a>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">Home</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <?php if ($sf_user->isAuthenticated()): ?>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $sf_user->getUsername(); ?><span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Profile</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo url_for('sf_guard_signout') ?>">Log out</a></li>
                                        </ul>
                                        <?php else: ?>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Guest <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="<?php echo url_for('sf_guard_signin') ?>">Signin</a></li>
                                        </ul>
                                        <?php endif ?>
                                    </li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                </div><!-- Fixed navbar -->
            </div>
            <?php echo $sf_content ?>
    </body>
</html>
