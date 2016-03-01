<?php
$lessons = [
    'Математика, 7А',
    'Математика, 7А',
    'Математика, 7А',
    'Математика, 7А',
    'Математика, 7А',
    'Математика, 7А',
];
$news    = [
    'Батьківські збори',
    'Засідання вчителів',
    'Методичні вказівки',
    'Новина',
    'Новина',
    'Новина',
    'Новина',
    'Новина',
    'Новина',
];
?>
<div class="row col-sm-12 col-xs-12">

    <div class="col-sm-6 col-xs-12">
        <div class="panel panel-green">
            <div class="panel-heading">
                <h3 class="panel-title">Уроки сьогодні</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <?php
                    $id      = NULL;
                    foreach ($lessons as $id => $lesson) {
                        echo "<li><a href=\"/lesson/lesson/$id\">$lesson</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xs-12">
        <div class="panel panel-green">
            <div class="panel-heading">
                <h3 class="panel-title">Новини тижня</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <?php
                    $id = NULL;
                    foreach ($news as $id => $singleNews) {
                        echo "<li><a href=\"/lesson/$id\">$singleNews</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row col-sm-12 col-xs-12">
    <div class="col-sm-6 col-xs-12">
        <div class="panel panel-green">
            <div class="panel-heading">
                <h3 class="panel-title">Інше</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li> інше</li>
                    <li> інше</li>
                    <li> інше</li>
                    <li> інше</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xs-12">
        <div class="panel panel-green">
            <div class="panel-heading">
                <h3 class="panel-title">Інше</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li> інше</li>
                    <li> інше</li>
                    <li> інше</li>
                    <li> інше</li>
                </ul>
            </div>
        </div>
    </div>
</div>
