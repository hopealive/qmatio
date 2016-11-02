
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
        <link href="/panel/theme2/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

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


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>


        <!--scripts loaded here from cdn for performance -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script src="/js/mistake.js"></script>
        <script>
            $('document').ready(function () {
                $('.message.error').wrap( "<p class='bg-danger'></p>" );
            });
        </script>
        <style>
            .bg-danger {
                padding: 10px;
            }
        </style>
    </body>
</html>

