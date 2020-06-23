@php($landing_fist = new WP_Query([
    'post_type' => 'book',
    "order" => "ASC",
    'posts_per_page' => 1,
    'offset' => 1 
    ]))

@if($landing_fist->have_posts())
<div class="main-content-first">
    <div class="main-content-first-div">

        @while($landing_fist->have_posts()) @php($landing_fist->the_post())

        <div class="main-content-first-article">
            <span class="span-vertical-bar"></span>
            <header>
                <h2>{{ the_title() }}</h2>
                <p>{{ the_content() }}</p>
            </header>
        </div>
        <div class="main-content-first-img">
            <span class="span-cicle">
                <span class="span-arrowright"></span>
            </span>
            <img src="{{the_post_thumbnail_url()}}" alt="Proin eu Massa odio?">
        </div>

        @endwhile
        @php(wp_reset_postdata())

    </div>
</div>

@endif