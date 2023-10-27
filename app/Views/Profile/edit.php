<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Edit Profile <?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title">Edit profile</h1>

<?php if (session()->has('errors')): ?>

    <ul>
        <?php foreach(session('errors') as $errors): ?>
            <li><?= $errors ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif ?>

<?= form_open("/profile/update")   ?>

    <div>
        <label class="has-text-weight-bold" for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
    </div>

    <div>
        <label class="has-text-weight-bold" for="email">Email</label>
        <input type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
    </div>

    <button Class="button is-rounded is-success is-outlined">Save</button>
    <a class="button is-rounded is-danger is-outlined" href="<?= site_url("/profile/show") ?>">Cancel</a>

</fomr>

<?= $this->endSection() ?>