<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\DiaryEntry;
use Auth;

class DiaryEntryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carbon = new Carbon();

        $day = $carbon->format('d');
        $month = $carbon->format('M');
        return view('overzicht')->with(['daynr'=>$day, 'monthstr'=>$month]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if clicked date == today
        $carbon = new Carbon();
        // $carbon = $carbon->toDateString();
        $day = $carbon->format('d');
        $month = $carbon->format('M');
        $year = $carbon->format('y');
        $diaryentry = new DiaryEntry();
        return view('diary.create_diary_entry')->with(['daynr'=>$day, 'monthstr'=>$month, 'year'=>$year, 'diaryentry'=>$diaryentry]);

        // if clicked day != today && no entry yet
          // make new diary entry with given date

        // if already existing $entry
          // get date
          // return redirect (/editentry/{date})
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $userid = Auth::id();

      // valideer form gegevens
      $this->validate($request, [
        'bodytemp' => 'default:37.0',
        'cut' => 'default:0',
        'tickbite' => 'default:0',
        'skinrash' => 'default:0',
        'headache' => 'default:0',
        'shoulderpain' => 'default:0',
        'elbowpain' => 'default:0',
        'hippain' => 'default:0',
        'thighpain' => 'default:0',
        'kneepain' => 'default:0',
        'shinpain' => 'default:0',
      ]);

      $entry = new DiaryEntry();
      $entry->user_id = $userid;
      $entry->bodytemp = $request->bodytemp;
      $entry->cut = $request->cut;
      $entry->tickbite = $request->tickbite;
      $entry->skinrash = $request->skinrash;
      $entry->headache = $request->headache;
      $entry->shoulderpain = $request->shoulderpain;
      $entry->elbowpain = $request->elbowpain;
      $entry->hippain = $request->hippain;
      $entry->thighpain = $request->thighpain;
      $entry->kneepain = $request->kneepain;
      $entry->shinpain = $request->shinpain;
      $entry->save();
      return redirect('/home')->with('success', 'De wijzigingen zijn opgeslagen.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
