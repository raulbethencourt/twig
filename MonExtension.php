<?php

use Twig\TwigFilter;

/**
 * MonExtension class
 */
class MonExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * GetFilters function
     *
     * @return Filter
     */
    public function getFilters()
    {
        return [
            new TwigFilter('markdown', [$this, 'markdownParse'], ['is_safe' => ['html']])
        ];
    }

    /**
     * MarkdownParse function
     *
     * @param string $value
     * @return MarkdownExtra
     */
    public function markdownParse($value)
    {
        return \Michelf\MarkdownExtra::defaultTransform($value);
    }
}