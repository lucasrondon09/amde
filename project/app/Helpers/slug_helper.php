<?php

function createSlug($params){

    $slug = mb_url_title($params, '-', true);
    return $slug;

}
