<?php

namespace Plusik\LaravelPosts;

class Hello
{
    public function greet(string $name)
    {
        return sprintf("Hi %s! How are you doing today?", $name);
    }
}
