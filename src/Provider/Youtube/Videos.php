<?php

namespace Kladislav\LaravelGoogleApi\Provider\Youtube;

use Kladislav\LaravelGoogleApi\AbstractProvider;

class Videos extends AbstractProvider
{

    protected $url = 'https://www.googleapis.com/youtube/v3/videos';

    /**
     * @param array $params
     * @return mixed
     */
    public function getListRequest($params = [])
    {
        return $this->getComputedRequest('GET', $this->buildQuery($this->url, $params));
    }
}
