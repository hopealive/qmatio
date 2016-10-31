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
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="generator" content="Codeply">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/front/css/styles.css" />
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <?php echo $this->Html->meta ( 'favicon.ico', '/images/favicon.ico', [  'type' => 'icon']); ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>


        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>


    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> Іванковичі</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#one">Головна</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#two">Проекти</a>
                    </li>
<!--                    <li>
                        <a class="page-scroll" href="#three">Gallery</a>
                    </li>-->
<!--                    <li>
                        <a class="page-scroll" href="#four">Features</a>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="#contacts">Контакти</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" data-toggle="modal" title="Про проект" href="#aboutModal">Про проект</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">Ivankovichy</h1>
                <h4>Я - громадянин Іванковичей</h4>
                <hr>
                <a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-primary btn-xl">Вимкнути відео</a> &nbsp;
                <a href="#one" class="btn btn-primary btn-xl page-scroll">Почати працювати</a>
            </div>
        </div>
        <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
            <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/Traffic-blurred2.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
    </header>
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary">Проект "Я - громадянин Іванковичей"</h2>
                    <br>
                    <p class="text-faded">
                        Головна ціль проекту - teacher електронних засобів для участі у громадському житті Іванковичей.
                    </p>
                    <a href="#two" class="btn btn-default btn-xl page-scroll">Перейти до проектів</a>
                </div>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">Проекти</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>
                        <a href="#three">
                            <h3>Електронна Школа Qmatio</h3>
                        </a>
                        <p class="text-muted">Проект автоматизації </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ion-ios-search wow fadeInUp" data-wow-delay=".2s"></i>
                        <h3>Місцевий референдум</h3>
                        <p class="text-muted">Проект проведення голосування у підтримку тих чи інших напрямів розвитку Іванковичей</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                        <h3>Твій лікар</h3>
                        <p class="text-muted">Проект спілкування з лікарем, електронна черга.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="three" class="no-padding">
        <div class="container-fluid">
            <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2 class="text-center text-primary">QMatio. Школа </h2>
                <hr>
                <div class="media wow fadeInRight">
                    <p>Програмний комплекс для автоматизації та віртуалізації
                        навчального процессу у системі загальноосвітніх закладів.</p>
                    <h3>Мета: </h3>
                        <p>використання автоматизованих систем при
                        мінімальному навантаженні на викладацький склад та максимально можливому функціоналі.
                        </p>
                        <ul>
                            <li>
                                <a href="/teacher/users/login" target="_blank">Вхід для вчителів</a>
                                <p><b>login: teacher</b><br>
                                <b>pass: demo</b></p>
                            </li>
                            <li>
                                <a href="/manager/users/login" target="_blank">Вхід для менеджерів школи</a>
                                <p><b>login: manager</b><br>
                                <b>pass: demo</b></p>
                            </li>
                            <li>
                                <a href="/pupil/users/login" target="_blank">Вхід для учнів</a>
                                <p><b>login: pupil</b><br>
                                <b>pass: demo</b></p>
                            </li>
                            <li>
                                <a href="/parent/users/login" target="_blank">Вхід для батьків</a>
                                <p><b>login: parent</b><br>
                                <b>pass: demo</b></p>
                            </li>
                        </ul>
                </div>

            </div>
            </div>
        </div>
    </section>


    <section class="container-fluid" id="four">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2 class="text-center text-primary">Фнукціонал:</h2>
                <hr>

                <div class="media wow fadeInRight">
                    <h3>Для вчителів:</h3>
                    <div class="media-body media-middle">
                        <ul>
                            <li>можливість контролювати наявність учнів ( за умов дозволу батьків можливе автоматичне визначення місцезнаходження учня );</li>
                            <li>додатковий безпосередній зв”язок з батьками;</li>
                            <li>неможливість корегування розкладу, домашніх завдань та оцінок дитиною;</li>
                            <li>автоматизація документації по переведенню дітей з одного класу в наступний;</li>
                            <li>додаткові можливості професійного спілкування з вчителями в інших школах;</li>
                            <li>можливість анонімного зв’язку з адміністрацією школи.</li>
                        </ul>
                    </div>
                    <div class="media-right">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                </div>
                <hr>
                
                <div class="media wow fadeIn">
                    <h3>Для учнів:</h3>
                    <div class="media-left">
                        <a href="#alertModal" data-toggle="modal" data-target="#alertModal">
                            <i class="icon-lg ion-ios-flask-outline"></i>
                        </a>
                    </div>
                    <div class="media-body media-middle">
                        <ul>
                            <li>акутальна інформація про розклад занять з нагадуванням про зміни;</li>
                            <li>додаткова інформація про домашні завдання;</li>
                            <li>додаткові навчальні матеріали.</li>
                        </ul>
                    </div>
                </div>
                <hr>

                <div class="media wow fadeInRight">
                    <h3>Для батьків:</h3>
                    <div class="media-body media-middle">
                        <ul>
                            <li>отримання інформації про успіхи або проблеми дитини в on-line режимі;</li>
                            <li>швидкий доступ до вчителів та адміністрації школи;</li>
                            <li>можливість колективного спілкування в межах батьківського комітету.</li>
                        </ul>
                    </div>
                    <div class="media-right">
                        <i class="icon-lg ion-ios-heart-outline"></i>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </section>


    <aside class="bg-dark" id="contacts">
        <div class="container text-center">
            <div class="call-to-action">
                <h2 class="text-primary">Контакти</h2>
            </div>
            <br>
            <hr/>
            <br>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12 text-center">
                            <i class="icon-lg fa fa-envelope" title="email"></i>
                            <p><a href="mailto:websitegdp@gmail.com">websitegdp@gmail.com</a></p>
                        </div>
                        <div class="col-sm-4 col-xs-12 text-center">
                            <i class="icon-lg fa fa-skype" title="skype"></i>
                            <p><a href="skype:gregzorbov">gregzorbov</a></p>
                        </div>
                        <div class="col-sm-4 col-xs-12 text-center">
                            <i class="icon-lg fa fa-phone" title="phone"></i>
                            <p><a href="javascript:void(0)">+380509523035</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
        
    <section id="last">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn">Зворотній зв'язок</h2>
                    <hr class="primary">
                    <p>Ми любимо зворотній зв'язок. Заповніть форму нижче і ми зв'яжемося з вами.</p>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <form class="contact-form row">
                        <div class="col-md-4">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-4">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-4">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-md-12">
                            <label></label>
                            <textarea class="form-control" rows="9" placeholder="Your message here.."></textarea>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <button type="button" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Проекти</h4>
                    <ul class="list-unstyled">
                        <li><a href="#three">Електронна Школа Qmatio</a></li>
                        <li><a href="#two">Місцевий референдум</a></li>
                        <li><a href="#two">Твій лікар</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Меню</h4>
                    <ul class="list-unstyled">
                    <li>
                        <a class="page-scroll" href="#one">Головна</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#two">Проекти</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contacts">Контакти</a>
                    </li>
<!--                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>-->
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 column">
<!--                    <h4>Stay Posted</h4>
                    <form>
                        <div class="form-group">
                          <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                        </div>
                    </form>-->
                </div>
                <div class="col-xs-12 col-sm-3 text-right">
                    <h4>Follow</h4>
                    <ul class="list-inline">
                      <li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Dribble"><i class="icon-lg ion-social-dribbble-outline"></i></a></li>
                    </ul>
                </div>
            </div>
            <br/>
            <span class="pull-right text-muted small"><a href="http://gregzorb.com/">Made By gregzorb.com</a> ©2016 QMatio</span>
        </div>
    </footer>
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="modal-body">
        		<img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" />
        		<p>
        		    <br/>
        		    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
        		</p>
        	</div>
        </div>
        </div>
    </div>
    <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">Про проект</h2>
        		<h5 class="text-center">
        		    Проект "Я - громадянин Іванковичей"
        		</h5>
        		<p class="text-justify">
                                                Головна ціль проекту - використання електронних засобів для участі у громадському житті Іванковичей.
        		</p>
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
        	</div>
        </div>
        </div>
    </div>
    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">Чудово!</h2>
        		<p class="text-center">Ваш запит відправлено.Відповідь на Ваш запит ви отримаєте на свою електронну пошту</p>
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
        	</div>
        </div>
        </div>
    </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>


    <!--scripts loaded here from cdn for performance -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="/front/js/scripts.js"></script>

    </body>
</html>
