<?php

namespace App\Http\Livewire;
use App\Models\Book; 

use Livewire\Component;

class BookIndex extends Component
{
    public $liveModal = false;//モーダルウインドウ
    public $title;//タイトル
    public $newImage;//画像
    public $price;//価格
    public $description;//詳細

    public function showBookModal(){
        $this->reset();
        $this->liveModal = true;
    }

    public function render()
    {
        return view('livewire.book-index');
    }
}


