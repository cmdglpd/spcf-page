<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systems Plus College Foundation</title>
    <link rel="icon" href="assets/spcf-logo-solo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/bootstrap.min.css" />
    <link rel="stylesheet" href="style/style.css" />
    <script src="js/navbar.js"></script>
</head>

<style>
    .contact {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        height: 100vh;
        width: 100%;
        background-image: url("assets/backgrounds/hero_section_bg.png");
        background-color: #4a4e64;
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: overlay;
        color: #ffffff;
    }

    .row {
        width: 50%;
        align-items: center;
        justify-content: center;
        margin: auto;
        text-align: center;
        display: flex;
    }

    .col {
        text-align: center;
        align-items: center;
        justify-content: space-between;
        width: 40%;
        margin: 2rem;
        background-color: #3058BE;
        border-radius: 0.5rem;
        padding: 1rem;
    }

    img {
        height: 250px;
        width: 250px;
        margin-bottom: 1rem;
    }

    a {
        text-decoration: none;
        color: #ffffff;
    }

    .contact-links {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.5rem;
        align-items: center;
    }

    .contact-links img {
        height: 2rem;
        width: 2rem;
    }
</style>

<body>
    <!-- To include the contents of data.php file to the index -->
    <?php include 'data.php'; ?>
    <div class="contact">
        <div class="row">
            <h3>Developers</h3>
            <?php foreach ($contacts as $contact) : ?>
                <div class="col">
                    <img src=<?php echo $contact["pfp_source"] ?> alt="">
                    <h5><?php echo $contact["name"] ?></h5>
                    <div class="contact-links">
                        <?php foreach ($contact["links"] as $contactLink) : ?>
                            <a href=<?php echo $contactLink["url"] ?> target="_blank"><img src=<?php echo $contactLink["img_source"] ?> alt=""></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>