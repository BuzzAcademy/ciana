<?php $this->load->view('layout/admin/_before-content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1><?= isset($title) ? $title : 'Page Title' ?></h1>
    </section>
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <p><?= isset($content) ? $content : '' ?></p>
          </div>
        </div>
    </section>
</div>

<?php $this->load->view('layout/admin/_after-content'); ?>
