
        </div>
        <div class="copyright-bar bg-black">
            <div class="container">
                <?php if( get_theme_mod( 'blocks_copyright_1_text_left' ) ) : ?>
                    <p class="pull-left small"><?php echo get_theme_mod( 'blocks_copyright_1_text_left', __( '© ascon', 'ascontheme' ) ); ?></p>
                <?php endif; ?>
                <?php if( get_theme_mod( 'blocks_copyright_1_text_right' ) ) : ?>
                    <p class="pull-right small"><?php echo get_theme_mod( 'blocks_copyright_1_text_right', '<a href="https://github.com/ahmedengu/ascon-theme-wp">ascon-theme</a>' ); ?></p>
                <?php endif; ?>
            </div>
        </div>                  
        <?php wp_footer(); ?>
    </body>     
</html>
