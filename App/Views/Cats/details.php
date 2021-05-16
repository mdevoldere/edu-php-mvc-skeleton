<h2>Cat Details</h2>
<p>
    <?php 
    if(!empty($cat)) {
        echo sprintf('%d %s %s <br>', $cat['id'], $cat['name'], $cat['description']);
    }
    else {
        echo 'Cat not found';
    }
    ?>
</p>