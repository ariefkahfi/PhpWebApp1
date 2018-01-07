<?php
/**
 * Created by IntelliJ IDEA.
 * User: arief
 * Date: 06/01/18
 * Time: 14:28
 */

interface QueryResutListener
{
    public function OnResult(string $result , int $queryCode);
}