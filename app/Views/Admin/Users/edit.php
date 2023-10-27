<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Edit User <?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title">Edit User</h1>

<?php if (session()->has('errors')): ?>

    <ul>
        <?php foreach(session('errors') as $errors): ?>
            <li><?= $errors ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif ?>

<?= form_open("/admin/users/update/" . $user->id)   ?>

    <?= $this->include('Admin/Users/form') ?>

    <button Class="button is-rounded is-success is-outlined mt-4">Save</button>
    <a class="button is-rounded is-danger is-outlined mt-4" href="<?= site_url("/admin/users/show/".$user->id) ?>">Cancel</a>

</fomr>

<?= $this->endSection() ?>