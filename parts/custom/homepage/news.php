<?php
$async_css = get_field('news_block_async_css');

$news_post_1 = get_field('news_post_1');
$news_post_2 = get_field('news_post_2');
$news_post_3 = get_field('news_post_3');
$news_post_4 = get_field('news_post_4');

function create_news_card($img, $title, $date, $excerpt, $href){
    $str = <<<STRING
    <section class="news-card">
        <section id="n-c-col-1">
            <img class="n-c-img" src="$img" alt="Card featured image">
        </section>
        <section id="n-c-col-2">
            <p class="n-c-date">$date</p>
            <h4 class="n-c-title">$title</h4>
            <p class="n-c-excerpt">$excerpt</p>
            <a class="arrow-btn" href="$href">Read More</a>
        </section>
    </section>
    STRING;
    return $str;
}

function get_news_card($post){
    $img = get_the_post_thumbnail_url( $post->ID, 'large');
    $title = get_the_title($post);
    $date = get_the_date("d M Y", $post);
    $excerpt = get_the_excerpt($post);
    $href = get_the_permalink($post);
    return create_news_card($img, $title, $date, $excerpt, $href);
}
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/styles/css/homepage/news.css"
media="<?php echo ($async_css) ? 'print' : 'all';?>" 
onload="<?php echo ($async_css) ? "this.media='all';this.onload='null'": "";?>">

<div id="news-background-wrapper">
    <section id="news">
        <h3 id="news-title">News</h3>
        <section id="news-carousel">
            <?php 
                if($news_post_1) echo get_news_card($news_post_1);
                if($news_post_2) echo get_news_card($news_post_2);
                if($news_post_3) echo get_news_card($news_post_3);
                if($news_post_4) echo get_news_card($news_post_4);
            ?>
        </section>
    </section>
</div>