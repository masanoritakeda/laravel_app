<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestClassBase extends Component
{
    public $classBaseMessage;
    public $defalutMessage;
    /**
     * Create a new component instance.
     */
    public function __construct($classBaseMessage, $defalutMessage="初期値です(defalutMessage)")
    {
        $this->classBaseMessage = $classBaseMessage;
        $this->defalutMessage = $defalutMessage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tests.test-class-base');
    }
}
