<?php

namespace App\Controllers;

use App\Models\RentalModel;
use CodeIgniter\Controller;
use CodeIgniter\HotReloader\HotReloader;

class RentalController extends Controller
{
    public function index()
    {
        $model = new RentalModel();
        $data['rental'] = $model->findAll();

        return view('pages/index', $data);
    }

    public function create()
    {
        return view('pages/create');
    }

    public function store()
    {
        $model = new RentalModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'bundle' => $this->request->getPost('bundle'),
            'price' => $this->request->getPost('price')
        ];

        $model->insert($data);
        return redirect()->to('/pages');
    }

    public function edit($id)
    {
        $model = new RentalModel();
        $data['rental'] = $model->find($id);

        return view('pages/edit', $data);
    }

    public function update($id)
    {
        $model = new RentalModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'bundle' => $this->request->getPost('bundle'),
            'price' => $this->request->getPost('price')
        ];

        $model->update($id, $data);
        return redirect()->to('/pages');
    }

    public function delete($id)
    {
        $model = new RentalModel();
        $model->delete($id);
        return redirect()->to('/pages');
    }

    public function search()
    {
        $model = new RentalModel();

        $searchTerm = $this->request->getGet('search');

        $data['rental']= [];

        if (!empty($searchTerm)) {
            $data['rental'] = $model->like('name', $searchTerm)
                                    ->orLike('address', $searchTerm)
                                    ->findAll();
        
            error_log('Query Result : ' . print_r($data['rental'], true));

        }

        if (empty($data['rental'])) {
            $data['message'] = "Gak ada datanya bos";
        }

        return view('pages/searchResults', $data);
    }
}