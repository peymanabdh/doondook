<footer>
    <?php 
        $terms = get_terms( array( 
            'taxonomy' => 'pa_genre',
            'fields' => 'all',
            'orderby' => 'name',
            'order' => 'ASC',
            'include' => 'all',
            'exclude' => 'all',
            'exclude_tree' => 'all',
            'hide_empty' => false,
        ) );
        echo '<ul>';
            foreach ( $terms as $term ) {
                $term_link = get_term_link( $term );
                echo "<a href=".$term_link.">" . $term->name . "</a>";
            }
        echo '</ul>';
        // var_dump($terms);
        //////////////////////////////////////////////
        echo "</br>";   
    ?>   
        


</footer>
        <?php wp_footer(); ?>
        <script src="<?php echo theme_uri('assets/javascript/script.js') ?>"></script>
    </body>
</html>