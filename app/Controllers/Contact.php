<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        return view('contact_form');
    }

    public function send()
    {
        $email = \Config\Services::email();

        // Ambil data form
        $name    = $this->request->getPost('name');
        $from    = $this->request->getPost('email');
        $phone   = $this->request->getPost('number');
        $message = $this->request->getPost('message');

        // Siapkan isi email
        $emailContent = "
            <p><strong>Nama:</strong> $name</p>
            <p><strong>Email:</strong> $from</p>
            <p><strong>Nomor:</strong> $phone</p>
            <p><strong>Pesan:</strong><br>$message</p>
        ";

        // Set detail email
        $email->setFrom($from, $name);
        $email->setTo('andrichadhea@gmail.com'); // Ganti dengan email tujuan
        $email->setSubject('Pesan dari Form Kontak');
        $email->setMessage($emailContent);

        // Kirim email
        if ($email->send()) {
            return redirect()->to('/')->with('success', 'Pesan berhasil dikirim!');
        } else {
            return redirect()->to('/')->with('error', 'Gagal mengirim pesan. Silakan coba lagi.');
        }
    }

    public function send_2()
    {
        $email = \Config\Services::email();

        // Ambil data form
        $name    = $this->request->getPost('name');
        $from    = $this->request->getPost('email');
        $phone   = $this->request->getPost('number');
        $message = $this->request->getPost('message');

        // Siapkan isi email
        $emailContent = "
            <p><strong>Nama:</strong> $name</p>
            <p><strong>Email:</strong> $from</p>
            <p><strong>Nomor:</strong> $phone</p>
            <p><strong>Pesan:</strong><br>$message</p>
        ";

        // Set detail email
        $email->setFrom($from, $name);
        $email->setTo('andrichadhea@gmail.com'); // Ganti dengan email tujuan
        $email->setSubject('Pesan dari Form Kontak');
        $email->setMessage($emailContent);

        // Kirim email
        if ($email->send()) {
            return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
        } else {
            return redirect()->back()->with('error', 'Gagal mengirim pesan. Silakan coba lagi.');
        }
    }

    public function tesEmail()
    {
        $email = \Config\Services::email();
        $email->setFrom('andrichadhea@gmail.com', 'Website');
        $email->setTo('andrichadhea@gmail.com');
        $email->setSubject('Tes Email');
        $email->setMessage('Tes kirim email dari CodeIgniter 4');

        if ($email->send()) {
            echo 'Berhasil';
        } else {
            echo $email->printDebugger(['headers']);
        }
    }
}
