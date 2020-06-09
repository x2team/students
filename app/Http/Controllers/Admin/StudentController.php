<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Requests\Admin;


class StudentController extends Controller
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        
        $this->uploadPath = public_path(config('cms.image.directory'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = \App::getLocale();
        dd($locale);
        $students = Student::latestFirst()->get();
        
        return view('admin.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Student $student)
    {
        return view('admin.student.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Admin\StudentStoreRequest $request)
    {
        
        $data = $this->handleRequest($request);

        Student::create($data);

        return redirect()->route('admin.student.index')->with(['message-success' => 'New Student created successlly']);
    }

    private function handleRequest($request)
    {   
        $data = $request->all();

        /**
         * Handle Image
         */
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();

            $fileName = Str::slug(str_replace(".{$extension}", "", $fileName));
            $fileName = $fileName . "_" . uniqid() . ".{$extension}";
            
            // insert watermark
            // $watermark = Image::make($this->watermarkPath."/watermark.png");
            // $interventionImage = Image::make($image);
            // $interventionImage->insert($watermark, 'bottom-right', 5, 5)->save();//->save($destination . "/" . $fileName);
            
            $directory = date("Y") . '/' . date("m");
            $data['image'] = $image->storeAs('presents/' . $directory, $fileName ,'public', 0775, true);
        }

        /**
         * Handle Description
         */
        // if($request->description)
        // {
        //     $data['description'] = substr($request->description, 0, 255);
        // }
        
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student     = Student::findOrFail($id);

        $oldImage               = $student->image;
        $data                   = $this->handleRequest($request);

        $student->update($data);

        if($oldImage !== $student->image){
            $this->removeImage($oldImage);
        }
        return redirect()->route('admin.student.index')->with('message-success', 'Your student was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $this->removeImage($student->image);
        
        $student->delete();

        return redirect()->route('admin.student.index')->with(['message-success' => 'Student was deleted successfully']);
    }

    private function removeImage($oldIcon)
    {
        if( ! empty($oldIcon)){
            $iconFilePath = $this->uploadPath . '/' . $oldIcon;
            if( file_exists($iconFilePath)) unlink($iconFilePath);
        }
    }
    public function destroyMulti($arr_id)
    {
        dd($arr_id);
    }
}
