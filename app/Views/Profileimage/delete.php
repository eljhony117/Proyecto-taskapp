<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete profile image<?= $this->endSection()?>

<?= $this->section('content') ?>

<h1 class="title">Delete profile image</h1>

<p>Are you sure?</p>

<?= form_open("/profileimage/delete") ?>

    <button class="button is-rounded is-danger is-outlined">Yes</button>
    <a class="button is-rounded is-dark is-outlined" href="<?= site_url('/profile/show') ?>">Cancel</a>

</form>

<?= $this->endSection() ?>