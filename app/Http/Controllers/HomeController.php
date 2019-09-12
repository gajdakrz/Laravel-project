<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\magazines;
use App\publishers;
 	
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
        $publishers = json_encode(publishers::all(),TRUE);
        $magazines = $this->filter($request);
        
        return view('home', compact('magazines', 'publishers', 'request'));
    }
    
        public function filter($request)
    {
        $perPage = 4;
        $mag_filtr = null;
        $pub_filtr = null;
        
        if ($request->has('mag_filtr')) 
        {   
            $mag_filtr = $request->query('mag_filtr');
        }
        
        if ($request->has('pub_filtr')) 
        {   
            $pub_filtr = $request->query('pub_filtr');
        }
        
        $query = DB::table('magazines')->select('magazines.*', 'publishers.name as publisher_name')
                    ->Join('publishers', 'magazines.id_publisher', '=','publishers.id' )
                    
                    ;

        if ($mag_filtr) {
            $query->where('magazines.id', $mag_filtr)
                  ->orWhere('magazines.title', 'LIKE', '%' . $mag_filtr . '%');
        }

        if ($pub_filtr) {
            $query->where('magazines.id_publisher', $pub_filtr);
        }
        return $query->paginate($perPage);
        }
}
