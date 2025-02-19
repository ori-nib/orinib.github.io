<?php get_header(); ?>
<div class="container">
    <div class="sidebar">
        <h1>ORINIB</h1>
        <p>The Gentle Art of Remembering the Forgotten</p>
        <nav>
            <a href="#">Stories</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </div>
    <div class="main-content">
        <h2>Stories</h2>
        <div class="story-list">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>