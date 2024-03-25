<?php

declare(strict_types=1);

namespace Potter\Link\Provider;

final class LinkProvider extends AbstractLinkProvider
{
    use LinkProviderTrait;
    
    public function __construct(array $links = [])
    {
        $this->setLinks($links);
    }
}