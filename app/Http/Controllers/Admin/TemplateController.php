<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NavigationTemplate;
use App\SectionNavigation;
use App\Template;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TemplateController extends Controller
{
    //
    public function index(){
        $data = Template::get();
        return view('admin.template.index', [
            'data' => $data
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_template' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
            'diskon' => 'required|numeric',
        ]);
        if($validator->fails()){
            dd($validator->errors()->first());
            return redirect()->back()->withErrors($validator->errors()->first());
        }

        $thumbnail = $request->file('thumbnail');
        $thumbnail_name = time().'_'.$thumbnail->getClientOriginalName();
        $thumbnail->move(public_path('thumbnail'), $thumbnail_name);


        Template::create([
            'nama_template' => $request->nama_template,
            'slug' => \Str::slug($request->nama_template),
            'harga' => $request->harga,
            'diskon' => $request->diskon,
            'thumbnail' => $thumbnail_name,
        ]);

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function navigation($template_id){
        $data = Template::find($template_id);

        $navigation = NavigationTemplate::where('template_id', $template_id)->get();

        // dd($navigation);
        return view('admin.template.navigation', [
            'data' => $data,
            'navigation' => $navigation
        ]);
    }

    public function storeNavigation(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_navigation' => 'required',
            'html_file' => 'required',
        ]);
        if($validator->fails()){
            dd($validator->errors()->first());
            return redirect()->back()->withErrors($validator->errors()->first());
        }

        // dd($request->file('html_file'));
        $file_html = $request->file('html_file');
        $file_html_name = time().'_'.$file_html->getClientOriginalName();
        $file_html->move(resource_path('views/asset/'), $file_html_name);


        NavigationTemplate::create([
            'template_id' => $request->template_id,
            'nama_navigation' => $request->nama_navigation,
            'slug' => \Str::slug($request->nama_navigation),
            'file_html' => $file_html_name,
        ]);

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function section($template_id, $navigation_id){
    $data = NavigationTemplate::find($navigation_id);

    $section = SectionNavigation::where('navigation_id', $navigation_id)->get();
        return view('admin.template.section', [
            'data' => $data,
            'section' => $section
        ]);
    }

    public function storeSection(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_tag' => 'required',
            'type' => 'required',
            'value' => 'required',
        ]);
        if($validator->fails()){
            dd($validator->errors()->first());
            return redirect()->back()->withErrors($validator->errors()->first());
        }

        if($request->type == 'file'){
            $file = $request->file('value');
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('file'), $file_name);
        }

        SectionNavigation::create([
            'navigation_id' => $request->navigation_id,
            'nama_section' => $request->nama_tag,
            'type' => $request->type,
            'value' => $request->type == 'file' ? $file_name : $request->value,
        ]);

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }
}
