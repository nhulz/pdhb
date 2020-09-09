
<?php
$context = Timber::get_context();
$site = new TimberSite();
Timber::render( 'partial/searchform.twig', $context );
?>
