<input type="hidden" name="<?= csrf_token() ?>" value="an invalid token" />

<div>
        <label for="descrpition">Descrpition</label>
        <input type="text" name="descrpition" id="descrpition"
               value="<?= old('descrpition', esc($task->descrpition))?>">
    </div>