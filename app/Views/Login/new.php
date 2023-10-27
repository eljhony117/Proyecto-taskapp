<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('Login.title')?><?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title"><?= lang('Login.title')?></h1>

<?= form_open("/login/create") ?>


<div class="container">

    <div class="field">
        <label class="has-text-weight-bold" for="email"><?= lang('Login.email')?></label>
        
        <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
        
    
        
    </div>

    <div class="field">
        <label class="has-text-weight-bold" for="password"><?= lang('Login.password')?></label>
        <input class="input" type="password" name="password">
    </div>

    <div class="field">
        <label class="checkbox" for="remember_me">
            <input type="checkbox" type="checkbox" id="remember_me" name="remember_me"
                <?php if (old('remember_me')): ?>checked<?php endif; ?>><?= lang('Login.remember_me')?>
        </label>
        
    </div>

    <button class="button is-rounded is-success is-outlined mt-4"><?= lang('Login.log_in')?></button>

    <a class="button is-rounded is-warning is-outlined mt-4" href="<?= site_url("/password/forgot")?>"><?= lang('Login.forgot_password')?></a>

</form>

<?= $this->endSection() ?>