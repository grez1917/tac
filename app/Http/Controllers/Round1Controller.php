<?php

namespace App\Http\Controllers;

use View;
use Request;
use Input;
use Hash;
use Auth;
use App\Models\Peserta;
use App\Models\Soal;


class Round1Controller extends Controller
{

    public function merah()
    {
        if(Request::isMethod('get'))
        {
            $this->data = array();
            $this->data['merah'] = Peserta::where('name', '=', 'Tim Merah')->get();
            $this->data['biru'] = Peserta::where('name', '=', 'Tim Biru')->get();
            $this->data['hijau'] = Peserta::where('name', '=', 'Tim Hijau')->get();
            $this->data['kuning'] = Peserta::where('name', '=', 'Tim Kuning')->get();
            $this->data['abuabu'] = Peserta::where('name', '=', 'Tim Abu-abu')->get();        

            //dd($this->data);

            return view('pages.round1.merah', $this->data);            
        }
        elseif (Request::isMethod('post')) 
        {

            $contact = Peserta::find(1);
            $contact->update(Input::all());

            return redirect('round1/merah');
        }

    }

    public function biru()
    {
         if(Request::isMethod('get'))
        {
            $this->data = array();
            $this->data['merah'] = Peserta::where('name', '=', 'Tim Merah')->get();
            $this->data['biru'] = Peserta::where('name', '=', 'Tim Biru')->get();
            $this->data['hijau'] = Peserta::where('name', '=', 'Tim Hijau')->get();
            $this->data['kuning'] = Peserta::where('name', '=', 'Tim Kuning')->get();
            $this->data['abuabu'] = Peserta::where('name', '=', 'Tim Abu-abu')->get();        

            //dd($this->data);

            return view('pages.round1.biru', $this->data);            
        }
        elseif (Request::isMethod('post')) 
        {

            $contact = Peserta::find(2);
            $contact->update(Input::all());

            return redirect('round1/biru');
        }
    }

    public function hijau()
    {
         if(Request::isMethod('get'))
        {
            $this->data = array();
            $this->data['merah'] = Peserta::where('name', '=', 'Tim Merah')->get();
            $this->data['biru'] = Peserta::where('name', '=', 'Tim Biru')->get();
            $this->data['hijau'] = Peserta::where('name', '=', 'Tim Hijau')->get();
            $this->data['kuning'] = Peserta::where('name', '=', 'Tim Kuning')->get();
            $this->data['abuabu'] = Peserta::where('name', '=', 'Tim Abu-abu')->get();        

            //dd($this->data);

            return view('pages.round1.hijau', $this->data);            
        }
        elseif (Request::isMethod('post')) 
        {

            $contact = Peserta::find(3);
            $contact->update(Input::all());

            return redirect('round1/hijau');
        }
    }

    public function kuning()
    {
         if(Request::isMethod('get'))
        {
            $this->data = array();
            $this->data['merah'] = Peserta::where('name', '=', 'Tim Merah')->get();
            $this->data['biru'] = Peserta::where('name', '=', 'Tim Biru')->get();
            $this->data['hijau'] = Peserta::where('name', '=', 'Tim Hijau')->get();
            $this->data['kuning'] = Peserta::where('name', '=', 'Tim Kuning')->get();
            $this->data['abuabu'] = Peserta::where('name', '=', 'Tim Abu-abu')->get();        

            //dd($this->data);

            return view('pages.round1.kuning', $this->data);            
        }
        elseif (Request::isMethod('post')) 
        {

            $contact = Peserta::find(4);
            $contact->update(Input::all());

            return redirect('round1/kuning');
        }
    }

    public function abuabu()
    {
         if(Request::isMethod('get'))
        {
            $this->data = array();
            $this->data['merah'] = Peserta::where('name', '=', 'Tim Merah')->get();
            $this->data['biru'] = Peserta::where('name', '=', 'Tim Biru')->get();
            $this->data['hijau'] = Peserta::where('name', '=', 'Tim Hijau')->get();
            $this->data['kuning'] = Peserta::where('name', '=', 'Tim Kuning')->get();
            $this->data['abuabu'] = Peserta::where('name', '=', 'Tim Abu-abu')->get();        

            //dd($this->data);

            return view('pages.round1.abuabu', $this->data);            
        }
        elseif (Request::isMethod('post')) 
        {

            $contact = Peserta::find(5);
            $contact->update(Input::all());

            return redirect('round1/abuabu');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
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
