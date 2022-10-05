<?php
try {
    throw new Exception("404 Not Found!!!");
} catch (Throwable $exception) {
    echo $exception->getMessage();
}