<!--bin/cake bake controller --prefix pupil users
bin/cake bake view --prefix pupil users-->
<!--bin/cake bake template --prefix admin users
uk_UA.utf8
-->


<!DOCTYPE html>
<html lang="en">

<head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $this->fetch('title') ?>
        </title>

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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php echo $this->element('navigation'); ?>
            <?php echo $this->element('menu/teacher'); ?>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="/panel/theme2/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/panel/theme2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/panel/theme2/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/panel/theme2/bower_components/raphael/raphael-min.js"></script>
    <script src="/panel/theme2/bower_components/morrisjs/morris.min.js"></script>
    <script src="/panel/theme2/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/panel/theme2/dist/js/sb-admin-2.js"></script>

</body>

</html>
