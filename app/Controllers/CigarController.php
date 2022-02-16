<?php

namespace App\Controllers;

use App\Libraries\View;

class CigarController
{
    public function create()
    {
        
    }

    public function store()
    {
        $education = $_POST;

        $education['user_id'] = Helper::getUserIdFromSession();
        $education['created'] = date('Y-m-d H:i:s');
        $education['created_by'] = Helper::getUserIdFromSession();

        ProductModel::load()->store($education);
    }

    public function edit()
    {
        $cigarId = Helper::getIdFromUrl('');

        $cigar = ProductModel::load()->get((int)$cigarId);
        
        return View::render('products/edit.view', [
            'education' => $cigar,
            'action'    => 'cigar/' . $cigarId . '/update',
        ]);
    }

    public function update()
    {
         
    }
    public function index()
    {
        return View::render('cigar/cigar.view');
    }

    
}

