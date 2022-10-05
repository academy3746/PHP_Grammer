<?php
try {
    throw new Exception("예외 받아라!!!");
} catch (Throwable $e) {
    echo $e->getMessage();
}