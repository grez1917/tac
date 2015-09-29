<?php

namespace App\Http\Controllers;

use View;
use Request;
use Input;
use Hash;
use Auth;
use App\Models\Peserta;
use App\Models\Soal;

class Round5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(Request::isMethod('get'))
        {

            $this->data = array();
            $this->data['merah'] = Peserta::where('name', '=', 'Tim Merah')->get();
            $this->data['biru'] = Peserta::where('name', '=', 'Tim Biru')->get();
            $this->data['hijau'] = Peserta::where('name', '=', 'Tim Hijau')->get();
            $this->data['kuning'] = Peserta::where('name', '=', 'Tim Kuning')->get();
            $this->data['abuabu'] = Peserta::where('name', '=', 'Tim Abu-abu')->get();

            return view('pages.round5.index', $this->data);
        }
        elseif (Request::isMethod('post')) 
        {

            $input = Input::all();
            $idMerah = $input['idMerah'];
            $scoreTotalMerah = $input['score1'];

            $idBiru = $input['idBiru'];
            $scoreTotalBiru = $input['score2'];

            $idHijau = $input['idHijau'];
            $scoreTotalHijau = $input['score3'];

            $idKuning = $input['idKuning'];
            $scoreTotalKuning = $input['score4'];    

            $idAbuabu = $input['idAbuabu'];
            $scoreTotalAbuabu = $input['score5'];

            // dd($input);                                
            $scoreMerah = Peserta::where('id', '=', $idMerah)->update(['score' => $scoreTotalMerah]);
            $scoreBiru = Peserta::where('id', '=', $idBiru)->update(['score' => $scoreTotalBiru]);
            $scoreHijau = Peserta::where('id', '=', $idHijau)->update(['score' => $scoreTotalHijau]);
            $scoreKuning = Peserta::where('id', '=', $idKuning)->update(['score' => $scoreTotalKuning]);
            $scoreAbuabu = Peserta::where('id', '=', $idAbuabu)->update(['score' => $scoreTotalAbuabu]);                                               
            // $contact->update(Input::all());

            return redirect('/');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function test()
    {
        return view('pages.round5.test');
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
