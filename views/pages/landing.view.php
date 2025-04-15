<?php $this->extend('layouts.master') ?>

<?php $this->section('content') ?>
<div class="landing-page">
    <?= $this->put('components.banner') ?>
    <?= $this->put('components.tracking') ?>
    <?= $this->put('components.nations') ?>
    <?= $this->put('components.install-app') ?>
    <?= $this->put('components.awards') ?>
    <?= $this->put('components.partners') ?>
    <?= $this->put('components.news') ?>
    <?= $this->put('components.map') ?>
    <?= $this->put('components.feedback') ?>
    <?= $this->put('components.footer') ?>
</div>
<?php $this->stop() ?>
