@php($landing = new WP_Query([
    'post_type' => 'book',
    "order" => "ASC",
    'posts_per_page' => 1,
    ]))

<div class="icon-what">
    <i class="fab fa-whatsapp" ></i>
</div>

@if($landing->have_posts())
<div class="main-head">

    @while($landing->have_posts()) @php($landing->the_post())

    <article class="main-head-article">
        <div>
            <header>
                <h1>{{the_title()}}</h1>
            </header>
          
            {{the_excerpt()}}
            
            <a href="{{ get_permalink() }}" class="btn">
                <span class="span-primary">{{the_field('first_title_link')}}</span>
                <span class="span-secundary d-none">{{the_field('secund_title_link')}}</span>
            </a>

        </div>
    </article>

    <img src="{{the_post_thumbnail_url()}}" alt="Quero me inscrever">
    <span class="arrowdown"></span>

    @endwhile
</div>
@endif
@php(wp_reset_postdata())