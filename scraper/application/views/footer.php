<footer class="footer">
    <div class="container">
        <span class="text-muted">Page generated in <strong>{elapsed_time}</strong> seconds /
            <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
            /
            <?php
            $version = explode('.', PHP_VERSION);
            echo 'PHP version: ' . $version[0] . '.' . $version[1]; ?>
        </span>
    </div>
</footer>

<script src="<?php echo base_url('assets/js/jquery-3.2.1.slim.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

<script>
    $(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
