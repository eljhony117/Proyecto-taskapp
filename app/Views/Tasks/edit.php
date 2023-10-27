<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Edit Task <?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title">Edit task</h1>

<?php if (session()->has('errors')): ?>

    <ul>
        <?php foreach(session('errors') as $errors): ?>
            <li><?= $errors ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif ?>

<?= form_open("/tasks/update/" . $task->id)   ?>

    <?= $this->include('Tasks/form') ?>

    <button Class="button is-rounded is-success is-outlined mt-4">Save</button>
    <a class="button is-rounded is-danger is-outlined mt-4" href="<?= site_url("/tasks/show/".$task->id) ?>">Cancel</a>

</fomr>

<?= $this->endSection() ?>