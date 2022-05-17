<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header() ?>
</head>

<body id="page-top">
    <?php get_template_part('template/header'); ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome to Kyoto Web Design</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Tell Me More</a>
        </div>
    </header>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted">The web site we create until now</h3>
            </div>
            <div class="row">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <?php $img = get_eyecatch_with_default(); ?>
                                    <img class="img-fluid" src="<?php $img[0]; ?>" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading"><?php the_title(); ?></div>
                                    <div class="portfolio-caption-subheading text-muted"><?php the_category(''); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                <?php else : ?>
                    <p>ポートフォリオはまだありません。</p>
                <?php endif ?>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase"><?php the_title() ?></h2>
                                        <img class="img-fluid d-block mx-auto" src="<?php echo $img[0] ?>" alt="..." />
                                        <p><?php the_content() ?></p>
                                        <ul class="list-inline">

                                            <li>
                                                <strong>Category:</strong><?php the_category(); ?>
                                            </li>
                                            <li>
                                                <strong>language:</strong>
                                                <?php the_tags(''); ?>
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>ポートフォリオはありません</p>
    <?php endif; ?>

    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>



    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Resolve business issue with sophisticated design</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack w-100">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Responsive Design</h4>
                    <p class="text-muted">Web site has been viewed by Smart phone in many way. We need the design considering UI/UX.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack w-100">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa-brands fa-wordpress-simple"></i>
                    </span>
                    <h4 class="my-3">WordPress Build</h4>
                    <p class="text-muted">WordPress is one of most flexible web CMS in the world. You can make contact form, post new article and SEO in one tool. </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack w-100">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa-solid fa-apartment"></i>
                    </span>
                    <h4 class="my-3">Big scale website</h4>
                    <p class="text-muted">Cooporate site has many aspects like marketing, branding, hiring and PR. Big scale web meets any point of business influence. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills-->
    <section class="page-section" id="skill">
        <div class="container align-items-center">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Skills</h2>
                <h3 class="section-subheading text-muted">The Programming language I can manage</h3>
            </div>
            <h4 class="my-3 text-center">Programming Languages & Tools</h4>
            <ul class="list-inline dev-icons text-center">
                <li class="list-inline-item fs-1"><i class="fab fa-html5"></i></li>
                <li class="list-inline-item fs-1"><i class="fab fa-css3-alt"></i></li>
                <li class="list-inline-item fs-1"><i class="fab fa-sass"></i></li>
                <li class="list-inline-item fs-1"><i class="fa-brands fa-bootstrap"></i></li>
                <li class="list-inline-item fs-1"><i class="fab fa-js"></i></li>
                <li class="list-inline-item fs-1"><i class="fab fa-wordpress"></i></li>
                <li class="list-inline-item fs-1"><i class="fab fa-laravel"></i></li>
                <li class="list-inline-item fs-1"><i class="fab fa-node-js"></i></li>
                <li class="list-inline-item fs-1"><i class="fab fa-npm"></i></li>
            </ul>
            <h4 class="my-3 pt-3 text-center">Workflow</h4>
            <div class="margin-auto">
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Mobile-First, Responsive Design
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Cross Browser Testing & Debugging
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        website design friendly to SEO
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Structure Regarding branding<br>
                    </li>

                </ul>
            </div>

        </div>
    </section>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">We provide most appropriate member to build website.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/team/myface.jpg" alt="..." />
                        <h4>Shuma Harada</h4>
                        <p class="text-muted">Lead Director</p>
                        <a class="btn btn-dark btn-social mx-2" href="//twitter.com/shu_h08" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="//www.facebook.com/profile.php?id=100004353756261" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="//www.linkedin.com/in/%E7%A7%80%E9%A6%AC-%E5%8E%9F%E7%94%B0-617027205/" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/team/cs.png" alt="..." />
                        <h4>-</h4>
                        <p class="text-muted">Lead Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/team/cs.png" alt="..." />
                        <h4>-</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">The field of web site has changed day by day. And you have to adjust to manyu things. We cover any point of web site because we have team to support client.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">I, Shuma experience a variety of things in my life. I can share of those. </h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/about/sydney.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2012-20013</h4>
                            <h4 class="subheading">Have been in Australia</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">I have been to Sydney and Ayers Rock in Australia. I met many people and studied English. I also worked at Hotel in Ayers Rock.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/about/kg2.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2014 March</h4>
                            <h4 class="subheading">Graduated from Kwansei gakuin University</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">I majored in Economics in University. In nice atomosphire of school, I studied and experienced new things.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/about/book.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2016-2019</h4>
                            <h4 class="subheading">Worked as novel editor</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">I worked as a novel editor for 3 years. I like Japanese culture and tried to expand it. I worked with many people and get the skill to communicate with person.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php get_template_directory_uri(); ?>/wp-content/themes/theme1/assets/img/about/freelance.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2022 May</h4>
                            <h4 class="subheading">Started freelance web designer</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">I have never studied in any programming school. I have the skill to study by myself. So I can manage anything in the work.</p>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted mb-2">Please feel free to cosult us anything you worry about.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <?php echo do_shortcode('[mwform_formkey key="14"]'); ?>
        </div>
    </section>
    <?php get_template_part('template/footer'); ?>


    <?php get_footer() ?>
</body>

</html>