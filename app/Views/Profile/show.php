<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Profile <?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title">Profile</h1>

<?php if ($user->profile_image): ?>

    <figure class="image is-128x128">

    <img class="is-rounded" src="<?= site_url('/profile/image') ?>" width="200" height="200" alt="profile image">

    </figure>

    <a class="button is-rounded is-danger is-outlined mt-4" href="<?= site_url("/profileimage/delete") ?>">Delete profile image</a>

<?php else: ?>

    <figure class="image is-128x128">

    <img src="<?= site_url('/images/blank_profile.png')?>" width="200" height="200" alt="profile image">

    </figure>

<?php endif; ?>

<dl>
    <dt class="has-text-weight-bold">Name</dt>
    <dd><?= esc($user->name) ?></dd>

    <dt class="has-text-weight-bold">Email</dt>
    <dd><?= esc($user->email) ?></dd>
</dl>

<a class="button is-rounded is-link is-outlined mt-4" href="<?= site_url("/profile/edit") ?>">Edit</a>

<a class="button is-rounded is-link is-outlined mt-4" href="<?= site_url("/profile/editpassword") ?>">Change password</a>

<a class="button is-rounded is-link is-outlined mt-4" href="<?= site_url("/profileimage/edit") ?>">Change profile image</a>

<?= $this->endSection() ?>