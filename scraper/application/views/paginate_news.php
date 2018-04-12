<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

                <h3 style="margin-top: 1em;">All news</h3>
                <hr>


            <?php foreach($news as $value) { ?>
            <div class="article">
                <div class="article-title"><h2><a href="<?php echo base_url('detail/?id='); echo  $value['news_id']; ?>"><?php echo $value['news_title']; ?></a></h2></div>
                <div class="article-info">
                    <p>
                        <span class="badge badge-danger">Viewed <?php echo $value['counter']; ?> times</span>

                        <a class="badge badge-success" href="<?php echo $value['url']; ?>">
                            <i class="fa fa-retweet" aria-hidden="true"></i>
                            Source
                        </a>
                    </p>
                </div>

                <div class="article-image">
                    <img src="<?php echo $value['img']; ?>" class="img-fluid">
                </div>

                <div class="article-description">
                    <p><?php echo mb_strimwidth($value['news_content'], 0, 150, "..."); ?></p>
                </div>

                <div class="article-page-link">
                    <a class="btn btn-secondary btn-lg" href="<?php echo base_url('detail/?id='); echo  $value['news_id']; ?>">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <hr>

            </div>
            <?php }  ?>

                <nav aria-label="pagination">
                    <?php echo $links; ?>
                </nav>
        </div>
    </div>
</div>

