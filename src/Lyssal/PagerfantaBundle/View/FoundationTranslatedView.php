<?php
/**
 * This file is part of a Lyssal project.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\PagerfantaBundle\View;

use WhiteOctober\PagerfantaBundle\View\TranslatedView;

/**
 * The translated view for Foundation.
 */
class FoundationTranslatedView extends TranslatedView
{
    /**
     * {@inheritDoc}
     */
    protected function previousMessageOption()
    {
        return 'prev_message';
    }

    /**
     * {@inheritDoc}
     */
    protected function nextMessageOption()
    {
        return 'next_message';
    }

    /**
     * Build previous message.
     *
     * @param string $text Text
     * @return string Previous message
     */
    protected function buildPreviousMessage($text)
    {
        return sprintf('&laquo; %s', $text);
    }

    /**
     * Build next message.
     *
     * @param string $text Text
     * @return string Next message
     */
    protected function buildNextMessage($text)
    {
        return sprintf('%s &raquo;', $text);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'foundation_translated';
    }
}
