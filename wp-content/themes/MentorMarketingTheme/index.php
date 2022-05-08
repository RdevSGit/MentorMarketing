<?php get_header() ?>
<div class="content">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <?php
            $file = get_field('fichier');
            $icon = $file['icon'];
            if ($file) : ?>
                <div class="card">
                    <img src="<?php echo esc_attr($icon); ?>" />
                    <p><?php echo $file['filename']; ?></p>
                    <a href="<?php echo $file['url']; ?>" class="btn btn-primary">télécharger</a>
                </div>
            <?php endif; ?>
    <?php
        }
    }
    ?>
</div>
<?php get_footer() ?>