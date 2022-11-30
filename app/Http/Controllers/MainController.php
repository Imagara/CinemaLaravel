<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class MainController extends Controller
{
    public function home()
    {
        $movies = new Movie();
        return view('home', ['movies' => $movies->latest()->limit(3)->get()->Reverse()]);
    }
    public function films()
    {
        // $seances = Seance::whereHas('movies', $filters = function ($query){
        //     $query->whereHas('technic', function ($query) use ($technic_id, $user) {
        //         $query->where('id', $technic_id)
        //             ->where('organization_id', $user->organization_id);
        //     })->with('user:id,firstname,lastname')
        //         ->select(['id', 'user_id', 'description', 'create_date', 'complete_date'])
        //         ->where('status', 4);})
        //     ->with(['user:id,firstname,lastname', 'report' => $filters])
        //     ->get();
        
        $seances = new Seance();

        $seances->whereDate('seanceDate', Carbon::today()->toDateString())->groupBy('idMovie')->select('idMovie')->get();

        $movies = new Movie();

        return view('films', ['movies' => $movies->all()]);
    }
    public function filmsId($id)
    {
        $movies = new Movie();
        if($movies->find($id) != null)
            return view('filmpage', ['movie' => $movies->find($id)]);
        else
            return abort(404);
    }
    public function ticketbuy()
    {
        return view('ticketbuy');
    }
    public function test(Request $request)
    {
        dd($request);
    }
}
