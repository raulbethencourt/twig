<?php

use Twig\TwigFilter;
use Twig\TwigFunction;

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

    /**
     * GetFunctions function
     *
     * @return array
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('activeClass', [$this, 'activeClass'], ['needs_context' => true])
        ];
    }

    /**
     * ActiveClass function
     *
     * @param string $page
     * @return string
     */
    public function activeClass(array $context, string $page)
    {
        if (isset($context['current_page']) && $context['current_page'] === $page) {
            return ' active ';
        }
    }
}