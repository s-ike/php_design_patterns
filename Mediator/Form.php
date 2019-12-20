<?php

namespace Mediator;

use Mediator\Input;

class Form
{
    private $values;
    private $errors;
    private $hasSent;

    public function __construct()
    {
        $this->values = [];
        $this->errors = [];
        $this->hasSent = false;
    }

    public function add(Input $input) :void
    {
        $input->setForm($this);
        if (! array_key_exists($input->getName(), $this->values)) {
            $this->values[$input->getName()] = $input->getValue();
        }
    }

    public function send() :bool
    {
        $this->hasSent = true;

        // Check radio button for required
        if (! array_key_exists('radio', $this->values)) {
            $this->errors['radio'] = 'This field is required.';
            return false;
        }
        // Check select
        $target = $this->values['radio'];
        if (! isset($this->values["select-$target"]) || $this->values["select-$target"] === '') {
            $this->errors["select-$target"] = 'This field is required.';
            return false;
        }

        return true;
    }

    public function getErrors() :?array
    {
        if (! $this->hasSent) {
            $this->send();
        }
        if ($this->errors) {
            return $this->errors;
        }
        return null;
    }
}
