<form action="" method="post" enctype="multipart/form-data">
    <label for='posttext'>Type your question here;</label>
    <textarea name="posttext" rows="3" cols="40"></textarea>
    <input type="file" name="fileToUpload">
    <select name="user">
        <option value="">select an user</option>
        <?php foreach ($user as $user):?>
            <option value="<?=htmlspecialchars($user['id'],ENT_QUOTES, 'UTF-8'); ?>">
        <?=htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8'); ?>
    </option>
    <?php endforeach;?>
</select>

    <select name="module">
        <option value="">select a module</option>
        <?php foreach($module as $module):?>
            <option value="<?=htmlspecialchars($module['id'],ENT_QUOTES, 'UTF-8'); ?>">
        <?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select>

    <input type="submit" name="submit" value="Add">
</form>
