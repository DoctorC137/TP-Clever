<?php

//DO NOT MODIFY THIS FILE

function hello(string $node_version) : void
{
    if($node_version == "14") echo "This is it!";
    else throw new Exception("Wrong version: require node version 14");
}

hello(getenv("CC_NODE_VERSION"));
