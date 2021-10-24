<?php
$async_css = get_field('comments_block_async_css');

$comment_1 = get_field('comment_1');
$comment_2 = get_field('comment_2');
$comment_3 = get_field('comment_3');

function create_comment($image, $image_alt, $image_lazy_load, $title, $paragraph, $name, $job_title, $visible){
    $lazy_load = ($image_lazy_load) ? "loading='lazy'" : "";
    $is_visible = ($visible) ? "" : "hidden";
    $str = <<<STRING
        <section class="comment $is_visible">
            <section class="comment-col-1">
                <img src="$image" alt="$image_alt" $lazy_load>
            </section>
            <section class="comment-col-2">
                <h3 class="comment-title">$title</h3>
                $paragraph
                <p class="comment-name">$name</p>
                <p class="comment-job-title">$job_title</p>
            </section>
        </section>
    STRING;
    return $str;
}

function generate_comment($comment, $visible){
    $image = $comment["image"];
    $image_alt = $comment["image_alt"];
    $image_lazy_load = $comment["image_lazy_load"];
    $title = $comment["title"];
    $paragraph = $comment["paragraph"];
    $name = $comment["name"];
    $job_title = $comment["job_title"];
    return create_comment($image, $image_alt, $image_lazy_load, $title, $paragraph, $name, $job_title, $visible);
}
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/styles/css/homepage/comments.css"
media="<?php echo ($async_css) ? 'print' : 'all';?>" 
onload="<?php echo ($async_css) ? "this.media='all';this.onload='null'": "";?>">

<section id="comments">
    <?php 
        if($comment_1) echo generate_comment($comment_1, true);
        if($comment_2) echo generate_comment($comment_2, false);
        if($comment_3) echo generate_comment($comment_3, false);
    ?>
    <section id="comments-buttons">
        <div class="btn-wrapper prev">
            <button id="comments-btn-prev">PREVIOUS</button>
        </div>
        <div class="btn-wrapper next">
            <button id="comments-btn-next">NEXT</button>
        </div>
    </section>
</section>