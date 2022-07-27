<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('index');
    }

    public function view ()
    {
        // $students = DB::table('students')->orderBy('id', 'desc')->get();
        $students = DB::table('students')->orderBy('id', 'desc')->paginate(4);

        return view ('view',['students'=> $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $student = DB::table('students')->insert([
            'name'=> $req->name,
            'city' => $req->city,
            'marks' => $req->marks,
        ]);

     
        return redirect('view');

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
        $student = DB::table('students')->find($id);

        return view('edit',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        DB::table('students')->where('id', $id)->update([

            'name'=> $req->name,
            'city' => $req->city,
            'marks' => $req->marks,

        ]);
        return redirect('view');
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

    public function delete($id)
    {
        DB::table('students')->delete($id);
        return back();
    }

    public function detail($id)
    {
       $detail = DB::table('students')->find($id);
       return view ('detail', ['std' => $detail]);

    }
}
