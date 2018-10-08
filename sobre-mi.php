<?php get_header( 'page' ) //template name: sobre mi?>


Nombre:<?php the_field( 'mi_nombre' ); ?>
<br>
Apellidos:<?php the_field( 'apellidos' ); ?>
<br>
correos:<?php the_field( 'correo' ); ?>
<br>
telfono:<?php the_field( 'telefono' ); ?>
<br>
fecha nacimienot:<?php the_field( 'fecha_nac' ); ?>
<br>
<?php $foto = get_field( 'foto' ); ?>
<br>
foto:<?php if ( $foto ) { ?>
	<img src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt']; ?>" />
<?php } ?>
<br>
descripcion<?php the_field( 'descripcion' ); ?>


<?php get_footer(); ?>

