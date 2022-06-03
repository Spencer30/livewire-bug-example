<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Steps extends Component
{
    public $currentUrl;
    public $currentStep = 2; 
    public $steps = [
        'district.signup.setup' => [
            'title' => 'District setup',
            'description' => 'Organize your VU',
            'step' => 1
        ],
        'district.signup.build-team' => [
            'title' => 'Build your team',
            'description' => 'Invite other members to your workspace',
            'step' => 2
        ],
        'district.signup.student-data' => [
            'title' => 'Upload student data',
            'description' => 'Load demographic information',
            'step' => 3
        ],
        'district.signup.verify-data' => [
            'title' => 'Verify Columns',
            'description' => 'Get columns mapped perfectly',
            'step' => 4
        ],
        'district.signup.preview' => [
            'title' => 'Preview Upload',
            'description' => 'Making sure we got everything right',
            'step' => 5
        ],
        
    ];

    public function __construct()
    {
        $this->currentUrl = url()->current();
    }
    public function render()
    {
        return view('livewire.steps');
    }
}
