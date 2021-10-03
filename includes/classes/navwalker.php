<?php
class Header_walker extends Walker_Nav_Menu {
    //start of the sub menu wrap
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $secondMenuClass = 'sub-menu__list';
        $wrapperScrollStart = '';
        if ($depth == 1) {
            $secondMenuClass = 'sub-menu__list sub-menu__list--scrollbar';
            $wrapperScrollStart ='<div class="sub-menu__inner">';
            $wrapperScrollEnd ='</div>';
        }
        $output .= '<div class="sub-menu"><div class="sub-menu__wrapper">'.$wrapperScrollStart.'<ul class="'.$secondMenuClass.'">';
    }

    //end of the sub menu wrap
    function end_lvl(&$output, $depth = 0, $args = array()) {
        $wrapperScrollEnd = '';

        if ($depth == 1) {
            $wrapperScrollEnd ='</div>';
        }

        $wrapperScrollEnd ='</div>';
        $output .= '</ul>'.$wrapperScrollEnd.'</div</div>';
    }

}
