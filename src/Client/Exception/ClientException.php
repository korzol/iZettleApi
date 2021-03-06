<?php

declare(strict_types=1);

namespace LauLamanApps\IzettleApi\Client\Exception;

use Exception;
use LauLamanApps\IzettleApi\Exception\IzettleApiException;

class ClientException extends Exception implements IzettleApiException
{
}
