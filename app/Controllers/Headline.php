<?php

namespace App\Controllers;
use App\Models\History;

class Headline extends BaseController
{
    public function __construct()
    {
        $this->history = new History();
    }
    public function index()
    {
        $data = [
            'title' => 'Headline Generator',
            'menu' => 'Headline Generator'
        ];

        return view('headline/index', $data);
    }

    public function countsCopiedHeadlines()
    {
        $json = json_decode($this->request->getBody(), true);
        if( $json['type'] ){
            $res = $this->history->addTotalCopiedHeadlines( $json['type'], user_id() );
            return json_encode($res);
        }
    }

    public function addHeadline()
    {
        $json = json_decode( $this->request->getBody(), true );
        $res = $this->history->addHeadline( $json['type'], $json['headline_text'], user_id() );
        return json_encode($res);
    }
}
