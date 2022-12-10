<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Systems Plus College Foundation</title>
    <link rel="icon" href="assets/spcf-logo-solo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/bootstrap.min.css" />
    <link rel="stylesheet" href="style/style.css" />
</head>

<body>
    <!-- To include the contents of data.php file to the index -->
    <?php include 'data.php'; ?>
    <!-- Banner Section -->
    <section id="banner">
        <!-- Header -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" style="font-family: Montserrat;">
            <div class="container">
                <a class="navbar-brand" href=<?php echo $navbar_brand["url"] ?>><img src=<?php echo $navbar_brand["source"] ?> alt="spcf-logo" class="navbar-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <!-- foreach loop to access the content from $navigation array -->
                        <?php foreach ($navigation as $nav) : ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href=<?php echo $nav["url"] ?>><?php echo $nav["nav_item"] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Hero -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>LET'S REACH THAT <span>DREAM<br>CAREER</span> OF YOURS!</h2>
                    <h4>Committed on providing holistic development through excellence in <br> instructions, research, and extension services</h4>
                    <div class="row button">
                        <div class="col-2 join">
                            <!-- foreach loop to access the content from $join_button variable -->
                            <a href=<?php echo $join_button["url"] ?> target="_blank"><?php echo $join_button["button_label"] ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row counter">
                <!-- foreach loop to access the content from $counter array -->
                <?php foreach ($counter as $counts) : ?>
                    <div class="col">
                        <h3><?php echo $counts["count"] ?></h3>
                        <h5><?php echo $counts["caption"] ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Industry Partners -->
    <section id="partners">
        <div class="row">
            <!-- foreach loop to access the content from $partners array -->
            <?php foreach ($partners as $partner) : ?>
                <div class="col"><img src=<?php echo $partner ?> alt=""></div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Title Heading for the Quick Access Links section -->
    <section id="quick_links" class="section-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Quick Access Links</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Access Links section -->
    <section id="links">
        <div class="container">
            <div class="row options">
                <!-- foreach loop to access the content from $quick_links array -->
                <?php foreach ($quick_links as $link) : ?>
                    <div class="col-4 option">
                        <a href=<?php echo $link["url"] ?>>
                            <img src=<?php echo $link["img_source"] ?> alt="">
                            <h4><?php echo $link["caption"] ?></h4>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Announcement and Events section -->
    <section id="announcements">
        <!-- Title Heading for the Announcement and Events section -->
        <div class="container section-title">
            <div class="row">
                <div class="col-12" style="padding-bottom: 1rem;">
                    <h3>Announcement and Events</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row posts top">
                <!-- foreach loop to access the content from $announcements["top"] array -->
                <?php foreach ($announcements["top"] as $announcement) : ?>
                    <div class="col-6 post">
                        <a href=<?php echo $announcement["url"] ?>>
                            <div class="image"><img src=<?php echo $announcement["img_source"] ?> alt=""></div>
                            <div class="caption">
                                <h5><?php echo $announcement["caption"] ?></h5>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row posts middle">
                <div class="col post mid-col-1">
                    <!-- foreach loop to access the content from $announcements["middle"]["mid_1"] array -->
                    <?php foreach ($announcements["middle"]["mid_1"] as $announcement) : ?>
                        <div class="row">
                            <div class="col">
                                <a href=<?php echo $announcement["url"] ?>>
                                    <div class="image"><img src=<?php echo $announcement["img_source"] ?> alt=""></div>
                                    <div class="caption">
                                        <h5><?php echo $announcement["caption"] ?></h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col post more">
                    <div>
                        <!-- echo to access the content from $announcements["middle"]["mid_2"] array -->
                        <h4><a href=<?php echo $announcements["middle"]["mid_2"]["url"] ?>><?php echo $announcements["middle"]["mid_2"]["caption"] ?></a></h4>
                    </div>
                </div>
                <div class="col post">
                    <!-- echo to access the content from $announcements["middle"]["mid_3"] array -->
                    <a href=<?php echo $announcements["middle"]["mid_3"]["url"] ?>>
                        <img class="image-corner" src=<?php echo $announcements["middle"]["mid_3"]["img_source"] ?> alt="">
                    </a>
                </div>
            </div>
            <div class="row posts bottom">
                <!-- foreach loop to access the content from $announcements["bottom"] array -->
                <?php foreach ($announcements["bottom"] as $announcement) : ?>
                    <div class="col-6 post">
                        <a href=<?php echo $announcement["url"] ?>><img class="image-corner" src=<?php echo $announcement["img_source"] ?> alt=""></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Title Heading for the Academic Departments section -->
    <section id="academic_departments" class="section-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Academic Departments</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Departments section -->
    <section id="colleges">
        <div class="container">
            <div class="row">
                <div class="col-6 left">
                    <!-- foreach loop to access the content from $college["left"] array -->
                    <?php foreach ($colleges["left"] as $college) : ?>
                        <div class="row college">
                            <div class="col-2 image"><a href=<?php echo $college["url"] ?>><img src=<?php echo $college["img_source"] ?> alt=""></a></div>
                            <div class="col-10 college-name">
                                <a href=<?php echo $college["url"] ?>><?php echo $college["college_name"] ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-6 right">
                    <!-- foreach loop to access the content from $college["right"] array -->
                    <?php foreach ($colleges["right"] as $college) : ?>
                        <div class="row college">
                            <div class="col-2 image"><a href=<?php echo $college["url"] ?>><img src=<?php echo $college["img_source"] ?> alt=""></a></div>
                            <div class="col-10 college-name">
                                <a href=<?php echo $college["url"] ?>><?php echo $college["college_name"] ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- First footer section -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Get In Touch With Us</h4>
                </div>
            </div>
            <div class="row">
                <!-- foreach loop to access the content from $footer array -->
                <?php foreach ($footer as $items) : ?>
                    <div class="col-6">
                        <!-- foreach loop to access the content from the arrays inside $footer array -->
                        <?php foreach ($items as $item) : ?>
                            <div class="row">
                                <div class="col-1"><img src=<?php echo $item["img_source"] ?> alt=""></div>
                                <div class="col-11">
                                    <a href=<?php echo $item["url"] ?>><?php echo $item["caption"] ?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Second footer section -->
    <section id="footer-2">
        <div class="container">
            <div class="row">
                <!-- foreach loop to access the content from $footer2 array -->
                <?php foreach ($footer2 as $item) : ?>
                    <div class="col-3"><?php echo $item ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

</html>