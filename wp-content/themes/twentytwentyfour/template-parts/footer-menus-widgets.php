<?php
// Lấy 5 bài viết mới nhất
$recent_posts = wp_get_recent_posts([
    'numberposts' => 5,
    'post_status' => 'publish'
]);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h5>Bài viết</h5>
            <ul>
                <?php foreach ($recent_posts as $post): ?>
                    <li><a href="<?php echo esc_url(get_permalink($post['ID'])); ?>"><?php echo esc_html($post['post_title']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col">
            <h5>Danh mục</h5>
            <ul>
                <?php
                // Lấy 5 danh mục mới nhất
                $terms = get_terms([
                    'taxonomy' => 'category',
                    'orderby' => 'id',
                    'order' => 'DESC',
                    'number' => 5
                ]);

                if (!empty($terms) && !is_wp_error($terms)):
                    foreach ($terms as $term):
                ?>
                    <li><a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a></li>
                <?php
                    endforeach;
                else:
                ?>
                    <li>No terms found.</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
