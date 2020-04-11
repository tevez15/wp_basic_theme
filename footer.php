    <div id="footer">
        
        <!-- FOOTER -->
        <?php dynamic_sidebar('footer'); ?>

        <!-- FOOTER MENU -->
        <?php 
            wp_nav_menu([
                'theme_location' => 'footer-menu'
            ]); 
        ?>

        <p>&copy; 2020 - CoreDesignz - Todos os Direitos Reservados</p>
        
        <?php wp_footer(); ?>

    </div>
     
</div>
     
</body>
</html>