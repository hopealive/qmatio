<?php $lesson           = "математика"; ?>
<?php
$datesWithLessons = [
    4,7,11,14,18,21
];
?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12">
        <h1 class="page-header">
            Журнал <small>зараз (<?php echo date("Y-m-d H:i:s"); ?> ) йде урок: "<?php echo $lesson; ?>"</small>
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
                <?php
                    foreach ($datesWithLessons as $dateWithLessons) {
                        echo "<th>$dateWithLessons</th>";
                    }
                ?>
            </tr>
        </table>
    </div>
</div>

