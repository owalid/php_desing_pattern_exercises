<?php

include_once('Filter.php');
include_once('Picture.php');

$baw_filter = new BAndWFilter();
$sepia_filter = new SepiaFilter();

$landscape = new Landscape($baw_filter);
$portrait = new Portrait($sepia_filter);

echo $landscape->getPicture(); // => Landscape picture with Black and white filter.
echo $portrait->getPicture(); // => Portrait picture with Sepia filter.
