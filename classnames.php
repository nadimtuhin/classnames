<?php

function classNames() {
  $args = func_get_args();

  $classes = array_map( function ( $arg ) {
    if ( is_array( $arg ) ) {
      return implode(" ", array_filter(array_map( function ( $expression, $class ) {
        return $expression ? $class : false;
      }, $arg, array_keys( $arg ) )));
    }

    return $arg;
  }, $args );

  return implode( " ", array_filter( $classes ) );
}