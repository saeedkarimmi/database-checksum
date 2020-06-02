<?php


namespace saeedkarimmi\DatabaseChecksum;


trait Checksum
{
    /**
     * Boot the checksums trait for a model.
     *
     * @return void
     */
    public static function bootChecksum()
    {
        static::addGlobalScope(new ChecksumScope());

        static::checksumRegisterListeners();
    }


    /**
     * Register events we need to listen for.
     *
     * @return void
     */
    public static function checksumRegisterListeners()
    {
        static::creating('saeedkarimmi\DatabaseChecksum\Listeners\Creating@handle');
        static::updating('saeedkarimmi\DatabaseChecksum\Listeners\Updating@handle');
    }


    /**
     * Get the name of the "checksum" column.
     *
     * @return string
     */
    public function getChecksumColumn()
    {
        return defined('static::Checksum') && !is_null(static::CHECKSUM) ? static::CHECKSUM : 'checksum';
    }
}
