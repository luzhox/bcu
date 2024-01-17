<?php
 //Definir Zona de Widgets
 function theme_widgets(){

    //Primer Widget de Footer
    register_sidebar(array(
      'name'=>'Zona de Dirección de Sedes',
      'id'=>'location',
      'before_widget'=>'<div class="Sedes">',
      'after_widget'=>'</div>',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>'
    ));

    //Segundo Widget de Footer
    register_sidebar(array(
        'name'=>'Nuevo Widget',
        'id'=>'newwidget',
        'before_widget'=>'<div class="Sede">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
      ));
  }

  add_action('widgets_init','theme_widgets');

?>