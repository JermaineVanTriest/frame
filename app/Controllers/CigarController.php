<?php

namespace App\Controllers;

use App\Libraries\View;

class CigarController
{
    public function index()
    {
        return View::render('cigar/cigar.view');
    }

    public function store()
    {
        
    }
}

