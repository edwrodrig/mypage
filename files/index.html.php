<?php
/**
 * @data {
 *    "title" : {
 *        "es" : "Edwin Rodríguez León",
 *        "en" : "Edwin Rodríguez León"
 *    }
 * }
 * @var $this edwrodrig\site\theme\TemplatePage
 */

//LOCAL FUNCTIONS

use edwrodrig\site\data\Repository;
use edwrodrig\site\theme\PostLink;
use edwrodrig\site\theme\ProjectBox;

$section_posts = function($max_posts = 4) {?>
    <h1><?=$this->tr(['es' => 'Artículos', 'en' => 'Articles'])?></h1>
    <div class="flex-column grid-padding">
        <?php
        foreach ( Repository::get($this)->getPosts() as $post ) { if ( --$max_posts < 0 ) break;?>
            <div>
                <?php (new PostLink($post, $this))->html()?>
            </div>
            <?php
        }
        ?>
        <div class="align-right">
            <a class="button" href="<?=$this->url('/posts.html')?>"><?=$this->tr(['es' => 'Más artículos', 'en' => 'More articles'])?></a>
        </div>
    </div>
<?php
};

$section_projects = function($max_projects = 2) {?>
    <h1><?=$this->tr(['es'=> 'Proyectos', 'en' => 'Projects'])?></h1>
    <div class="flex-column grid-padding">
        <?php
        foreach ( Repository::get($this)->getProjects() as $project ) { if ( --$max_projects < 0 ) break;?>
            <div>
                <?php (new ProjectBox($project, $this))->html()?>
            </div>
            <?php
        }
        ?>
        <div class="align-right">
            <a class="button" href="<?=$this->url('/projects.html')?>"><?=$this->tr(['es' => 'Más proyectos', 'en' => 'More projects'])?></a>
        </div>
    </div>
    <?php
};


//CONTENT
?>
<div>
    <div class="section-container container-padding">
        <div class="ascii-art">
            <pre><?=file_get_contents(__DIR__ . '/../data/photo.txt')?></pre>
        </div>
        <?php $this->socialButtonsBar() ?>
        <?php $section_posts(4) ?>
        <hr>
        <?php $section_projects(2)?>
    </div>
</div>

