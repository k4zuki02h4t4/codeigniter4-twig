<?php namespace Daycry\Twig\Config;

use CodeIgniter\Config\BaseService;
use CodeIgniter\Config\BaseConfig;

use Daycry\Twig\Twig;

class Services extends BaseService
{
    public static function twig( BaseConfig $config = null, bool $getShared = true )
    {
		if ( $getShared )
		{
			return static::getSharedInstance( 'twig', $config );
		}

		$config = $config ?? config( 'Twig' );

		return new Twig( $config );
	}
}