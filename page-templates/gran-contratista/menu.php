<div class="row my-5">
            <div class="col-md-4">
                <div class="gran-contratista-items  mb-3">
                <a href="<?php echo esc_url( get_page_link( 133 ) ); ?>" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/gran-contratista/cereza-pastel.jpg" alt="La cereza del pastel" class="img-fluid" /></a>
                <a href="<?php echo esc_url( get_page_link( 133 ) ); ?>" title="">  <p><b>1. La cereza del pastel</b></p></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gran-contratista-items  mb-3">
                <a href="<?php echo esc_url( get_page_link( 136 ) ); ?>" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/gran-contratista/vacio-legal.jpg" alt="La cereza del pastel" class="img-fluid" /></a>
                <a href="<?php echo esc_url( get_page_link( 136 ) ); ?>" title=""> <p><b>2. Hondo vacío legal: no hay sanciones</b></p></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gran-contratista-items">
                <a href="<?php echo esc_url( get_page_link( 139 ) ); ?>" title=""> <img src="<?php echo get_template_directory_uri(); ?>/img/gran-contratista/humilde-festin.jpg" alt="De origen humilde al festín de contrataciones" class="img-fluid" /></a>
                <a href="<?php echo esc_url( get_page_link( 139 ) ); ?>" title=""> <p><b>3. De origen humilde al festín de contrataciones</b></p></a>
                </div>
            </div>
        </div>
        <div class="row my-5">
        <?php
            if ( is_page( 130 ) ) {
                ?>
                <div class="col-md-4 offset-md-2 mb-3">
                <?php
} else {
    ?>
            <div class="col-md-4 mb-3">
                <?php
        }
?>
                <div class="gran-contratista-items">
                <a href="<?php echo esc_url( get_page_link( 142 ) ); ?>" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/gran-contratista/concretos-sa.jpg" alt="El ingeniero Chávez Sequeira crea otra empresa" class="img-fluid" /></a>
                <a href="<?php echo esc_url( get_page_link( 142 ) ); ?>" title=""><p><b>4. El ingeniero Chávez Sequeira crea otra empresa</b></p></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gran-contratista-items  mb-3">
                <a href="<?php echo esc_url( get_page_link( 145 ) ); ?>" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/gran-contratista/estadio-independencia.jpg" alt="La conexión Managua - Estadio Independencia Estelí" class="img-fluid" /></a>
                <a href="<?php echo esc_url( get_page_link( 145 ) ); ?>" title=""><p><b>5. La conexión Managua - Estadio Independencia Estelí</b></p></a>
                </div>
            </div>
            <?php
            if ( is_page( 130 ) ) {
    // This is a subpage
} else {
    ?>
    <div class="col-md-4">
                <div class="gran-contratista-items  mb-3">
                <a href="<?php echo esc_url( get_page_link( 130 ) ); ?>" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/gran-contratista/portada-inicio.jpg" alt="La conexión Managua - Estadio Independencia Estelí" class="img-fluid" /></a>
                <a href="<?php echo esc_url( get_page_link( 130 ) ); ?>" title=""><p><b>El gran contratista de la Alcaldía de Managua</b></p></a>
                </div>
            </div>
            <?php
}
?>
           
        </div>