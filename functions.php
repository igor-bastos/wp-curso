<?php 

function carrega_scripts(){

/*nome na funcao (identificador do q sera carregado(template),caminho do arquivo,dependecia (algo que usariamos para ser carregado no site), versao, role para carregar e deixar mais rapido);*/
	/*carregar os styles.css*/
	wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(),'1.0','all');
	/*carregar os js*/
	wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js',array(),null,true);
	/*endereco do bootstrat.css*/
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(),'1.0','all');
		/*endereco do bootstrat.js*/
	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',array('jquery'),'4.0',true);
}

add_action('wp_enqueue_scripts','carrega_scripts');