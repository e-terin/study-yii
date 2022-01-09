<h2>Posts</h2>

<?php

foreach ($posts as $post){
    echo "{$post['id']} - {$post['name']} - {$post['body']} <br>";
}

?>
