<?php

namespace App\Controllers;

use App\Controller;

class SongListController extends Controller
{
    public function index()
    {
        return $this->render('song-list');
    }
}
