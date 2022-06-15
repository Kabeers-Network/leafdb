<?php namespace LeafDB\Format;

interface FormatInterface
{
    public static function getFileExtension();
    public static function encode($data, $pretty);
    public static function decode($data);
}
