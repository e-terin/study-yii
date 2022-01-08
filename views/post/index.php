<h2>Posts</h2>
<?= $post_id ?? '' ?>

<button class="btn btn-success" id="btn">Go</button>

<?php

$js = <<<JS
$('#btn').on('click', function (){
    $.ajax({
        url: 'index.php?r=post/index',
        data: {test: 123},
        type: post,
        success: function (res){
            console.log(res);
        },
        error: function (){
            alert('Error')
        }
    })
})
JS;

$this->registerJs($js)
?>
