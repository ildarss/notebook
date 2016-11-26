<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
    public function index(){


    }

    public function create(){


    }


    public function store(Request $request){

        $inputDta= $request->all();
        Note::create($inputDta);

    }

    public function edit($id){

    }

    public function show($id){

    }

    public function update(Request $request,$id){



    }

    public function destroy($id){



    }

    public function createNote($notebookId){

       return view('notes.create')->with('id','$notebookId');

    }


}