
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'navbar-nav ms-auto',
          'container' => false,
          'depth' => 2,
          'walker' => new WP_Bootstrap_Navwalker(),
          'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback'
        ]) !!}
      @endif
    </div>
  </div>
</nav>