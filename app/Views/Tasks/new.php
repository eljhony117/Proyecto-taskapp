<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> New Tasks <?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title">New task</h1>

<?php if (session()->has('errors')): ?>

    <ul>
        <?php foreach(session('errors') as $errors): ?>
            <li><?= $errors ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif ?>

<?= form_open("/tasks/create")   ?>

    <div>
        <label for="descrpition">Descrpition</label>
        <input type="text" name="descrpition" id="descrpition" value="">
    </div>

    <button class="button is-rounded is-success is-outlined mt-4">Save</button>
    <a class="button is-rounded is-danger is-outlined mt-4" href="<?= site_url("/tasks") ?>">Cancel</a>

</fomr>

<?= $this->endSection() ?>