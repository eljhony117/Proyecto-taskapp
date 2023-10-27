<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Edit profile image <?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1 class="title">Edit profile image</h1>

    <?= form_open_multipart("/profileimage/update") ?>
    
        <div class="file">
            <label class="file-label">
                <input class="file-input" type="file" name="image">
                <span class="file-cta">
                <span class="file-icon">
                    <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                    Choose a file…
                </span>
                </span>
            </label>
        </div>

        <button class=" button is-rounded is-success is-outlined mt-4">Upload</button>
        <a class="button is-rounded is-danger is-outlined mt-4" href="<?= site_url("/profile/show") ?>">Cancel</a>

    </fomr>

<?= $this->endSection() ?>