<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> User <?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title">User</h1>

<a class="button is-link is-rounded is-outlined" href="<?= site_url("/admin/users") ?>">&laquo; back to index</a>

<dl>
    <dt class="has-text-weight-bold">Name</dt>
    <dd><?= esc($user->name) ?></dd>

    <dt class="has-text-weight-bold">Email</dt>
    <dd><?= esc($user->email) ?></dd>

    <dt class="has-text-weight-bold">Active</dt>
    <dd><?= $user->is_active ? 'yes' : 'no' ?></dd>

    <dt class="has-text-weight-bold">Administrator</dt>
    <dd><?= $user->is_admin ? 'yes' : 'no' ?></dd>

    <dt class="has-text-weight-bold">Created at</dt>
    <dd><?= $user->updated_at->humanize() ?></dd>

    <dt class="has-text-weight-bold">Updated at</dt>
    <dd><?= $user->updated_at->humanize() ?></dd>
</dl>

<a class="button is-rounded is-warning is-outlined mt-4" href="<?= site_url("/admin/users/edit/".$user->id) ?>">Editar</a>

<?php if($user->id != current_user()->id): ?>

<a class="button is-rounded is-danger is-outlined mt-4" href="<?= site_url("/admin/users/delete/".$user->id) ?>">Borrar</a>

<?php endif; ?>

<?= $this->endSection() ?>