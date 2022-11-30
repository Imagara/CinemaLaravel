<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdminPanelController extends Controller
{
    public function filmcreate(Request $request) 
    {
        $data = $request->all();
        
        $filename = $data['picture']->getClientOriginalName();
        
        //Сохраняем оригинальную картинку
        $data['picture']->move(Storage::path('/public/media/films/').'origin/',$filename);
        //storage/app/public/media/films -here
         //storage/app/public/image/news/origin - news

        //Создаем миниатюру изображения и сохраняем ее
        $thumbnail = Image::make(Storage::path('/public/media/films/').'origin/'.$filename);
        $thumbnail->fit(250, 350);
        $thumbnail->save(Storage::path('/public/media/films/').'thumbnail/'.$filename);


        //Сохраняем новость в БД
        $data['picture'] = $filename;
        //dd($data);
        Movie::create($data);

        return redirect()->route('admin.films.index');
    }
}
