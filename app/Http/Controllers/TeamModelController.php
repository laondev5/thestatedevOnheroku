<?php

namespace App\Http\Controllers;

use App\Models\TeamModel;
use Illuminate\Http\Request;

class TeamModelController extends Controller
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
        return view('admin.team', [
        'teams' => TeamModel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = TeamModel::all();

        // dd($data->all());

    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|unique:team_models|max:255',
    //         'p_number' => 'required|unique:team_models|regex:/(0)[0-9]{9}/',
    //         'title' => 'require',
    //         // 'image' => ['required', 'mines:jpg,png,jpeg', 'max:5048'],
    //         'description' => 'required',
    //    ]);

        $data = $request->hasFile('image');

        if($data){
            $newData =$request->file('image');
            $image_path = $newData->store('imgage_store');
            
            TeamModel::create([
                'name' => $request->name,
                'email' => $request->email,
                'p_number' => $request->p_number,
                'title' => $request->title,
                'image_path' => $request->$image_path,
                'description' => $request->description
                
            ]);
    
        }

        
        return redirect(route('admin'));
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

    private function storeImage($request){
        $newImageName = uniqid() . '-'. $request->title .'.' . 
        $request->image->extension();
        return $request->image->move(public_path('images_path'), $newImageName);
    }
}
