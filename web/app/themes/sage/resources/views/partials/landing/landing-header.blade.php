<header class="header">

  <div class="logo-header">
    @if ( has_custom_logo() )
      {{the_custom_logo()}}
      @else
      {{ $siteName }}
      @endif
  </div>
    
    <div class="menu-section">

      <div class="menu-toggle">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
      </div>
    
    <nav class="nav-primary">
      @if (has_nav_menu('landing_navigation'))
        {!! wp_nav_menu(['theme_location' => 'landing_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      @endif
    </nav>

    </div>

</header>
