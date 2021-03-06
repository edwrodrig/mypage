<?php
declare(strict_types=1);

use edwrodrig\mypage\site\BlockPagePost;
use labo86\staty_core\PagePhp;

/** @var PagePhp $page */
$page->prepareMetadata([
    'title' => "Comandos útiles para Rsync",
    'publication_date' => '2017-09-28',
    'type' => 'post'
]);

$BLOCK = new BlockPagePost($page);
$BLOCK->sectionBeginPostContent();
?>
<h2>Copiar de una carpeta a otra</h2>
<pre>
rsync -rLptgoDvz -e "ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null" --progress <b>source</b> <b>target</b>
</pre>
<p>Notar que el argumento de la opción <code>-e</code> evita que <code>rsync</code> se detenga para preguntar si el servidor de destino es uno conocido</p>

<h2>Copiar pero basandose en checksums en vez de fecha</h2>
<pre>
rsync -rLptgoDvz -c -e "ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null" --progress <b>source</b> <b>target</b>
</pre>
<p>La magia la da el argumento <code>-c</code></p>
<?php
$BLOCK->html();
