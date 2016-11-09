<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <?php $url = $this->Html->Url->build(['controller'=>'index','action' => 'index']); ?>
            <li class="<?= $this->request->here == $url? 'active': '' ?>">
                <a href="<?= $url ?>"><i class="fa fa-fw fa-dashboard"></i> <?= __('Home') ?></a>
            </li>

            <?php $url = $this->Html->Url->build(['controller'=>'journal','action' => 'index']); ?>
            <li class="<?= $this->request->here == $url? 'active': '' ?>">
                <a href="<?= $url ?>"><i class="fa fa-fw fa-book"></i> <?= __('Journal') ?></a>
            </li>

            <?php $url = $this->Html->Url->build(['controller'=>'timetable','action' => 'index']); ?>
            <li class="<?= $this->request->here == $url? 'active': '' ?>">
                <a href="<?= $url ?>"><i class="fa fa-fw fa-table"></i> <?= __('Timetable') ?></a>
            </li>
            
            <?php $url = $this->Html->Url->build(['controller'=>'schoolclass','action' => 'index']); ?>
            <li class="<?= $this->request->here == $url? 'active': '' ?>">
                <a href="<?= $url ?>"><i class="fa fa-fw fa-table"></i> <?= __('Classes') ?></a>
            </li>

            <?php $url = $this->Html->Url->build(['controller'=>'pupil','action' => 'index']); ?>
            <li class="<?= $this->request->here == $url? 'active': '' ?>">
                <a href="<?= $url ?>"><i class="fa fa-fw fa-table"></i> <?= __('Pupils') ?></a>
            </li>
            
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Аналітика <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">

                    <?php $url = $this->Html->Url->build(['controller'=>'mark','action' => 'index']); ?>
                    <li class="<?= $this->request->here == $url? 'active': '' ?>">
                        <a href="<?= $url; ?>"><i class="fa fa-fw fa-table"></i> <?= __('Зведена інформація: оцінки') ?></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>