<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\AboutPagePhoto;
use App\Models\Application;
use App\Models\Catalog;
use App\Models\Lang;
use App\Models\Partner;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Product;
use App\Models\Statistic;
use App\Models\Sertificate;
use App\Models\Service;
use App\Models\Translation;
use App\Traits\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{
    use ReCaptcha;

    public function index() {
        $export_products_for_index = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(8)->get();
        $export_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(6)->get();
        $import_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 2);
        })->take(12)->get();
        $services = Service::latest()->take(4)->get();
        $posts = Post::latest()->take(4)->get();
        $partners = Partner::latest()->get();
        $export_catalogs = Catalog::where('parent', 1)->get();
        $import_catalogs = Catalog::where('parent', 2)->get();
        $all_services = Service::all();
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = app()->getLocale();
        return view('welcome', compact('export_products', 'import_catalogs', 'import_products', 'posts','langs','translations','lang','services','partners','all_services', 'export_catalogs', 'export_products_for_index'));
    }

    public function about() {
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = app()->getLocale();
        //for footer
        $export_catalogs = Catalog::where('parent', 1)->get();
        $import_catalogs = Catalog::where('parent', 2)->get();
        $all_services = Service::all();
        $export_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(6)->get();

        return view('about', compact('langs','translations', 'lang', 'import_catalogs', 'all_services', 'export_catalogs', 'export_products'));
    }

    public function export() {
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = app()->getLocale();
        //for footer
        $export_catalogs = Catalog::where('parent', 1)->get();
        $import_catalogs = Catalog::where('parent', 2)->get();
        $all_services = Service::all();
        $export_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(6)->get();

        return view('export', compact('langs','translations', 'lang', 'import_catalogs', 'all_services', 'export_catalogs', 'export_products'));

    }

    public function import() {
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = app()->getLocale();
        //for footer
        $export_catalogs = Catalog::where('parent', 1)->get();
        $import_catalogs = Catalog::where('parent', 2)->get();
        $all_services = Service::all();
        $export_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(6)->get();
        $partners = Partner::latest()->get();

        return view('import', compact('langs','translations', 'lang', 'import_catalogs', 'all_services', 'export_catalogs', 'export_products', 'partners'));

    }

    public function services() {
        $services = Service::latest()->get();
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = app()->getLocale();
        //for footer
        $export_catalogs = Catalog::where('parent', 1)->get();
        $import_catalogs = Catalog::where('parent', 2)->get();
        $all_services = Service::all();
        $export_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(6)->get();

        return view('services', compact('langs','translations', 'lang', 'import_catalogs', 'all_services', 'export_catalogs', 'export_products', 'services'));

    }

    public function catalog() {
        $catalog = Catalog::orderBy('id', 'desc')->get();
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = \App::getLocale();
        $catalog_for_footer = Catalog::take(5)->get();
        return view('catalog', compact([
            'langs',
            'translations',
            'lang',
            'catalog_for_footer',
            'catalog'
        ]));
    }

    public function catalogInner($id) {
        $catalog_for_footer = Catalog::take(5)->get();
        $catalog = Catalog::find($id);
        $all = Catalog::orderBy('id', 'desc')->get()->except($id);
        $langs = Lang::all();
        $products = Product::where('catalog_id', $catalog->id)->paginate(9);
        $translations = Translation::all();
        $lang = \App::getLocale();
        $products_count = count($catalog->products) >= 9 ? 9 : count($catalog->products);
        return view('catalog-inner', compact([
            'langs',
            'translations',
            'lang',
            'catalog',
            'all',
            'products',
            'products_count',
            'catalog_for_footer',
        ]));
    }

    public function catalogAll($id) {
        $catalog_for_footer = Catalog::take(5)->get();
        $catalog = Catalog::find($id);
        $all = Catalog::orderBy('id', 'desc')->get()->except($id);
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = \App::getLocale();
        return view('catalog-all', compact([
            'langs',
            'translations',
            'lang',
            'catalog',
            'all',
            'catalog_for_footer',
        ]));
    }

    public function gallery() {
        $catalog_for_footer = Catalog::take(5)->get();
        $photos = Photo::all();
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = \App::getLocale();
        return view('gallery', compact([
            'photos',
            'catalog_for_footer',
            'langs',
            'translations',
            'lang',
        ]));
    }

    public function news() {
        $posts = Post::latest()->paginate(12);
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = \App::getLocale();
        //for footer
        $export_catalogs = Catalog::where('parent', 1)->get();
        $import_catalogs = Catalog::where('parent', 2)->get();
        $all_services = Service::all();
        $export_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(6)->get();
        return view('news', compact('langs','translations','lang','posts','export_catalogs', 'import_catalogs', 'all_services', 'export_products'));
    }

    public function post($id) {
        $other = Post::latest()->take(4)->get()->except($id);
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = app()->getLocale();
        $post = Post::find($id);
        $post->update([
            'views' => $post->views + 1
        ]);
        //for footer
        $export_catalogs = Catalog::where('parent', 1)->get();
        $import_catalogs = Catalog::where('parent', 2)->get();
        $all_services = Service::all();
        $export_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(6)->get();
        return view('post', compact('langs','translations','lang','post','other', 'export_catalogs', 'import_catalogs', 'all_services', 'export_products'));
    }

    public function product($id) {
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = app()->getLocale();
        $product = Product::find($id);
        $statistics = Statistic::where('product_id',$id)->get();


        //for footer
        $export_catalogs = Catalog::where('parent', 1)->get();
        $import_catalogs = Catalog::where('parent', 2)->get();
        $all_services = Service::all();
        $export_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(6)->get();
        return view('product', compact('statistics','langs','translations','lang','product', 'export_catalogs', 'import_catalogs', 'all_services', 'export_products'));
    }

    public function service($id) {
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = app()->getLocale();
        $service = Service::find($id);

        //for footer
        $export_catalogs = Catalog::where('parent', 1)->get();
        $import_catalogs = Catalog::where('parent', 2)->get();
        $all_services = Service::all();
        $export_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(6)->get();
        return view('service', compact('langs','translations','lang','service', 'export_catalogs', 'import_catalogs', 'all_services', 'export_products'));
    }

    public function contacts() {
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = app()->getLocale();
        //for footer
        $export_catalogs = Catalog::where('parent', 1)->get();
        $import_catalogs = Catalog::where('parent', 2)->get();
        $all_services = Service::all();
        $export_products = Product::whereHas('catalog', function($query) {
            $query->where('parent', 1);
        })->take(6)->get();
        return view('contacts', compact('langs','translations','lang','export_catalogs', 'import_catalogs', 'all_services', 'export_products'));
    }

    public function career() {
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = \App::getLocale();
        $catalog_for_footer = Catalog::take(5)->get();
        return view('career', compact([
            'langs',
            'translations',
            'lang',
            'catalog_for_footer',
        ]));
    }

    public function location() {
        $langs = Lang::all();
        $translations = Translation::all();
        $lang = \App::getLocale();
        $catalog_for_footer = Catalog::take(5)->get();
        return view('location', compact([
            'langs',
            'translations',
            'lang',
            'catalog_for_footer',
        ]));
    }

    public function applications(Request $request)
    {
        // dd($request->all());
        // $name = 'g-recaptcha-response';
        // if(!isset($request->$name)) {
        //     return back()->withInput()->with([
        //         'success' => false,
        //         'message' => 'Заполните captcha!'
        //     ]);
        // }

        $data = $request->all();

        $validator = Validator::make($data, [
            'email' => 'required|max:255',
            // 'g-recaptcha-response' => 'required'
        ]);

        if($validator->fails()) {
            return back()->withInput()->with(['message' => 'Error! All fields are not filled!']);
        }

        //captcha
        $resCaptcha = $this->checkCaptcha($request->input('g-recaptcha-response'));
        if (!$resCaptcha['success']) return back()->withInput()->with(['message' => 'Решите captcha!']);

        Application::create($request->all());

        // for mail
        $to = 'info@globalexim.uz';
        $from = 'globaleximcallback@gmail.com';
        $subject = 'Запрос с сайта globalexim.uz';

        Mail::send('mail', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'theme' => $request->input('theme'),
            'form_message' => $request->input('message'),
        ], function ($message) use ($to, $from, $subject) {
            $message->to($to, 'to text')->subject($subject);
            $message->from($from, 'Сайт globalexim.uz');
        });

        return redirect()->back()->with([
            'success' => true,
            'message' => 'Ваша заявка отправлена'
        ]);
    }

    public function send_to_email(Request $request) {
//        dd($request);
        Mail::send('mail', [
            'name' => $request->name,
            'theme' => $request->theme,
            'message' => $request->message,
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ], function ($message) {
            $message->to('licko37225021@gmail.com', 'to text')->subject('Запрос с сайта GlobalEximTrade');
            $message->from('licko37225021@gmail.com', 'Сайт globalexim.uz');
        });

        return redirect()->back()->with(['message' => 'Ваша заявка отправлена']);
        dd($request);
    }

    public function uploadImage(Request $request) {
        if ($request->hasFile('upload')) {
            $fileName = time().'.'.$request->file('upload')->getClientOriginalExtension();

            $request->file('upload')->move(public_path('uploads'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/'.$fileName);
            $msg = 'Image upload successfully!';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
