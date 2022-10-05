<?php
try {
    throw new Exception("I'll throw error!");
} catch (Throwable $e) {
    echo $e->getMessage()."<br>";
} finally {
    echo "[Finally] block is here.";
}