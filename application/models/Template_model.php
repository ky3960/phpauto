<?php

class Template_model extends CI_model {

  function generate_json(){

    $sql = "select movie_id,title from movies";
    $query = $this->movie->query($sql);
    foreach ( $query->result() as $row ) {

      $movie_id = $row->movie_id;
      $title = $row->title;

      echo "$movie_id : $title".PHP_EOL;

    } // foreach

  } // generate_json

} // Template_model  

