<?php

namespace App\View\Components;

use Illuminate\View\Component;

class footer extends Component
{
    public $data;

    public function __construct()
    {
        $this->data = [
            'footer_texts' => [
                [
                    'paragraph' => ' Հասցե<br>',
                    'link_url' => 'https://goo.gl/maps/6pztDwfro6saLQ6R6',
                    'text' => 'Հայաստան, ք. Երևան, Տերյան 105, 0009 ',
                ],

                [
                    'paragraph' => ' Հեռախոս',
                    'link_url' => 'tel:+37423488868',
                    'text' => '(+37423)4888NUAT',
                ],
                [
                    'paragraph' => 'Էլ.փոստ',
                    'link_url' => 'mailto:info@nuaca.am',
                    'text' => ' info@nuaca.am',

                ],
            ],
        ];
    }

    public function render()
    {
        return view('components.footer', ['data' => $this->data]);
    }
}
