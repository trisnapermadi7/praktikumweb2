<?php namespace App\Controllers;
use App\Models\BukuModel;
use CodeIgniter\Controller;
class Buku extends Controller{
    protected $model;

    public function __construct(){
        $this->model = new BukuModel();
        $this->helpers = ['form', 'url'];
    }

    public function index(){
        $data = [
            'posts' => $this->model->paginate(10),
            'pager' => $this->model->pager,
            'title' => 'DAFTAR POSTINGAN'
        ];
        return view('halaman_buku', $data);
    }

    public function create(){
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('/login'));
        }
        $data = ['title' => 'Buat Postingan Baru'];
        return view('halaman_tambah', $data);
    }

    public function store(){
        $data = $this->request->getPost(['judul', 'penulis', 'penerbit', 'tahun_terbit']);
        if (! $this->validateData($data, $this->model->validationRules)) {
            return $this->create();
        }
        
        $post = $this->validator->getValidated();
        $save = $this->model->save([
            'judul' => $post['judul'],
            'penulis' => $post['penulis'],
            'penerbit' => $post['penerbit'],
            'tahun_terbit' => $post['tahun_terbit'],
        ]);

        session()->setFlashdata('success', 'Postingan berhasil ditambahkan.');
        return redirect()->to(base_url('/'));
    }

    public function edit($id){
        // Periksa apakah pengguna sudah masuk
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('/login'));
        }
        
        $post = $this->model->find($id);
        if (empty($post)) {
            session()->setFlashdata('error','Postingan tidak ditemukan');
            return redirect()->back();
        }
        
        $data = [
            'title' => 'Edit Postingan',
            'post' => $post
        ];

        return view('halaman_edit', $data);
    }

    public function update($id){
        // Periksa apakah pengguna sudah masuk
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('/login'));
        }
        
        $post = $this->model->find($id);
        if (empty($post)) {
            session()->setFlashdata('error','Postingan tidak ditemukan');
            return redirect()->back();
        }
        
        $data = $this->request->getPost(['judul', 'penulis', 'penerbit', 'tahun_terbit']);

        if (! $this->validateData($data, $this->model->validationRules)) {
            return $this->create();
        }

        $updatedPost = $this->validator->getValidated();

        $update = $this->model->update($post['id'], $updatedPost);

        if ($update) {
            session()->setFlashdata('success', 'Postingan berhasil diperbarui');
            return redirect()->to(base_url('/'));
        } else {
            session()->setFlashdata('error', 'Terjadi beberapa masalah, silakan coba lagi.');
            return redirect()->back();
        }
    }

    public function delete($id){
        // Periksa apakah pengguna sudah masuk
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('/login'));
        }

        if (empty($id)) {
            return redirect()->to(base_url('/'));
        }

        $delete = $this->model->delete($id);

        if ($delete) {
            session()->setFlashdata('success', 'Postingan berhasil dihapus.');
            return redirect()->to(base_url('/'));
        } else {
            session()->setFlashdata('error', 'Terjadi beberapa masalah, silakan coba lagi.');
            return redirect()->to(base_url('/'));
        }
    }
}
