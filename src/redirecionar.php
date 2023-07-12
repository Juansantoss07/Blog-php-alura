<?php

function redirecionar(string $url):void
{
    header("Location: $url");
}