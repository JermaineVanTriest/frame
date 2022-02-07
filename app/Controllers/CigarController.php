<?php

namespace App\Controllers;

use App\Libraries\MySql;
use App\Libraries\Request;
use App\Libraries\View;
use Exception;
use PDO;
use App\Models\ProductModel;


class CigarController
{

    public function index()
    {
        return View::render('cigar/cigar.view');
    }

    public function cigars()
    {
        if (!Request::ajax()) {
            return;
        }

        try {
            $cigar = new cigarModel;
            $cigars = $cigar->all();

            $success = true;
            $message = "Success";
        } catch (Exception $e) {
            $cigars = null;
            $success = false;
            $message = $e->getMessage();
        }

        echo json_encode([
            'success'   => $success,
            'message'   => $message,
            'cigars'  => $cigars,
        ]);
    }
}
