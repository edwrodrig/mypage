<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
foreach ( \Data::forPost() as $p ) {
  printf('<url><loc>%s</loc></url>', $p->link());
}
?>
 </urlset>