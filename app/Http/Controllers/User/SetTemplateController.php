<?php

namespace App\Http\Controllers\User;

use App\CardSection;
use App\Http\Controllers\Controller;
use App\NavigationTemplate;
use App\NavigationValue;
use App\SectionNavigation;
use App\UserTemplate;
use Illuminate\Http\Request;

class SetTemplateController extends Controller
{
    //
    public function setTemplate(){
        $config = UserTemplate::with('template', 'user', 'template.navigation')->where('user_id', auth()->user()->id)->first();

        return view('user.template.index', [
            'data' => $config
        ]);
    }

    public function indexNavigation($navigation_id){

        $getData = SectionNavigation::where('navigation_id', $navigation_id)->get();


        // dd($getData);
        return view('user.template.section', [
            'data' => $getData
        ]);
    }

    public function indexSection($navigation_id, $nav_value_id){
        $data = CardSection::where('nav_value_id', $nav_value_id)->where('user_id', auth()->user()->id)->get();

        // dd($data);
        return view('user.template.detailsection', [
            'data' => $data,
            'nav_value_id' => $nav_value_id,
        ]);
    }

    public function store(Request $request){
        
        // dd($request->all());
        $navigation = NavigationValue::create([
            'navigation_id' => $request->navigation_id,
            'nama_section' => $request->nama_tag,
            'value' => $request->value,
            'user_id' => auth()->user()->id
        ]);

        return back()->withSuccess('Success Menambahkan Section');
    }

    public function storeFile(Request $request){

        $file = $request->file('value');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('file'), $fileName);

        $navigation = NavigationValue::create([
            'navigation_id' => $request->navigation_id,
            'nama_section' => $request->nama_section ?? "Lorem Ipsum Dolor Sit Amett",
            'value' => $fileName,
            'user_id' => auth()->user()->id
        ]);

        return back()->withSuccess('Success Menambahkan Section');
    }

    public function storeCard(Request $request){
        // dd($request->all());

        $file = $request->file('path');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('file_card'), $fileName);

        $card = CardSection::create([
            'user_id' => auth()->user()->id,
            'nav_value_id' => $request->nav_value_id,
            'title' => $request->nama_title,
            'description' => $request->description,
            'file' => $fileName
        ]);

        return back()->withSuccess("Sukses Menambahkan Card");

    } 
}
