@php($landing_main_footer = new WP_Query([
    'post_type' => 'book',
    "order" => "ASC",
    'posts_per_page' => 3,
    'offset' => 8
    ]))

    @if($landing_main_footer->have_posts())             
       
        <div class="footer">

            <header class="content" id="course">
                <h1>Praesent volutpat consequat odio</h1>
            </header>

            <section class="footer-section content" >
                @php($i=0)
                <div class="footer-selection">
                 @while($landing_main_footer->have_posts())
                    @php($landing_main_footer->the_post()) 
                     @php($i++)  
                    <a data-id="{{$i}}" href="#" class="button"> <span>{{the_title()}} 
                        <i class="fas fa-arrow-right icon-show"></i>
                        <i class="fas fa-arrow-down icon-none"></i>
                    </span></a>
                 @endwhile
            
                </div>

                <div class="footer-ul">
                   @php($i=0)
                    <ul>
                    @while($landing_main_footer->have_posts())
                    @php($landing_main_footer->the_post())
                       @php($i++)  
                        <span data-id="{{$i}}" class="{{($i>1 ? 'd-none': '')}}">{{the_content()}}</span>
                    @endwhile
                    </ul>

                </div>

            </section>
        </div>

    @endif

  @php(wp_reset_postdata())