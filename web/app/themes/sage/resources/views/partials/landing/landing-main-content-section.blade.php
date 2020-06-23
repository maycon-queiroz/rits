@php($landing_section = new WP_Query([
    'post_type' => 'book',
    "order" => "ASC",
    'posts_per_page' => 1,
    'offset' => 2
    ]))

@if($landing_section->have_posts())
 
 <div class="main-content-section">
     <div class="div-svg">

        @while($landing_section->have_posts()) @php($landing_section->the_post())

         <div class="main-content-section-article content">
             <header class="main-content-section-header">
                <h1>{{the_title()}}</h1>
             </header>
             <div class="div-grid">
                 <div class="main-content-section-video">
                     <img src="{{the_post_thumbnail_url()}}" alt="{{the_title()}}">
                     
                         <a href="{{ get_permalink() }}" class="btn">
                            <span class="span-primary">{{the_field('first_title_link')}}</span>
                            <span class="span-secundary d-none">{{the_field('secund_title_link')}}</span>
                        </a>

                 </div>
                 <div class="main-content-section-content">
                     {{the_content()}}
                 </div>
             </div>
         </div>

         @endwhile

     </div>
 </div>

 @endif
@php(wp_reset_postdata())