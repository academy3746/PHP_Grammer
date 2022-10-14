<?php
# 업로드할 파일의 디렉토리 (폴더명)을 지정
$upload_dir = "./photos";

# 업로드할 파일의 확장자를 지정
$allocated_ext = array('jpg','jpeg','bmp','gif');

# If there is no Directory name like 'photos'...?
if (!is_dir($upload_dir))
// is_dir(): Tells whether the filename is a directory
{
    if (!mkdir($upload_dir,0777))
    // mkdir(): Attempts to create the directory specified by pathname.
    // $permissions: The mode is 0777 by default, which means the widest possible access.
    {
        die("디렉토리 파일생성에 실패하였습니다!");
        // die(): Terminates execution of the script.
    }
}

# If there is no uploaded file...?
if (!isset($_FILES['my_file']))
// isset(): Determine if a variable is set and is not NULL.
// $_FILES: $_FILES array $HTTP_POST_FILES array Variables provided to the script via HTTP post file uploads.
{
    die("업로드 된 파일이 존재하지 않습니다!");
}

# 반환된 오류코드를 변수명 $error 에 할당
$error = $_FILES['my_file']['error'];

# File Name
$name = $_FILES['my_file']['name'];

# Set Match expression to check error clusters.
$result = match ($error)
// match(): Similar with Switch~Case expression (PHP8.0 ver)
// 업로드 성공여부와 상관없이 에러코드 출력하도록 설정!
{
    UPLOAD_ERR_OK=>"파일 업로드가 정상적으로 이루어졌습니다! [$error]",
    UPLOAD_ERR_INI_SIZE=>"(php.ini)에서 설정된 파일의 최대 크기를 초과하였습니다. [$error]",
    UPLOAD_ERR_FORM_SIZE=>"HTML Form에 설정된 파일의 최대 크기를 초과하였습니다. [$error]",
    UPLOAD_ERR_PARTIAL=>"파일의 일부만 업로드 되었습니다. [$error]",
    UPLOAD_ERR_NO_FILE=>"업로드할 파일이 존재하지 않습니다. [$error]",
    UPLOAD_ERR_NO_TMP_DIR=>"웹 서버에 임시폴더가 존재하지 않습니다. [$error]",
    UPLOAD_ERR_CANT_WRITE=>"웹 서버에 파일을 쓸 수 없습니다. [$error]",
    UPLOAD_ERR_EXTENSION=>"PHP 확장기능에 의해 업로드가 중단되었습니다. [$error]"
};

# Print out Error state if File-Upload is failed.
if ($error != UPLOAD_ERR_OK)
// 파일 업로드가 정상적으로 이루어지지 않았다면...?
{
    echo $result;
    exit();
    // exit(): Terminates execution of the script.
}

# 저장될 디렉토리 / 파일명
$upload_file = $upload_dir."/".$name;

# 첨부파일의 저장경로를 가져올 것!
$file_info = pathinfo($upload_file);

# 파일의 확장자를 소문자로 변환할 것!
$ext = strtolower($file_info['extension']);

# 중복된 파일 이름이 존재한다면 +1씩 수준을 증가하여 파일을 생성할 것!
$i = 1;

while (is_file($upload_file))
// is_file(): Tells whether the filename is a regular file
{
    $name = $file_info['file_name']."-{$i}.".$file_info['extension'];
    $upload_file = $upload_dir."/".$name;
    $i++;
}

# 파일의 확장자 검사
if (!in_array($ext,$allocated_ext))
// in_array: Checks if a value exists in an array
{
    echo "허용되지 않은 이름의 확장자입니다!";
    exit();
}

# ★★★★★
if (!move_uploaded_file($_FILES['my_file']['tmp_name'],$upload_file))
/*
 * move_uploaded_file(): Moves an uploaded file to a new location
 * 동일한 이름의 파일 위에 새로운 내용을 덮어쓰는 게 아니라..
 * 새로운 이름으로 파일을 새로 생성할 것!
 */
{
    echo "파일이 업로드 되지 않았습니다.";
    exit();
}
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>File Upload</title>
</head>
<body>
<h1>File Upload Exercise</h1>
    <h2>File Info.</h2>
    <ul>
        <li>결과: <?php echo $result ?></li>
        <li>파일명: <?php echo $name ?></li>
        <li>확장자: <?php echo $ext ?></li>
        <li>파일형식: <?php echo $_FILES['my_file']['type'] ?></li>
        <li>파일크기: <?php echo $_FILES['my_file']['size'] ?>bytes</li>
    </ul>
    <a href="./03_file_download.php">Click here to download</a>
</body>
</html>
