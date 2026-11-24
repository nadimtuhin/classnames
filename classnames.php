<?php

function classNames() {
  $args = func_get_args();

  $classes = array_map( function ( $arg ) {
    if ( is_array( $arg ) ) {
      return implode(" ", array_filter(array_map( function ( $expression, $class ) {
        // a list item (numeric key) is a class or a nested array, unless it is a
        // condition like [123 => true]
        if ( is_int( $class ) && !is_bool( $expression ) && !is_null( $expression ) ) {
          return classNames( $expression );
        }

        return $expression ? $class : false;
      }, $arg, array_keys( $arg ) )));
    }

    return is_bool( $arg ) ? false : $arg;
  }, $args );

  return implode( " ", array_filter( $classes ) );
}
