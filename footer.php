
</div>

<nav class="nav-wrap">
    <div class="nav-container">
        <div class="nav-scroll">    
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'navigation test',
                    'walker' => new UrbanPlan_Walker_Nav_Primary()
                ) );	
            ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>