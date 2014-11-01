<?php

class CategoryController extends \BaseController {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return View::make('system.Category.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function lists(){

        return View::make('system.Category.list');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('system.Category.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {


      $Category =   RoomCategory::create(array(
            'category_name' => Input::get("category_name"),
            'size' => Input::get("size"),
            'bedrooms' => Input::get("beds"),
            'location' => Input::get("location"),
            'price' => Input::get("price")
        ));



        foreach(Input::get("facilities") as $value){
            DB::table('category_facilities')->insert(
                array('category_id' => $Category->id, 'facility_id' =>$value)
            );
        }
        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$Category->id,
            'model'=>"Category",
            'action'=>"create",
        ));

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $list="<ol>";
        $id_array = explode("_",$id);
        foreach($id_array as $single_id){
            if($single_id == ""){

            }else{
                $category = RoomCategory::find($single_id);
                $list.="<li>".$category['category_name']."</li>";
            }
        }
        $list.="</ol>";
        return $list;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = RoomCategory::find($id);
        return View::make('system.Category.edit',compact("category"));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update()
    {

        $Category =   RoomCategory::find(Input::get("id"));
        $Category->category_name = Input::get("category_name");
        $Category->size = Input::get("size");
        $Category->bedrooms = Input::get("bedrooms");
        $Category->location = Input::get("location");
        $Category->price = Input::get("price");
        $Category->save();
        $Category->push();



        foreach(Input::get("facilities") as $value){
            DB::table('category_facilities')
                ->where('category_id',Input::get("id"))
                ->update(array('facility_id' => $value));
        }

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$Category->id,
            'model'=>"Category",
            'action'=>"update",
        ));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = RoomCategory::find($id);
        RoomCategory::destroy($id);

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$category->id,
            'model'=>"Category",
            'action'=>"delete",
        ));
    }



}
