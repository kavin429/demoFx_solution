<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    public function show(string $slug): Response
    {
        $page = config("company.{$slug}");

        abort_if($page === null, 404);

        return response()->view('products.company', ['page' => $page]);
    }
}