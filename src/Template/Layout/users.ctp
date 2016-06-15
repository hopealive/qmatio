<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$webrootThemeFolder = "panel/theme2/bower_components";
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <link href="/<?php echo $webrootThemeFolder; ?>/images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
        <?= $this->fetch('meta') ?>
        <?php echo $this->fetch('css') ?>
        <?php echo $this->fetch('script') ?>

        <!-- Bootstrap Core CSS -->
        <link href="/panel/theme2/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="/panel/theme2/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="/panel/theme2/dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/panel/theme2/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="/panel/theme2/bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/panel/theme2/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>



        <div id="send-mistake-report" class="send-mistake-report col-lg-1 col-xs-1 col-sm-1">
            <a href="javascript:void(0)">Повідомити про помилку</a>
        </div>

        <div id="wrapper">
            <div id="page-wrapper">
                <div class="container-fluid">
                    <?= $this->Flash->render() ?>
                    <section class="container clearfix">
                        <?= $this->fetch('content') ?>
                    </section>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <footer>



        </footer>
        <?php echo $this->element('modal'); ?>

        <!-- jQuery -->
        <script src="/panel/theme2/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/panel/theme2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <!--script src="/panel/theme2/bower_components/metisMenu/dist/metisMenu.min.js"></script>-->

        <!-- Custom Theme JavaScript -->
        <!--script src="/panel/theme2/dist/js/sb-admin-2.js"></script>-->

        <script src="/panel/js/index.js"></script>
    </body>
</html>

