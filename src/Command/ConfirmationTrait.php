<?php

/**
 * @file
 * Contains Drupal\Console\Command\ConfirmationTrait.
 */

namespace Drupal\Console\Command;

use Drupal\Console\Style\DrupalStyle;

/**
 * Class ConfirmationTrait
 * @package Drupal\Console\Command
 */
trait ConfirmationTrait
{
    /**
     * @param DrupalStyle $io
     *
     * @return bool
     */
    public function confirmGeneration(DrupalStyle $io)
    {
        $confirmation = $io->confirm(
            $this->trans('commands.common.questions.confirm'),
            true
        );

        if (!$confirmation) {
            $io->warning($this->trans('commands.common.messages.canceled'));
        }

        return $confirmation;
    }
}
