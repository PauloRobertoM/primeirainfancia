<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Experiencias {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'experiencias_register_meta_boxes'));
   }

   public function init() {
      $this->experiencias_post_type();
   }

   public function experiencias_post_type() {

      $labels = array(
         'name'                => _x( 'Experiências', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Experiência', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Experiências', 'text_domain' ),
         'name_admin_bar'      => __( 'Experiências', 'text_domain' ),
         'parent_item_colon'   => __( 'Experiência pai:', 'text_domain' ),
         'all_items'           => __( 'Todos os experiências', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar novo experiência', 'text_domain' ),
         'add_new'             => __( 'Adicionar novo', 'text_domain' ),
         'new_item'            => __( 'Novo experiência', 'text_domain' ),
         'edit_item'           => __( 'Ediar experiência', 'text_domain' ),
         'update_item'         => __( 'Atualizar experiência', 'text_domain' ),
         'view_item'           => __( 'Ver experiência', 'text_domain' ),
         'search_items'        => __( 'Procurar experiência', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'experiencias', 'text_domain' ),
         'description'         => __( 'Cadastro dos experiencias', 'text_domain' ),
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
      register_post_type( 'experiencias', $args );
   }

   public function experiencias_register_meta_boxes( $meta_boxes ) {
      $prefix = 'experiencias_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}cargo",
         'title'      => 'Cargo',
         'post_types' => array( 'experiencias' ),
         'context'    => 'advanced',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'   => "{$prefix}cargo",
               'type' => 'text',
               'name' => null,
            ),
         ),
      );

      return $meta_boxes;
   }
}