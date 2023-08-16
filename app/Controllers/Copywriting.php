<?php

namespace App\Controllers;
use App\Models\History;

class Copywriting extends BaseController
{
    public function __construct()
    {
        $this->history = new History();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Copywriting Generator',
            'menu' => 'Copywriting Generator'
        ];
        return view('copywriting/index', $data);
    }

    public function countsCopiedCopywriting()
    {
        $json = json_decode($this->request->getBody(), true);
        if( $json['type'] ){
            $res = $this->history->addTotalCopiedCopywriting( $json['type'], user_id() );
            return json_encode($res);
        }
    }

    public function addCopywriting()
    {
        $json = json_decode( $this->request->getBody(), true );
        $res = $this->history->addCopywriting( $json['text'], user_id() );
        return json_encode($res);
    }
}
