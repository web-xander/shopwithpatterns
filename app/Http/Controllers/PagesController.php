<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjects\NewsletterSubject;
use App\Http\Repositories\ArticleRepository;
use App\Http\Repositories\CustomerRepository;

class PagesController extends Controller
{
    public $articles;

    public function __construct(ArticleRepository $articles)
    {
        $this->articles = $articles;
    }

    public function index()
    {
        $articles = $this->articles->all();
        return view('index', compact('articles'));
    }

    public function subscribe(Request $request)
    {
        $customer = new CustomerRepository();
        $customer->createSubscriberFromRequest($request);
    }

}
