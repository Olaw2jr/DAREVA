
<form class="search-widget" role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
  <input type="text" placeholder="To search hit enter..."<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
</form>