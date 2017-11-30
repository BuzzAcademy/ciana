<script src="/public/vendors/jquery/dist/jquery.min.js"></script>
<script src="/public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/public/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/public/vendors/fastclick/lib/fastclick.js"></script>
<script src="/public/vendors/admin-lte/dist/js/adminlte.min.js"></script>
<?php if (isset($more_scripts)) :?>
<?php   foreach($more_scripts as $script): ?>
<script src="<?= $script ?>"></script>
<?php   endforeach; ?>
<?php endif; ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $this->config->item('ga_tracking_id') ?>"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', '<?= $this->config->item('ga_tracking_id') ?>');
</script>
