<?php
/**
 * Bootstrap 5 Nav Walker for Gazi Theme
 */
class Bootstrap_NavWalker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = str_repeat("\t", $depth);
        $classes = empty( $item->classes ) ? [] : (array) $item->classes;

        $li_classes = ['nav-item'];
        if (in_array('menu-item-has-children', $classes)) {
            $li_classes[] = 'dropdown';
        }
        if (in_array('current-menu-item', $classes) || in_array('current-menu-ancestor',$classes)) {
            $li_classes[] = 'active';
        }

        $class_names = implode(' ', $li_classes);
        $output .= "$indent<li class=\"$class_names\">";

        $atts = [];
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';

        $link_classes = ['nav-link'];
        if (in_array('menu-item-has-children', $classes)) {
            $atts['data-bs-toggle'] = 'dropdown';
            $link_classes[] = 'dropdown-toggle';
        }
        if (in_array('current-menu-item', $classes) || in_array('current-menu-ancestor',$classes)) {
            $link_classes[] = 'active';
        }

        $atts['class'] = implode( ' ', $link_classes );
        $atts['href']  = !empty($item->url) ? $item->url : '';

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = esc_attr($value);
                $attributes .= " $attr=\"$value\"";
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before;
        $item_output .= "<a$attributes>";
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
