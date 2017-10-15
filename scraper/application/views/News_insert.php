
<div class="container">

    <div style="margin-top: 1em;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">New post</li>
        </ol>
    </div>

    <?php if (isset($message)) { ?>
        <div class="alert alert-success" role="alert">
            New post added successful!
        </div>
    <?php } ?>

    <?php echo form_open(base_url() . 'news_insert'); ?>
        <div class="form-group">
            <label for="news_title">Title</label>
            <?php echo form_input(array('id' => 'news_title', 'name' => 'news_title', 'class' => 'form-control', 'placeholder' => 'Enter Title')); ?>
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <?php echo form_input(array('id' => 'url', 'name' => 'url', 'placeholder' => 'https://habrahabr.ru/', 'class' => 'form-control')); ?>
        </div>

        <div class="form-group">
            <label for="news_content">Post content</label>
            <textarea class="form-control" id="news_content" name="news_content" rows="3"></textarea>
        </div>

    <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary')); ?>
    <?php echo form_close(); ?>
    <br>

</div>
