<header class="header">

  @if ( has_custom_logo() )
    {{the_custom_logo()}}
    @else
    {{ $siteName }}
	  @endif
    
    <nav class="nav-primary">
      @if (has_nav_menu('landing_navigation'))
        {!! wp_nav_menu(['theme_location' => 'landing_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      @endif
    </nav>

</header>
