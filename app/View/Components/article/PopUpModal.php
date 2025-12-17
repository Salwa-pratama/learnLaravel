<?php

namespace App\View\Components\article;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopUpModal extends Component
{
    /**
     * Create a new component instance.
     */
    public string $id;
    public string $title;
    public string $subtitle;
    public string $action;
    public string $method;
    public string $confirmText;
    public string $cancelText;

    public function __construct(
        string $id = 'confirmModal',
        string $title = 'Are You sure ?',
        string $subtitle = 'This Action cannot be undone.',
        string $action = '',
        string $method = 'POST',
        string $confirmText = 'confirm',
        string $cancelText = 'cancel',
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->action = $action;
        $this->method = $method;
        $this->confirmText = $confirmText;
        $this->cancelText = $cancelText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article.pop-up-modal');
    }
}
