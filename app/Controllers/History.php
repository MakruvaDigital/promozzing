<?php

namespace App\Controllers;
use App\Models\History as HistoryModel;

class History extends BaseController
{
    public function __construct()
    {
        $this->history = new HistoryModel();
    }

    public function index()
    {
        $data = [
            'title' => 'History',
            'menu' => 'History',
            'quotes' => $this->history->getAllQuotesData( user_id() ),
            'headlines' => $this->history->getAllHeadlinesData( user_id() ),
            'copywritings' => $this->history->getAllCopywritingData( user_id() )
        ];

        return view('history/index', $data);
    }

    public function getAllQuotes()
    {
        $quotes = $this->history->getAllQuotes( user_id() );
        return json_encode( ['data'=>$quotes] );
    }

    public function getAllHeadlines()
    {
        $headlines = $this->history->getAllHeadlines( user_id() );
        return json_encode( ['data'=>$headlines] );
    }

    public function getAllCopywritings()
    {
        $Copywritings = $this->history->getAllCopywritings( user_id() );
        return json_encode( ['data'=>$Copywritings] );
    }
}
