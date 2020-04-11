<?php get_header(); ?>
<main role="main" class="container">
    <div class="row">   
        <div class="col-md-8 blog-main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="blog-post">
                    <header>    
                        
                        <div><?php edit_post_link('(Editar)'); ?></div>
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                        
                        <div class="author">
                            <div class="avatar">
                                <?php
                                    $get_author_id = get_the_author_meta('ID');
                                    $get_author_gravatar = get_avatar_url($get_author_id, ['size' => 48]);
                                ?>
                                <img src="<?php echo $get_author_gravatar?>" />
                            </div>
                            <div class="info">
                                <div class="author_name"><?php the_author() ?></div>
                                <time class="article_date" pubdate datetime="<?php the_time('Y-m-d H:i') ?>"><?php the_time('j \d\e F, Y') ?></time> 
                                <?php //comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> 
                                
                            </div>
                        </div>

                    </header>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                 
                <?php comments_template(); ?>
                     
            <?php endwhile; else: ?>
                <article class="blog-post">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </article>            
            <?php endif; ?>      
        </div>
                
        <?php get_sidebar(); ?>

    </div>
</main>         

<?php get_footer(); ?>