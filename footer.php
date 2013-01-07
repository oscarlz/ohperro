	<div class="outer">
    	<div id="footer">Copyright &copy; <a href="<?php bloginfo('home'); ?>"><strong><?php bloginfo('name'); ?></strong></a>  - <?php bloginfo('description'); ?> </div>
        <?php // This theme is released free for use under creative commons licence. http://creativecommons.org/licenses/by/3.0/
            // All links in the footer should remain intact. 
            // These links are all family friendly and will not hurt your site in any way. 
            // Warning! Your site may stop working if these links are edited or deleted  ?>
      <div align="center"> Y también visita nuestros sitios web amigos: <a href="http://testdeamorgratis.net/" target="_blank">test de amor</a> | <a href="http://www.imagenesbonitas.es/" target="_blank">Fotos lindas</a> | <a href="http://www.temasnokias.com" target="_blank">Temas Nokia</a> 
          <br> Todas las imágenes de la web son propiedad de sus respectivos autores. 
      </div>
    </div>
</div>
</div>
<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
</body>
</html>