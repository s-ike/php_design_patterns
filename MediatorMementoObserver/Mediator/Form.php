<?php

namespace MediatorMementoObserver\Mediator;

use MediatorMementoObserver\Memento\Caretaker\Caretaker;
use MediatorMementoObserver\Memento\Originator\Originator;

class Form
{
    private $values;
    private $errors;

    public function __construct()
    {
        $this->values = [];
        $this->errors = [];
    }

    public function add(Input $input)
    {
        $this->values[$input->getName()] = $input->getValue();
    }

    public function send() :Originator
    {
        $caretaker = new Caretaker();
        $data = isset($_SESSION['data']) ? $_SESSION['data'] : new Originator();

        $hasErrors = false;
        if (! array_key_exists('mode', $this->values)) {
            $this->errors['mode'] = 'This field is required.';
            $hasErrors = true;
        }
        if (! array_key_exists('comment', $this->values)) {
            $this->errors['comment'] = 'This field is required.';
            $hasErrors = true;
        }
        if ($hasErrors) {
            return $data;
        }

        switch ($this->values['mode']) {
            case 'add':
                $data->addComment(isset($this->values['comment']) ? $this->values['comment'] : '');
                break;
        
            case 'save':
                $caretaker->setSnapshot($data->createMemento());
                break;
        
            case 'restore':
                $snapshot = $caretaker->getSnapshot();
                $snapshot ? $data->restoreMemento($snapshot) : null;
                break;
        
            case 'clear':
                $data = new Originator();
                break;
        }
        $_SESSION['data'] = $data;

        return $data;
    }

    public function getErrors() :array
    {
        return $this->errors;
    }
}
