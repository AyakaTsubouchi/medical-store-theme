<?php
/*
Template name: Home
*/
?>
<?php get_header(); ?>
<?php
if (have_posts()) :

    while (have_posts()) : the_post();

?>
        <?php include('inc/slider.php'); ?>
        <div class="home container">
            <section>
                <h2>
                    <h2 class="lighter"><span>Company Overview</span></h2>
                </h2>
                <p>
                    We take pride in our unwavering commitment to producing high-quality products. You can order with confidence, knowing that Puritan products are manufactured, packaged, and shipped from our state-of-the-art manufacturing facility in Guilford, Maine. We maintain valuable relationships with many of America’s top distributors and kit manufacturers to ensure they have access to our extensive product line.
                </p>
                <div class="quotes">
                    <p>
                        "The customized swab, and more importantly, the team at Puritan who worked with us starting with our rep provided us with the perfect sampling tool. And we’re excited to see the results of this research using this swab."— Emily Curd, Research Associate, University of California
                    </p>
                </div>
                <p>
                    Ready to learn more about our cutting-edge products? Contact Us to speak with one of our knowledgeable and friendly product specialists.
                </p>
            </section>
            <section style="background:gray;">
                <h2>Why Choose Puritan</h2>
                <div class="description">
                    <p>
                        Quality, consistency, availability—that’s our promise, and it’s why our customers continue doing business with us year after year. Our comprehensive product line offers one-stop shopping for standard and specialty swabs and applicators.</p>
                    <p>
                        Not finding the specific product you’re looking for? Don’t worry—we can prototype and customize the ideal product for your specific application. Our skilled research and development team is always eager to provide custom solutions including configurations and packaging, private labeling, and custom media filling. No other company is as capable of filling specific requests—including single-use devices for detecting emerging diseases and testing for bioterrorism.</p>
                </div>
                <div class="logos">
                    <img src="https://www.puritanmedproducts.com/media/wysiwyg/logos.png" alt="logos">
                </div>
            </section>
            <section>
                <h2>
                    <h2 class="lighter"><span>Green Initiatives
                        </span></h2>
                </h2>
                <p>
                    Puritan values our environment and natural resources. When Puritan was established in 1919, we used Northern white birch in the manufacturing of single-use items, and we still use it for many of our wood products today. Our company has long been involved in the stewardship of the woodlands of Northern New England.
                </p>
                <h3>A packaging manufacturing facility that runs on renewable energy and recycling</h3>
                <div class="col one">
                    <div class="icons"></div>
                    <p>Puritan runs on 100% <br>renewable energy (wood <br>process waste) for all <br>building heat, hot water, <br>and manufacturing.</p>
                </div>
                <div class="col two">
                    <div class="icons"></div>
                    <p>Puritan runs on 100% <br>renewable energy (wood <br>process waste) for all <br>building heat, hot water, <br>and manufacturing.</p>
                </div>
                <div class="col three">
                    <div class="icons"></div>
                    <p>Puritan runs on 100% <br>renewable energy (wood <br>process waste) for all <br>building heat, hot water, <br>and manufacturing.</p>
                </div>
            </section>
            <section>
                <h2>
                    <h2 class="lighter"><span>Company Overview Video
                        </span></h2>
                </h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AHCEehbI3zo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
        </div>


<?php

    endwhile;
endif;
?>

<?php get_footer(); ?>