<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Video;
use App\Youtube;
use App\Berita;
use App\Artikell;
use App\PengertianProduk;
use App\Produk;
use App\User;
use App\Voucher;
use App\Ebook;
use App\PaymentEbook;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Agent\Facades\Agent;
use Mobile_Detect;
use App\Kategori;
use App\SubKategori;
use Illuminate\Support\Facades\View;


class tampilanController extends Controller
{


    public function index()
    {

        return view('ebook');
    }
}
