            </div>
        </main>
        <footer class="blog-footer">
            
            <div class="container footer-content">
                <div class="row">
                    <div class="col-md-3">
                        <!-- FOOTER MENU -->
                        <?php 
                            if ( function_exists('clean_custom_menus' ) ){
                                clean_custom_menus([
                                    'menuName' => 'footer-menu-1',
                                    'navClass' => 'my-2 my-md-0 mr-md-3 footer-menu',
                                    'aClass' => 'p-2 text-dark',
                                    'showTitle' => true,
                                ]);
                            }
                        ?>
                    </div>
                    <div class="col-md-3">
                        <!-- FOOTER MENU -->
                        <?php 
                            if ( function_exists('clean_custom_menus' ) ){
                                clean_custom_menus([
                                    'menuName' => 'footer-menu-2',
                                    'navClass' => 'my-2 my-md-0 mr-md-3 footer-menu',
                                    'aClass' => 'p-2 text-dark',
                                    'showTitle' => true,
                                ]);
                            }
                        ?>
                    </div>
                    <div class="col-md-3">
                        <!-- FOOTER MENU -->
                        <?php 
                            if ( function_exists('clean_custom_menus' ) ){
                                clean_custom_menus([
                                    'menuName' => 'footer-menu-3',
                                    'navClass' => 'my-2 my-md-0 mr-md-3 footer-menu',
                                    'aClass' => 'p-2 text-dark',
                                    'showTitle' => true,
                                ]);
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- FOOTER -->
                        <?php dynamic_sidebar('footer_1'); ?>
                    </div>
                    <div class="col-md-6">
                        <!-- FOOTER -->
                        <?php dynamic_sidebar('footer_2'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copyright">
                        <!-- Copyright -->
                        <p>&copy; 2020 - <a href="" target="_blank">CoreDesignz</a> - Todos os Direitos Reservados</p>
                        <?php wp_footer(); ?>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>