<form id="input_search" class="searchForm" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <a class="searchForm__button" id="input_searchSubmit"><i class="ms-Icon ms-Icon--Search" aria-hidden="true"></i></a>
    <input placeholder="Hledat" id="input_searchInput" class="searchForm__input" type="search" value="<?php echo get_search_query() ?>" name="s"/>
</form> 