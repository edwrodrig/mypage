<?php
declare(strict_types=1);

use edwrodrig\mypage\site\BlockPage;
use labo86\staty_core\PagePhp;

/** @var PagePhp $page */
$BLOCK = new BlockPage($page);
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 ">
<?php foreach ( $BLOCK->getRepository()->getPosts() as $post ) : ?>
    <url><loc><?=$post->getRelativeUrl()?></loc></url>
<?php endforeach ?>

</urlset>
