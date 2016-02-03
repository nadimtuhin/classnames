<?php

function classnames() {
  $args = func_get_args();
  $expressions = end( $args );

  $classes = array_map( function ( $expression, $class ) {
    return $expression ? $class : false;
  }, $expressions, array_keys( $expressions ) );

  if ( count( $args ) > 1 ) {
    $classes = array_merge( $classes, array_slice( $args, 0, - 1 ) );
  }

  return implode( " ", array_filter( $classes ) );
}