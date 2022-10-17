<?php
# Requested File Name
$file_name = $_GET['my_file'];

# File Path on Server
$file_path = $_SERVER['DOCUMENT_ROOT'].'/myapp/ch08/photos'.$file_name;

# Check whether file exists or not.
if (!is_file($file_path) || !file_exists($file_path))
{
    echo "파일이 존재하지 않습니다.";
    exit();
}

# Browser Check
if (preg_match("/msie/i", $_SERVER['HTTP_USER_AGENT'])
    && preg_match("/5\.5/", $_SERVER['HTTP_USER_AGENT'])){
    header("content-type: doesnt/matter");
    header("content-length: ".filesize("$file_path"));
    header("content disposition: attachment; filename=\"$file_name\""); // filename to download
    header("content-transfer-encoding: binary");
} else {
    header("content-type: file/unknown");
    header("content-length: ".filesize("$file_path"));
    header("content disposition: attachment; filename=\"$file_name\""); // filename to download
    header("content-description: php generated data");
}

header("pragma: no-cache");
header("expires: 0");

# Read-only, binary type
$fp = fopen($file_path, "rb");

while (!feof($fp))
// fe_of: Tests for end-of-file on a file pointer
{
    echo fread($fp, 100*1024);
    // fread(): Binary-safe file read
}
fclose($fp);
// f_close: Closes an open file pointer