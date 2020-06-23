@php($landing_section_primary_secundary = new WP_Query([
    'post_type' => 'book',
    "order" => "ASC",
    'posts_per_page' => 1,
    'offset' => 7
    ]))

    @if($landing_section_primary_secundary->have_posts())
        @while($landing_section_primary_secundary->have_posts())
            @php($landing_section_primary_secundary->the_post())  
    
    {{-- <pre class="content fa-10x">
        @dd($landing_section_primary_secundary)
    </pre> --}}
    <div class="main-content-section-secundary">
        <header class="content">
            <h1>{{the_title()}}</h1>
            <img src="{{the_post_thumbnail_url()}}" alt="{{the_title()}} ">
        </header>
      
        <section class="content">

            <article class="main-content-section-article-sec">
                <h3>{{get_field('first_course')}}</h3>
                <hr>
                <p>{{get_field('1-description')}}</p>

                <img class="img-icon" src="{{get_field('first_course_logo')}}" alt="{{get_field('first_course')}}">
                <span class="bar"></span>

            </article>
            
            <article class="main-content-section-article-sec">
                <h3>{{get_field('secund_course')}}</h3>
                <hr>
                <p>{{get_field('2-description')}}</p>

                <img class="img-icon" src="{{get_field('secund_course_logo')}}" alt="{{get_field('secund_course')}}">
                <span class="bar"></span>
            </article>

            <article class="main-content-section-article-sec">
                <h3>{{get_field('third_course')}}</h3>
                <hr>
                <p>{{get_field('3-description')}}</p>

                <img class="img-icon" src="{{get_field('third_course_logo')}}" alt="{{get_field('third_course')}}">
                <span class="bar"></span>
            </article>

        </section>

    </div>

  @endwhile
  @endif

  @php(wp_reset_postdata())