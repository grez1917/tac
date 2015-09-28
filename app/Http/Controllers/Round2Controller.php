<?php

namespace App\Http\Controllers;

use DB;
use View;
use Request;
use Input;
use Hash;
use Auth;
use App\Models\Soal;
use App\Models\Peserta;

class Round2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Request::isMethod('get')) 
            {
                $this->data = array();
                $this->data['merah'] = Peserta::where('name', '=', 'Tim Merah')->get();
                $this->data['biru'] = Peserta::where('name', '=', 'Tim Biru')->get();
                $this->data['hijau'] = Peserta::where('name', '=', 'Tim Hijau')->get();
                $this->data['kuning'] = Peserta::where('name', '=', 'Tim Kuning')->get();
                $this->data['abuabu'] = Peserta::where('name', '=', 'Tim Abu-abu')->get();        

                return view('pages.round2.index', $this->data);
            }
        elseif (Request::isMethod('post')) 
        {
            $input = Input::all();

            $id = $input['id'];

            $contact = Peserta::find($id);
            $contact->update(Input::all());

            return redirect('round2');            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function getSoal()
    {
        if (Request::isMethod('get')) {
            // $idSoal = Soal::orderByRaw("RAND()")->take(1)->get();
            // foreach ($idSoal as $item) {
            //     echo $item->id;
            // }
            //dd($test);
            if (Request::ajax()) {
                {
                    $idSoal = Soal::orderByRaw("RAND()")->take(1)->where('enabled', '!=', 0)->get();
                    foreach ($idSoal as $item) {
                        $id = $item->id;

                        $soalUpdate = Soal::where('id', $id)->update(array('enabled'=>0));
                    }
                    return json_encode($idSoal);

                }
            }
        }
        if (Request::isMethod('post')) {
            if (Request::ajax()) {
                {
                    $idSoal = Soal::orderByRaw("RAND()")->take(1)->where('enabled', '!=', 0)->get();

                    return json_encode($idSoal);
                }
            }
        }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
