@php($landing_section_primary_head = new WP_Query([
    'post_type' => 'book',
    "order" => "ASC",
    'posts_per_page' => 1,
    'offset' => 3
    ]))

@if($landing_section_primary_head->have_posts())

<section class="main-content-section-primary">

    @while($landing_section_primary_head->have_posts()) @php($landing_section_primary_head->the_post())
        
    <header class="content">
        <h1>{{the_title()}}</h1>
        <img src="{{the_post_thumbnail_url()}}"  alt="{{the_title()}}">
    </header>

    @endwhile

    @php(wp_reset_postdata())

    @php($landing_section_primary_arcticle = new WP_Query([
    'post_type' => 'book',
    "order" => "ASC",
    'posts_per_page' => 3,
    'offset' => 4
    ]))

    @if($landing_section_primary_arcticle->have_posts())
        @while($landing_section_primary_arcticle->have_posts())
            @php($landing_section_primary_arcticle->the_post())    

    <div class="section">
        <div class="content">

            <div class="main-content-section-article">
                <h3>Suspendisse feugiat orci sed velit pulvinar. <span>Aliquam vitae lorem?<span></h3>
                <img src="{{the_post_thumbnail_url()}}" alt="Ut eu dolor vitae elit bibendum fringilla elit...">

                    <a href="{{ get_permalink() }}" class="btn">
                        <span class="span-primary">{{the_field('first_title_link')}}</span>
                        <span class="span-secundary d-none">{{the_field('secund_title_link')}}</span>
                    </a>
            </div>

            <div class="main-content-section-article">
                <div class="span-colection">
                    <div class="span-itens">
                        <span class="span-iten" style="background-image: url({{get_field('primary_mini-logo')}})"></span>
                        <p>{{get_field('primary_item_list')}}</p>
                    </div>
                    <div class="span-itens">
                        <span class="span-iten" style="background-image: url({{get_field('secund_mini-logo')}})"></span>
                        <p>{{get_field('secund_item_list')}}</p>
                    </div>
                    <div class="span-itens">
                        <span class="span-iten" style="background-image: url({{get_field('third_mini-logo')}})"></span>
                        <p>{{get_field('third_item_list')}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @endwhile
    @endif

    @php(wp_reset_postdata())
   
</section>

@endif