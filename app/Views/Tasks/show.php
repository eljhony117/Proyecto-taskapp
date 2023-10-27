<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Tasks <?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title">Tasks</h1>

<a class="button is-link is-rounded is-outlined" href="<?= site_url("/tasks") ?>">&laquo; back to index</a>

<dl>
    <dt class="has-text-weight-bold">ID</dt>
    <dd><?= $task->id ?></dd>

    <dt class="has-text-weight-bold">Description</dt>
    <dd><?= esc($task->descrpition) ?></dd>

    <dt class="has-text-weight-bold">Created at</dt>
    <dd><?= $task->created_at->humanize() ?></dd>

    <dt class="has-text-weight-bold">Updated at</dt>
    <dd><?= $task->updated_at->humanize() ?></dd>
</dl>

<a class="button is-rounded" href="<?= site_url("/tasks/edit/".$task->id) ?>">Editar</a>
<a class="button is-rounded is-danger is-outlined" href="<?= site_url("/tasks/delete/".$task->id) ?>">Borrar</a>

<?= $this->endSection() ?>