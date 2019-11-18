<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Atividades {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'atividades_register_meta_boxes'));
   }

   public function init() {
      $this->atividades_post_type();
   }

   public function atividades_post_type() {

      $labels = array(
         'name'                => _x( 'Atividades', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Atividade', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Atividades', 'text_domain' ),
         'name_admin_bar'      => __( 'Atividades', 'text_domain' ),
         'parent_item_colon'   => __( 'Atividade pai:', 'text_domain' ),
         'all_items'           => __( 'Todos os atividades', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar novo atividade', 'text_domain' ),
         'add_new'             => __( 'Adicionar novo', 'text_domain' ),
         'new_item'            => __( 'Novo atividade', 'text_domain' ),
         'edit_item'           => __( 'Ediar atividade', 'text_domain' ),
         'update_item'         => __( 'Atualizar atividade', 'text_domain' ),
         'view_item'           => __( 'Ver atividade', 'text_domain' ),
         'search_items'        => __( 'Procurar atividade', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'atividades', 'text_domain' ),
         'description'         => __( 'Cadastro dos atividades', 'text_domain' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', ),
         'taxonomies'          => array( ),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 5,
         'show_in_admin_bar'   => true,
         'show_in_nav_menus'   => true,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
      );

      register_post_type( 'atividades', $args );

   }

   public function atividades_register_meta_boxes( $meta_boxes ) {
      $prefix = 'atividades_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}foto",
         'title'      => 'Foto da atividade',
         'post_types' => array( 'atividades' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'               => "{$prefix}foto",
               'name'             => null,
               'type'             => 'image_advanced',
               'force_delete'     => false,
               'desc'             => 'Adicionar foto',
               'max_file_uploads' => 1,
            ),
         )
      );
      
      return $meta_boxes;
   }

}