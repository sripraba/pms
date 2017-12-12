<?php

namespace App\Http\Controllers;

use App\Hosting;
use Illuminate\Http\Request;

class HostingController extends Controller
{

    protected $fillable = ['domain_url', 'hosted_on', 'contact_person', 'contact_number'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostings = new Hosting();
        $data['pageHeader'] = 'Hostings';
        $data['route_path'] = 'hostings.create';
        $data['listHeader'] = ['Domain Url'=>'domain_url', 'Hosted On'=> 'hosted_on', 'Contact Person' => 'contact_person', 'Contact Number' => 'contact_number'];
        $data['listBody'] = $hostings->getList();
        return view('listView', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['route_path'] = 'hostings.create';
        return view('forms.create_record', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function show(Hosting $hosting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function edit(Hosting $hosting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hosting $hosting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hosting $hosting)
    {
        //
    }
}
