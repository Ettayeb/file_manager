<?php

/**
 * Return sizes readable by humans
 */
function human_filesize($bytes, $decimals = 2)
{
  $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
  $factor = floor((strlen($bytes) - 1) / 3);

  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) .
      @$size[$factor];
}

/**
 * Is the mime type an image
 */
function supportedtype($mimeType)
{    
     $accept=false ;
     $content_types=array("image/","application/force-download","application/xls","application/xlsx","application/doc","application/docx","application/ppt","application/pptx","application/zip","application/x-rar-compressed");
     foreach ($content_types as $type)
	{	if (starts_with($mimeType, $type) == true) { $accept=true; }
	}

	return $accept;

}

function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}

