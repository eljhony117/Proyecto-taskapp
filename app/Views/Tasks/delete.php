<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete Task<?= $this->endSection()?>

<?= $this->section('content') ?>

<h1 class="title">Delete task</h1>

<p>Are you sure?</p>

<?= form_open("/tasks/delete/" . $task->id) ?>

    <button Class="button is-rounded is-success is-outlined mt-4">Yes</button>
    <a class="button is-rounded is-danger is-outlined mt-4" href="<?= site_url('/tasks/show/' . $task->id) ?>">Cancel</a>

</form>

<?= $this->endSection() ?>