<?php

namespace App\Http\Controllers\Admins;

use App\AnswerAndQuestion;
use App\Http\Controllers\Controller;
use App\Http\Resources\AnswerAndQuestionDatatableResource;
use File;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AnswerAndQuestionsController extends Controller
{
    public function index()
    {
        return view('admins.answer-and-questions.index');
    }

    public function getTableData()
    {
        $answerAndQuestions = AnswerAndQuestion::notDelete()->orderBy('id', 'desc')->get();
        $answerAndQuestions = AnswerAndQuestionDatatableResource::collection($answerAndQuestions);
        return Datatables::of($answerAndQuestions)->rawColumns(['status', 'action'])->make();
    }

    public function create()
    {
        return view('admins.answer-and-questions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
        ]);

        $data = $request->all();
        $data['active'] = $request->active ? $request->active : 0;

        AnswerAndQuestion::create($data);

        toast('success', 'FAQ has been created.');
        return redirect()->back();
    }

    public function edit($id)
    {
        return view('answer-and-questions.edit')->with([
            'answerAndQuestion' => AnswerAndQuestion::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
        ]);

        $data = $request->all();
        $data['active'] = $request->active ? $request->active : 0;
        $answerAndQuestion = AnswerAndQuestion::findOrFail($id);
        $answerAndQuestion->update($data);
        toast('success', 'FAQ has been updated.');
        return redirect()->back();
    }

    public function show($id){}

    public function destroy($id)
    {
        $answerAndQuestion = AnswerAndQuestion::findOrFail($id);
        $answerAndQuestion->update(['delete' => 1]);

        toast('success', 'FAQ has been deleted.');
        return redirect()->back();
    }
}
