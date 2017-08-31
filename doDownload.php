<?php

$filename=$_GET['filename'];
header('content-disposition:attachment;filename=/upload'.$filename);
header('content-length:'.filesize($filename));
readfile()