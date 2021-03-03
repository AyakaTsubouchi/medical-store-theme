
          

<div class="contact-card">

    <div class="card-body">
        <div>
            <img class="card-img-top" src=" <?php echo get_field('card_image'); ?>" alt="Card image cap">
        </div>
        <div class="card-content">

            <h5 class="card-title"><?php echo get_field('card_title'); ?></h5>          
            <p class="card-text">
            <?php echo get_field('card_description'); ?></p>
            <a class="btn btn-primary" data-toggle="modal" data-target="#messageModal"> <?php echo get_field('card_button'); ?></a>
        </div>

    </div>
</div>

<?php include('message-modal.php'); ?>


