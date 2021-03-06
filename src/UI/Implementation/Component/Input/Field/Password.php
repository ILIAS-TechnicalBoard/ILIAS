<?php

/* Copyright (c) 2018 Nils Haagen <nils.haagen@concepts-and-training.de> Extended GPL, see docs/LICENSE */

namespace ILIAS\UI\Implementation\Component\Input\Field;

use ILIAS\UI\Component as C;
use ILIAS\Data\Password as PWD;
use ILIAS\Data\Factory as DataFactory;
use ILIAS\UI\Component\Signal;
use ILIAS\UI\Implementation\Component\ComponentHelper;
use ILIAS\UI\Implementation\Component\SignalGeneratorInterface;
use ILIAS\UI\Implementation\Component\JavaScriptBindable;
use ILIAS\UI\Component\Triggerable;

/**
 * This implements the password input.
 */
class Password extends Input implements C\Input\Field\Password, Triggerable
{
    use ComponentHelper;
    use JavaScriptBindable;

    /**
     * @var bool
     */
    private $revelation;

    /**
     * @var Signal
     */
    protected $signal_reveal;

    /**
     * @var Signal
     */
    protected $signal_mask;


    public function __construct(
        DataFactory $data_factory,
        \ILIAS\Refinery\Factory $refinery,
        $label,
        $byline,
        $signal_generator
    ) {
        parent::__construct($data_factory, $refinery, $label, $byline);

        $this->signal_generator = $signal_generator;
        $trafo = $this->refinery->to()->data('password');
        $this->setAdditionalTransformation($trafo);
        $this->initSignals();
    }

    /**
     * @inheritdoc
     */
    protected function isClientSideValueOk($value) : bool
    {
        return is_string($value);
    }

    /**
     * @inheritdoc
     */
    protected function getConstraintForRequirement()
    {
        return $this->refinery->string()->hasMinLength(1);
    }

    /**
     * This is a shortcut to quickly get a password-field with desired contraints.
     *
     * @param int 	$min_length
     * @param bool 	$lower
     * @param bool 	$upper
     * @param bool 	$numbers
     * @param bool 	$special
     * @return Password
     */
    public function withStandardConstraints($min_length = 8, $lower = true, $upper = true, $numbers = true, $special = true)
    {
        $this->checkIntArg('min_length', $min_length);
        $this->checkBoolArg('lower', $lower);
        $this->checkBoolArg('upper', $upper);
        $this->checkBoolArg('numbers', $numbers);
        $this->checkBoolArg('special', $special);

        $pw_validation = $this->refinery->password();
        $constraints = [
            $this->refinery->string()->hasMinLength($min_length),
        ];

        if ($lower) {
            $constraints[] = $pw_validation->hasLowerChars();
        }
        if ($upper) {
            $constraints[] = $pw_validation->hasUpperChars();
        }
        if ($numbers) {
            $constraints[] = $pw_validation->hasNumbers();
        }
        if ($special) {
            $constraints[] = $pw_validation->hasSpecialChars();
        }
        return $this->withAdditionalTransformation($this->refinery->logical()->parallel($constraints));
    }

    /**
     * Get a Password like this with the revelation-option enabled (or disabled).
     *
     * @param bool 	$revelation
     * @return Password
     */
    public function withRevelation($revelation)
    {
        $this->checkBoolArg('revelation', $revelation);
        $clone = clone $this;
        $clone->revelation = $revelation;
        return $clone;
    }

    /**
     * Get the status of the revelation-option.
     *
     * @return bool
     */
    public function getRevelation()
    {
        return $this->revelation;
    }

    /**
     * Set the signals for this component.
     */
    protected function initSignals()
    {
        $this->signal_reveal = $this->signal_generator->create();
        $this->signal_mask = $this->signal_generator->create();
    }

    /**
     * Reset all Signals.
     *
     * @return Password
     */
    public function withResetSignals()
    {
        $clone = clone $this;
        $clone->initSignals();
        return $clone;
    }

    /**
     * Get the signal for unmasking the input.
     *
     * @return Signal
     */
    public function getRevealSignal()
    {
        return $this->signal_reveal;
    }

    /**
     * Get the signal for masking the input.
     *
     * @return Signal
     */
    public function getMaskSignal()
    {
        return $this->signal_mask;
    }

    /**
     * @inheritdoc
     */
    public function getUpdateOnLoadCode() : \Closure
    {
        return function ($id) {
            $code = "$('#$id').on('input', function(event) {
				il.UI.input.onFieldUpdate(event, '$id', $('#$id').find('input').val().replace(/./g, '*'));
			});
			il.UI.input.onFieldUpdate(event, '$id', $('#$id').find('input').val().replace(/./g, '*'));";
            return $code;
        };
    }
}
