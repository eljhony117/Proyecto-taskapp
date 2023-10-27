<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('Signup.title')?><?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title"><?= lang('Signup.title')?></h1>

<?php if (session()->has('errors')): ?>

    <ul>
        <?php foreach(session('errors') as $errors): ?>
            <li><?= $errors ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif ?>

<div class="container">

<?= form_open("/$locale/signup/create")   ?>


    <div class="field">
        <label  class="has-text-weight-bold" for="name"><?= lang('Signup.name')?></label>
        <input class="input" type="text" name="name" id="name" value="<?= old('name') ?>">
    </div>

    <div class="field">
        <label  class="has-text-weight-bold" for="email"><?= lang('Signup.email')?></label>
        <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>

    <div class="field">
        <label  class="has-text-weight-bold" for="password"><?= lang('Signup.password')?></label>
        <input class="input" type="password" name="password">
    </div>

    <div class="field">
        <label  class="has-text-weight-bold" for="password_confirmation"><?= lang('Signup.confpassword')?></label>
        <input class="input" type="password" name="password_confirmation">
    </div>

    <button class="button is-rounded is-outlined is-success mt-4"><?= lang('Signup.create')?></button>
    <a class="button is-rounded is-outlined is-danger mt-4" href="<?= site_url("/") ?>"><?= lang('Signup.cancel')?></a>

</fomr>

<?= $this->endSection() ?>