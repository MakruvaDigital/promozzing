<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class History extends Model
{
    protected $table = 'users';

    public function getAllQuotes( $uid ){
        $quotes = $this->db
            ->table('quotes')
            ->select('text')
            ->where('uid', $uid)
            ->orderBy('id','DESC')
            ->get()->getResultArray();

        $num = 1;
        foreach($quotes as &$quote){
            $quote['num'] = $num++;
        }

        if( count($quotes) === 0 ){ 
            return [];
        } else {
            return $quotes;
        }
    }

    public function getAllQuotesData( $uid ){
        $res = [];

        $quotesCounts = $this->db
            ->table('generated_quotes_counts')
            ->select('counts')
            ->where('uid', $uid)
            ->get()->getResult();
        if( count($quotesCounts) === 0 ){
            $res['generated_quotes_total'] = 0;
        }else{
            $res['generated_quotes_total'] = $quotesCounts[0]->counts;
        }

        $res['copied_quotes_total'] = $this->db
        ->table('quotes')
        ->where('uid', $uid)
        ->orderBy('id','DESC')
        ->get()->getNumRows();

        return $res;
    }

    public function addTotalGeneratedQuotesCount( $uid ){
        $gqc = $this->db
            ->table('generated_quotes_counts')
            ->where('uid', $uid)
            ->select('counts')
            ->get()->getResult();
        
        if( count($gqc) > 0 ){
            return $this->db->table('generated_quotes_counts')
                ->whereIn('uid', [$uid])
                ->set(['counts' => $gqc[0]->counts + 1])
                ->update();
        }else{
            return $this->db->table('generated_quotes_counts')
                ->insert([
                    'uid' => $uid,
                    'counts' => 1
                ]);
        }
    }

    public function addQuotes( $text, $uid ) {
        return $this->db->table('quotes')->insert([
            'uid'  => $uid,
            'text' => $text
        ]);
    }

    
    public function getAllHeadlines( $uid ){
        $headlines = $this->db
            ->table('headlines')
            ->where('uid', $uid)
            ->orderBy('id','DESC')
            ->get()->getResultArray();

        $num = 1;
        foreach($headlines as &$headline){
            unset($headline['id']);
            unset($headline['uid']);
            $headline['num'] = $num++;
        }

        if( count($headlines) === 0 ){ 
            return [];
        } else {
            return $headlines;
        }
    }

    public function getAllHeadlinesData( $uid ){
        $quotesCounts = $this->db
            ->table('copied_headlines_counts')
            ->where('uid', $uid)
            ->get()->getResultArray();
        if( count($quotesCounts) === 0 ){
            $res = [
                "critical_issue" => 0,
                "time_period" => 0,
                "barriers" => 0, 
                "figure" => 0,
                "other" => 0,
            ];
        }else{
            $res = $quotesCounts[0];
        }

        $res['copied_headlines_total'] = $this->db
        ->table('headlines')
        ->where('uid', $uid)
        ->get()->getNumRows();

        return $res;
    }

    public function addTotalCopiedHeadlines( $type, $uid ){
        $gqc = $this->db
            ->table('copied_headlines_counts')
            ->where('uid', $uid)
            ->get()->getResultArray();
        
        if( count($gqc) > 0 ){
            return $this->db->table('copied_headlines_counts')
                ->whereIn('uid', [$uid])
                ->set([$type => $gqc[0][$type] + 1])
                ->update();
        }else{
            $this->db->table('copied_headlines_counts')
                ->insert([
                    'uid' => $uid,
                    'critical_issue' => 0,
                    'time_period' => 0,
                    'barriers' => 0,
                    'figure' => 0,
                    'other' => 0,
                ]);
            return $this->db->table('copied_headlines_counts')
            ->whereIn('uid', [$uid])
            ->set([$type => 1])
            ->update();
        }
    }

    public function addHeadline( $type, $text, $uid ) {
        return $this->db->table('headlines')->insert([
            'uid'  => $uid,
            'type' => $type,
            'text' => $text,
            'created_at' => new Time('now')
        ]);
    }
    

    public function getAllCopywritings( $uid ){
        $copywritings = $this->db
            ->table('copywritings')
            ->where('uid', $uid)
            ->orderBy('id','DESC')
            ->get()->getResultArray();

        $num = 1;
        foreach($copywritings as &$copywriting){
            unset($copywriting['id']);
            unset($copywriting['uid']);
            $copywriting['num'] = $num++;
        }

        if( count($copywritings) === 0 ){ 
            return [];
        } else {
            return $copywritings;
        }
    }

    public function getAllCopywritingData( $uid ){
        $quotesCounts = $this->db
        ->table('copied_copywritings_counts')
        ->where('uid', $uid)
        ->get()->getResultArray();
        if( count($quotesCounts) === 0 ){
            $res = [
                'total' => 0,
                'copywriting1' => 0,
                'copywriting2' => 0,
                'copywriting3' => 0,
                'copywriting4' => 0,
                'copywriting5' => 0,
            ];
        }else{
            $res = $quotesCounts[0];
            unset($res['id']);
            unset($res['uid']);
            $res['total'] = 0;
            foreach( $res as $val ){
                $res['total'] = $res['total'] + (int) $val;
            }
        }
        return $res;
    }

    public function addTotalCopiedCopywriting( $type, $uid ){
        $ccc = $this->db
            ->table('copied_copywritings_counts')
            ->where('uid', $uid)
            ->get()->getResultArray();
        
        if( count($ccc) > 0 ){
            return $this->db->table('copied_copywritings_counts')
                ->whereIn('uid', [$uid])
                ->set(['copywriting'.$type => $ccc[0]['copywriting'.$type] + 1])
                ->update();
        }else{
            $this->db->table('copied_copywritings_counts')
                ->insert([
                    'uid' => $uid,
                    'copywriting1' => 0,
                    'copywriting2' => 0,
                    'copywriting3' => 0,
                    'copywriting4' => 0,
                    'copywriting5' => 0,

                ]);
            return $this->db->table('copied_copywritings_counts')
            ->whereIn('uid', [$uid])
            ->set(['copywriting'.$type => 1])
            ->update();
        }
    }

    public function addCopywriting( $text, $uid ){
        return $this->db->table('copywritings')->insert([
            'uid' => $uid,
            'text' => json_encode($text),
            'created_at' => new Time('now')
        ]);
    }
}
