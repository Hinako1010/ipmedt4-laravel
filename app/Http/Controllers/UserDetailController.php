<?php

namespace App\Http\Controllers;

//require '\vendor\autoload.php';

use Illuminate\Http\Request;
use App\UserDetail;
use PDF;
use CpChart\Data;
use CpChart\Image;
use CpChart\Cache;
use CpChart\Draw;

class UserDetailController extends Controller
{

    public function store(Request $request){

      $user = new UserDetail([
        'voornaam' => $request->get('voornaam'),
      ]);

      $user->save();
      return redirect('/index');
    }
    public function index(){

      $users = UserDetail::all();

      return view('index', compact('users'));
    }

    public function downloadPDF($id){
      $user = UserDetail::find($id);
      $idee = 1;
      $cache = null;
      $grafiek = self::maakGrafiek($id);
      $grafiek->Render("image.png");
      //$cache->writeToCache($idee,$grafiek);
      $user->$grafiek;
      $pdf = PDF::loadView('pdf', compact('user', 'grafiek'));

      return $pdf->stream('symptomen_overzicht.pdf');

//      return view('bugfix', compact('user'));
    }

    public function maakGrafiek($id){

        /* Build a dataset */
        $data = new Data();
        $data->addPoints([-4, VOID, VOID, 12, 8, 3], "Probe 1");
        $data->addPoints([3, 12, 15, 8, 5, -5], "Probe 2");
        $data->addPoints([2, 7, 5, 18, 19, 22], "Probe 3");
        $data->setSerieTicks("Probe 2", 4);
        $data->setSerieWeight("Probe 3", 2);
        $data->setAxisName(0, "Temperatures");
        $data->addPoints(["Jan", "Feb", "Mar", "Apr", "May", "Jun"], "Labels");
        $data->setSerieDescription("Labels", "Months");
        $data->setAbscissa("Labels");

        /* Create the 1st chart */
        $image = new Image(700, 230, $data);
        $image->setGraphArea(60, 60, 450, 190);
        $image->drawFilledRectangle(60, 60, 450, 190, [
            "R" => 255,
            "G" => 255,
            "B" => 255,
            "Surrounding" => -200,
            "Alpha" => 10
        ]);
        $image->drawScale(["DrawSubTicks" => true]);
        $image->setShadow(true, ["X" => 1, "Y" => 1, "R" => 0, "G" => 0, "B" => 0, "Alpha" => 10]);
        $image->drawLineChart(["DisplayValues" => true, "DisplayColor" => DISPLAY_AUTO]);
        $image->setShadow(false);

        /* Create the 2nd chart */
        $image->setGraphArea(500, 60, 670, 190);
        $image->drawFilledRectangle(500, 60, 670, 190, ["R" => 255, "G" => 255, "B" => 255, "Surrounding" => -200, "Alpha" => 10]);
        $image->drawScale(["Pos" => SCALE_POS_TOPBOTTOM, "DrawSubTicks" => true]);
        $image->setShadow(true, ["X" => -1, "Y" => 1, "R" => 0, "G" => 0, "B" => 0, "Alpha" => 10]);
        $image->drawLineChart();
        $image->setShadow(false);

        /* Write the legend */
        $image->drawLegend(510, 205, ["Style" => LEGEND_NOBORDER, "Mode" => LEGEND_HORIZONTAL]);
        //$image->autoOutput("example.drawLineChart.png");
        return $image;
    }
}
