<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\DiaryEntry;


class DiaryEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carbon = new Carbon();
        // $carbon = $carbon->toDateString();
        $day = $carbon->format('d');
        $month = $carbon->format('M');
        $diaryentry = new DiaryEntry();
        return view('diary.create_diary_entry')->with(['daynr'=>$day, 'monthstr'=>$month, 'diaryentry'=>$diaryentry]);
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
        // 'skinrash' => 'default:0',
        // 'headache' => 'default:0',
        // 'shoulderpain' => 'default:0',
        // 'elbowpain' => 'default:0',
        // 'hippain' => 'default:0',
        // 'thighpain' => 'default:0',
        // 'kneepain' => 'default:0',
        // 'shinpain' => 'default:0',
      ]);

      $entry = new DiaryEntry();
      $entry->user_id = $userid;
      $entry->bodytemp = $request->bodytemp;
      $entry->cut = $request->cut;
      $entry->tickbite = $request->tickbite;
      $entry->save();
      return view('diary.create_diary_entry')->with('success', 'De wijzigingen zijn opgeslagen.');
      return redirect('/newentry')->with('success', 'De wijzigingen zijn opgeslagen.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_ajax(Request $request)
    {
      // require_once('common.php');

      // The front-end AJAX code sends everything whenever a key is pressed - so
      // store it all. Normally you'd put the information into a database or
      // in a file on disk.

      return 123;
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
    //geef home en overzicht/kalender view
    public function geefhome()
    {
        return view('newhome');
    }
    public function geefoverzicht()
    {
        $carbon = new Carbon();

        $day = $carbon->format('d');
        $month = $carbon->format('M');
        return view('overzicht')->with(['daynr'=>$day, 'monthstr'=>$month]);
    }
    public function geefwelcome()
    {
        return view('welcome');
    }
}
