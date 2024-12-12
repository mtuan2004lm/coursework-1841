<p><?=$totalpost?> post have been submitted to the web post question from student .</p>
<?php 
foreach($posts as $post):?>
        <blockquote>
        
        <?=htmlspecialchars($post['posttext'],ENT_QUOTES,'UTF-8')?>
        <br /><?=htmlspecialchars($post['moduleName'],ENT_QUOTES,'UTF-8')?>

        (by <a href="mailto:<?=htmlspecialchars($post['email'], ENT_QUOTES, 'UTF-8');?>">
        <?=htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8'); ?></a>)

        <a href="editpost.php?id=<?=$post['id']?>">Edit</a>

      

            <td width="300px"> <?htmlspecialchars($post['posttext'], ENT_QUOTES, 'UTF-8')?></td>
            <td width="300px"> <?php $display_date  = date("D d M Y", strtotime($post['postdate']))?>
            <?=htmlspecialchars($display_date, ENT_QUOTES, 'UTF-8')?></td>
            <img height="100px" src="upload/<?=htmlspecialchars($post['uploads'], ENT_QUOTES ,'UTF-8'); ?>"/>
            <td wight="150px">
        </blockquote>
        <?php endforeach;?>
