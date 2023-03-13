<?php
namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
{
    public $key;

    public function __construct()
    {
        $this->key = [
            'links' => [
                [
                    'text' => 'Ֆակուլտետներ',
                    'link' => '/'
                ],
                [
                    'text' => 'Դիմորդ',
                    'link' => 'dimord'
                ],
                [
                    'text' => 'Հետադարձ կապ',
                    'link' => 'hetadardz-kap'
                ],
                [
                    'text' => 'Ուսանողներ',
                    'link' => 'usanoxner'
                ],
            ]
        ];
    }

    public function render()
    {
        return view('components.header', ['key' => $this->key]);
    }
}
