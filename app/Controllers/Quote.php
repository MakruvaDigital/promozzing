<?php

namespace App\Controllers;
use App\Models\History;

class Quote extends BaseController
{
    public function __construct()
    {
        $this->history = new History();
    }

    public function index()
    {
        $data = [
            'title' => 'Quote Generator',
            'menu' => 'Quote Generator',
        ];
        $this->history->addTotalGeneratedQuotesCount( user_id() );

        return view('quote/index', $data);
    }

    public function countsGeneratedQuotes()
    {
        if( $this->request->getBody('generateQuotes') ){
            $res = $this->history->addTotalGeneratedQuotesCount( user_id() );
            return json_encode($res);
        }
    }

    public function saveAndCopyQuotes()
    {
        $json = json_decode( $this->request->getBody(), true );
        $res = $this->history->addQuotes( $json['quotes_text'], user_id() );
        return json_encode($res);
    }
}
