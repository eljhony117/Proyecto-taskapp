<div class="container">
    <div>
        <label class="has-text-weight-bold" for="name">Name</label>
        <input class="input" type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
    </div>

    <div>
        <label class="has-text-weight-bold" for="email">Email</label>
        <input class="input" type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
    </div>

    <div>
        <label class="has-text-weight-bold" for="password">Password</label>
        <input class="input" type="password" name="password">
        <?php if ($user->id):?>
            <p>Leave blank to keep existing password</p>
        <?php endif; ?>
    </div>

    <div>
        <label class="has-text-weight-bold" for="password_confirmation">Confirm Password</label>
        <input class="input" type="password" name="password_confirmation">
    </div>

    <div>
        <label for="is_active"> 
            <?php if ($user->id == current_user()->id): ?>
                <input class="checkbox" type="checkbox" checked disabled> Active

            <?php else: ?>

                <input type="hidden" name="is_active" value="0">

                <input type="checkbox" id="is_active" name="is_active" value="1"
                        <?php if (old('is_active', $user->is_active)): ?>checked<?php endif; ?>> Active
            <?php endif; ?>
        </label>
    </div>

    <div>
        <label for="is_admin"> 
            <?php if ($user->id == current_user()->id): ?>
                <input class="checkbox" type="checkbox" checked disabled> Administrator

            <?php else: ?>

                <input type="hidden" name="is_admin" value="0">

                <input type="checkbox" id="is_admin" name="is_admin" value="1"
                        <?php if (old('is_admin', $user->is_admin)): ?>checked<?php endif; ?>> Administrator
            <?php endif; ?>
        </label>
    </div>
</div>
