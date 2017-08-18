<?php get_header();?> 



<body data-spy="scroll" data-target="#navbar-scroll">

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('<?= get_field('main_background') ?>');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> <a href=""><img src="<?= get_field('main_logo') ?>" alt="logo"></a></div>

                            <!-- /.main title -->
                            <h2 class="wow fadeInLeft main-title1">
                                <?= get_field('action_title_1') ?>
                            </h2>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInUp">
                                <h1><?= get_field('action_title_2') ?></h1>
                            </div>				  

                            <!-- /.header button -->
                            <div class="head-btn clearfix wow fadeInLeft">
							
                                
								<a href="#download" class="btn-primary div-ref"><span><?= get_field('default_header_button_1') ?></span></a>
								
								
                                <a href="#intro" class="btn-default div-ref"><span><?= get_field('header_button_2') ?></span></a>
								
								
								<!-- <a href="#contact" class="btn-default div-ref"><span><?= get_field('header_button_3') ?></span></a> -->
								
								
                            </div>



                        </div> 

                        <!-- /.signup form -->
                        <div class="col-md-5">

                            <div class="signup-header wow fadeInUp">
                                <h3 class="form-title text-center"><?= get_field('end_of_action_tittle') ?></h3>
								
								
								<div id="countdown"></div>
								<div class="row timer">
									<div class="col-xs-3">
										<span class="timer_day"></span>
										<span class="timer_day_text"></span>
									</div>                  
									<div class="col-xs-3">
										<span class="timer_hour"></span>
										<span class="timer_hour_text"></span>
									</div>                  
									<div class="col-xs-3">
										<span class="timer_min"></span>
										<span class="timer_min_text"></span>
									</div>
									<div class="col-xs-3">
										<span class="timer_sec"></span>
										<span class="timer_sec_text"></span>
									</div>                  
								</div>	
								
								<div class="action-time-img">
									<img src="<?= get_field('action_time_img') ?>" alt="image" class="img-responsive">
								</div>
								                                
                            </div>				

                        </div>
                    </div>
                </div> 
            </div> 
        </div>

        <!-- NAVIGATION -->
        <div id="menu">
            <nav class="navbar-wrapper navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand site-name" href="#top"><img src="<?= get_field('menu_logo') ?>" alt="logo"></a>
                    </div>

                    <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#intro"><?= get_field('main_menu_1') ?></a></li>
                            <li><a href="#feature"><?= get_field('main_menu_2') ?></a></li>
                            <li><a href="#download"><?= get_field('main_menu_3') ?></a></li>
                            <li><a href="#package"><?= get_field('main_menu_4') ?></a></li>
                            <!-- <li><a href="#testi"><?= get_field('main_menu_5') ?></a></li> -->
                            <li><a href="#contact"><?= get_field('main_menu_6') ?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- /.intro section -->
        <div id="intro">
            <div class="container">
                <div class="row">

                    <!-- /.intro image -->
                    <div class="col-md-6 intro-pic wow slideInLeft">
                        <img src="<?= get_field('img_tariff_description') ?>" alt="image" class="img-responsive">
                    </div>	

                    <!-- /.intro content -->
                    <div class="col-md-6 wow slideInRight">
                        <h2><?= get_field('tariff_title') ?></h2>
                        <ul>
							<li><span><?= get_field('tariff_inf_1') ?></span></li>
							<li><span><?= get_field('tariff_inf_2') ?></span></li>
							<li><span><?= get_field('tariff_inf_3') ?></span></li>
							<li><span><?= get_field('tariff_inf_4') ?></span></li>
							<li><span><?= get_field('tariff_inf_5') ?></span></li>
						</ul>

                        <div class="btn-section"><a href="#download" class="btn-default"><span>Подключить</span></a></div>

                    </div>
                </div>			  
            </div>
        </div>

        <!-- /.feature section -->
        <div id="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

                        <!-- /.feature title -->
                        <h2><?= get_field('our_features_main_title') ?></h2>
                        
                    </div>
                </div>
                <div class="row row-feat">
                    <div class="col-md-4 text-center">

                        <!-- /.feature image -->
                        <div class="feature-img">
                            <img src="<?= get_field('our_features_main_img') ?>" alt="image" class="img-responsive wow fadeInLeft">
                        </div>
                    </div>

                    <div class="col-md-8">

                        <!-- /.feature 1 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-like2 pe-5x pe-va wow fadeInUp"></i>
                            <div class="inner">
                                <h4><?= get_field('our_feature_1') ?></h4>
                                <p><?= get_field('feature1_describe') ?></p>
                            </div>
                        </div>

                        <!-- /.feature 2 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-rocket pe-5x pe-va wow fadeInUp" data-wow-delay="0.2s"></i>
                            <div class="inner">
                                <h4><?= get_field('our_feature_2') ?></h4>
                                <p><?= get_field('feature2_describe') ?></p>
                            </div>
                        </div>

                        <!-- /.feature 3 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-tools pe-5x pe-va wow fadeInUp" data-wow-delay="0.4s"></i>
                            <div class="inner">
                                <h4><?= get_field('our_feature_3') ?></h4>
                                <p><?= get_field('feature3_describe') ?></p>
                            </div>
                        </div>

                        <!-- /.feature 4 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-cash pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
                            <div class="inner">
                                <h4><?= get_field('our_feature_4') ?></h4>
                                <p><?= get_field('feature4_describe') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.feature 2 section -->
        <div id="feature-2">
            <div class="container">
                <div class="row">

                    <!-- /.feature content -->
                    <div class="col-md-6 wow fadeInLeft">
                        <h2>Learn how to make your app marketing efficient</h2>
                        <p>Good marketing makes the company look smart. <span class="highlight">Great marketing</span> makes the customer feel smart, - Joe Chernov. Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has, - Margaret Mead. The best way to predict the future is to create it, - Peter Drucker.
                        </p>

                        <div class="btn-section"><a href="#download" class="btn-default"><span>Download Now</span></a></div>

                    </div>

                    <!-- /.feature image -->
                    <div class="col-md-6 feature-2-pic wow fadeInRight">
                        <img src="<?php bloginfo('template_url'); ?>/images/feature2-image.jpg" alt="macbook" class="img-responsive">
                    </div>				  
                </div>			  

            </div>
        </div>


        <!-- /.download section -->
        <div id="download">
            <div class="action fullscreen parallax" style="background-image:url('<?php bloginfo('template_url'); ?>/images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center" id="order-div-main">
                            <h2 class="wow fadeInRight on-hide" id="check-and-go-order"><?= get_field('invite_order') ?></h2>
                            <h2 class="wow fadeInDown on-hide" id="lets-go-order"><?= get_field('lets_go_order') ?></h2>
                            <div class="signup-header wow fadeInLeft" id="order-div-form">
                                <h3 class="form-title text-center" id="street_text"><?= get_field('street_input') ?></h3>
								<h3 class="form-title text-center on-hide" id="house_text"><?= get_field('house_input') ?></h3>
								<h3 class="form-title text-center on-hide" id="family_text"><?= get_field('family_input') ?></h3>
								<h3 class="form-title text-center on-hide" id="order_text"><?= get_field('go_order_advice') ?></h3>
				
                                    <form class="form-header" role="form" method="POST" action="" id="order_send_form">
                                        <input type="hidden" name="u" value="503bdae81fde8612ff4944435">
                                        <input type="hidden" name="id" value="bfdba52708">
									<div class="hidder">	
										<div class="field">
											<label>Индекс</label>
											<input type="text" name="zip">
										</div>
										<div class="field">
											<label>Регион</label>
											<input type="text" name="region">
										</div>
										<div class="field">
											<label>Район</label>
											<input type="text" name="district">
										</div>
										<div class="field">
											<label>Город</label>
											<input type="text" name="city" id="sity_input">
										</div>
									</div>
									<!--
										<div class="field">
											<label>Улица</label>
											<input type="text" name="street">
										</div>
									
										<div class="field">
											<label>Дом</label>
											<input type="text" name="building">
										</div>
										
									-->
									
										<div class="tooltip" style="display: none;"><b></b><span></span></div>
										
										
                                        <div class="form-group on-hide" id="street_check_div">
                                            <input class="form-control input-lg first-order-field" name="street" id="street_check_field" type="text" placeholder="Улица" required>
                                        </div>
                                        <div class="form-group on-hide" id="house_check_div">
                                            <input class="form-control input-lg first-order-field" name="building" id="house_check_field" type="text" placeholder="Дом" required>
                                        </div>
                                        <div class="form-group on-hide" id="family_input_div">
                                            <input class="form-control input-lg first-order-field" name="family" id="family_input_field" type="text" placeholder="ФИО" required>
                                        </div>
                                        <div class="form-group on-hide" id="phone_input_div">
                                            <input class="form-control input-lg first-order-field" name="phone" id="phone_input_field" type="text" placeholder="Телефон" required>
                                        </div>
       
                                        <div class="form-group last" id="send_order_div">
                                            <input type="submit" class="btn btn-warning btn-block btn-lg" id="send_order_btn" value="Оставить заявку">
										</div>
                                    <!--    <p class="privacy text-center">We will not share your email. Read our <a href="classes.php">privacy policy</a>.</p> -->
                                    </form>
                            </div>

                            <p class="download-text wow fadeInRight"><?= get_field('avilible_districts') ?></p>

                            
                        </div>	
                    </div>	
                </div>
            </div>
        </div>

        <!-- /.pricing section -->
        <div id="package">
            <div class="container">
                <div class="text-center">

                    <!-- /.pricing title -->
                    <h2 class="wow fadeInLeft"><?= get_field('advanced_feature_title') ?></h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row package-option">

                    <!-- /.package 1 -->
                    <div class="col-sm-4">
                        <div class="price-box wow fadeInUp">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-signal pe-5x"></i>

                                <!-- /.package name -->
                                <h3><?= get_field('advanced_feature_1') ?></h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
								<div class="feature-img-div">
									<img src="<?= get_field('advanced_feature_img_1') ?>" alt="image" class="img-responsive feature-img">
								</div>
                            </div>

                            <!-- /.package features -->
                        <!--    <ul class="price-feature text-center">
                                <li><strong>100MB</strong> Disk Space</li>
                                <li><strong>200MB</strong> Bandwidth</li>
                                <li><strong>2</strong> Subdomains</li>
                                <li><strong>5</strong> Email Accounts</li>
                                <li><strike>Webmail Support</strike></li>				  
                            </ul> -->
							<div class="text-block text-center">
								<h3><?= get_field('describe_advanced_feature_1') ?><h3>
							</div>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#contact">Узнать подробности</a>
                            </div>	
                        </div>
                    </div>

                    <!-- /.package 2 -->
                    <div class="col-sm-4">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-joy pe-5x"></i>

                                <!-- /.package name -->
                                <h3><?= get_field('advanced_feature_2') ?></h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
								<div class="feature-img-div">
									<img src="<?= get_field('advanced_feature_img_2') ?>" alt="image" class="img-responsive feature-img">
								</div>
                            </div>

                            <!-- /.package features -->
                        <!--    <ul class="price-feature text-center">
                                <li><strong>101 ТВ канал</strong> Disk Space</li>
                                <li><strong>в HD качестве</strong> Bandwidth</li>
                                <li><strong>всего за 210 руб/месяц</strong></li>
                                <li><strong></strong></li>
                                			  
                            </ul> -->
							<div class="text-block text-center">
								<h3><?= get_field('describe_advanced_feature_2') ?><h3>
							</div>
							
                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#contact">Узнать подробности</a>
                            </div>
                        </div>
                    </div>	

                    <!-- /.package 3 -->
                    <div class="col-sm-4">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-disk pe-5x"></i>

                                <!-- /.package name -->
                                <h3><?= get_field('advanced_feature_3') ?></h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
								<div class="feature-img-div">
									<img src="<?= get_field('advanced_feature_img_3') ?>" alt="image" class="img-responsive feature-img">
								</div>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>Антивирус</strong></li>
                                <li><strong>Родительский контроль</strong></li>
                                <li><strong>Личные финансы</strong></li>
                                <li><strong>Готовые сайты</strong></li>
                                					  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#contact">Узнать подробности</a>
                            </div>	
                        </div>
                    </div>

                   

                </div>
            </div>
        </div>

        <!-- /.client section -->
        <div id="client"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img alt="client" src="<?php bloginfo('template_url'); ?>/images/client1.png" class="wow fadeInUp">
                        <img alt="client" src="<?php bloginfo('template_url'); ?>/images/client2.png" class="wow fadeInUp" data-wow-delay="0.2s">
                        <img alt="client" src="<?php bloginfo('template_url'); ?>/images/client3.png" class="wow fadeInUp" data-wow-delay="0.4s">
                        <img alt="client" src="<?php bloginfo('template_url'); ?>/images/client4.png" class="wow fadeInUp" data-wow-delay="0.6s">
                    </div>
                </div>
            </div>	
        </div>

         

        <!-- /.contact section -->
        <div id="contact">
            <div class="contact fullscreen parallax" style="background-image:url('<?php bloginfo('template_url'); ?>/images/bg.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="row contact-row">

                            <!-- /.address and contact -->
                            <div class="col-sm-5 contact-left wow fadeInUp">
                                <h2><span class="highlight">Оставайтесь</span> на связи!</h2>
                                <ul class="ul-address">
                                    <li><i class="pe-7s-map-marker"></i>Санкт-Петербург</br>
                                        ул. Большая Зеленина д. 8, корп. 2</br>
										БЦ "Чкаловский", 1 этаж, офис. 24 Н
                                    </li>
                                    <li><i class="pe-7s-phone"></i>+7 (812) 403-01-03</br>
                                        
                                    </li>
                                    <li><i class="pe-7s-mail"></i><a href="mailto:info@yoursite.com">info@sumtel.ru</a></li>
                                    <li><i class="pe-7s-look"></i><a href="https://spb.sumtel.ru/">www.sumtel.ru</a></li>
                                </ul>	

                            </div>

                            <!-- /.contact form -->
                            <div class="col-sm-7 contact-right">
                                <form method="POST" id="contact-form" class="form-horizontal" action="contactengine.php" onSubmit="alert( 'Thank you for your feedback!' );">
                                    <div class="form-group">
                                        <input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Как Вас зовут" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
                                    </div>					
                                    <div class="form-group">
                                        <textarea name="Message" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Оставить сообщение" class="btn btn-success wow fadeInUp" />
                                    </div>
                                </form>		
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




   

<?php get_footer();?>