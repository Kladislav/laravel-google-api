<?php

namespace Kladislav\LaravelGoogleApi\Provider\Youtube;

use Kladislav\LaravelGoogleApi\AbstractProvider;

class I18nLanguages extends AbstractProvider
{

    protected $url = 'https://www.googleapis.com/youtube/v3/i18nLanguages';

    /**
     * @param array $params
     * @return mixed
     */
    public function getListRequest($params = [])
    {
        return $this->getComputedRequest('GET', $this->buildQuery($this->url, $params));
    }
}
