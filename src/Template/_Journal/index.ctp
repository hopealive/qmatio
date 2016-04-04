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
    <a href="#">Дати домашнє завдання</a>
</div>

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
            <?php for ( $j = 0; $j < 25;  ++$j){ ?>
            <tr>
                <td><a href="#">Петренко Сергій Іванович</a></td>
                <td>5</td>
                <td>4</td>
                <td>н</td>
                <td>5</td>
                <td>4</td>
                <td>
                    <select>
                        <?php
                        for ($i = 12; $i > 1; --$i){
                            echo "<option value=$i>$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>

