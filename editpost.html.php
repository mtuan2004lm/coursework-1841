<form action="" method="post">
    <input type="hidden" name="postid" value="<?=$post['id'];?>">
    <label for='posttext'>Edit your question here;</label>
    <textarea name="posttext" row="3" cols="40">
    <?=$post['posttext']?>
    </textarea>
    <select name="module">
        <option value="">select a module</option>
        <?php foreach($module as $module):?>
            <option value="<?=htmlspecialchars($module['id'],ENT_QUOTES, 'UTF-8'); ?>">
        <?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select>
    <input type="submit" name="submit" value="Save">
</form>
