<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */

return [
    'credentials' => [
        'key' => 'YOUR_AWS_KEY',
        'secret' => 'YOUR_AWS_SECRET',
    ],
    'region' => 'us-east-1',
    'bucket'=>'you-bucket-name',
    'expiration'=>3,
	//'endpoint' => 'https://sfo2.digitaloceanspaces.com', //enable this for digitalocean space	
	//'endpoint' => 'https://us-east-1.linodeobjects.com', //enable this for linode Object Storage
];
