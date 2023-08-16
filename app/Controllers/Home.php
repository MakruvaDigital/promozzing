<?php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'menu' => 'Beranda'
        ];

        if (in_groups('admin')) {
            return view('home/admin_index', $data);
        }

        return view('home/index', $data);
    }

    public function getAllUsers()
    {
        if (!in_groups('admin')) return json_encode(false);
        $res = $data['users'] = \Config\Database::connect()->table('users')->where('id != 1')->select(['username', 'email', 'status', 'id'])->get()->getResultArray();
        $num = 1;
        foreach ($res as &$val) {
            $val['num'] = $num++;
        }
        return json_encode(['data' => $res]);
    }

    public function activateUser()
    {
        if (!in_groups('admin')) return json_encode(false);
        $json = json_decode($this->request->getBody(), true);
        $status = $json['activate'] == "1" ? 'aktif' : null;
        $res = \Config\Database::connect()
            ->table('users')
            ->where('email', $json['email'])
            ->set(['status' => $status])
            ->update();
        return json_encode($res);
    }

    public function deleteUser($userId = null)
    {
        if (!in_groups('admin')) return json_encode(false);
        $res = \Config\Database::connect()->table('users')->delete(['id' => $userId]);
        return json_encode($res);
    }

    public function download_users_data()
    {
        if (!in_groups('admin')) return redirect()->to('/');
        $users = \Config\Database::connect()->table('users')->where('id != 1')->select(['username', 'email', 'status', 'id', 'created_at'])->get()->getResultArray();
        $filename = 'list-data-user.xlsx';
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('a1', 'No');
        $sheet->setCellValue('b1', 'Email');
        $sheet->setCellValue('c1', 'Nomor Whatsapp');
        $sheet->setCellValue('d1', 'Status');
        $sheet->setCellValue('e1', 'Daftar Pada');
        
        foreach($users as $idx => $user) {
            $sheet->setCellValue('a'.(string)($idx+2), $idx+1);
            $sheet->setCellValue('b'.(string)($idx+2), $user['email']);
            $sheet->setCellValue('c'.(string)($idx+2), $user['username']);
            $sheet->setCellValue('d'.(string)($idx+2), $user['status'] ?? 'Tidak Aktif');
            $sheet->setCellValue('e'.(string)($idx+2), $user['created_at'] ?? '-');
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save($filename);

        header("Content-Type: application/vnd.ms-excel");
		header('Content-Disposition: attachment; filename="' . basename($filename) . '"');

		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush(); // Flush system output buffer
		readfile($filename);

		exit;
    }

    
}
