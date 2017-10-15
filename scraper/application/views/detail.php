<div class="container">


<div class="card" style="margin-top: 1em; margin-bottom: 1em;">
    <div class="card-header">
        <strong><?php echo $item[0]['news_title']; ?></strong>

    </div>
    <div class="card-body">
        <?php echo $item[0]['news_content']; ?>

    </div>

    <div class="card-footer text-muted">
        <span class="badge badge-secondary">Viewed: <?php echo $item[0]['counter']; ?> times</span>
        <a href="<?php echo $item[0]['url']; ?>" class="badge badge-success">Source</a>
    </div>
</div>

<!---
    Array (
    [news_id] => 1
    [counter] => 0
    [news_title] => Привет всем
    [url] => https://habrahabr.ru/
    [news_content] => Бла бла бла
    ) 1

    --->
</div>
