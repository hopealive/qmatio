<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12">
        <h1 class="page-header">
            Всього учнів 
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-9 col-xs-9 col-sm-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Учні
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-9 col-xs-9 col-sm-12">
        <table class="table table-striped">
            <tr>
                <th>Учень</th>
            </tr>
            <?php for ( $j = 0; $j < 25;  ++$j){ ?>
            <tr>
                <td><a href="#">Петренко Сергій Іванович</a></td>
                <td><a href="#">Знайти учня</a></td>
                <td><a href="#">Викликати батьків</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>

