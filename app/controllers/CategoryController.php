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




      $newCategory =   RoomCategory::create(array(
            'category_name' => Input::get("category_name"),
            'size' => Input::get("size"),
            'bedrooms' => Input::get("beds"),
            'location' => Input::get("location"),
            'price' => Input::get("price")
        ));



        foreach(Input::get("facilities") as $value){
            DB::table('category_facilities')->insert(
                array('category_id' => $newCategory->id, 'facility_id' =>$value)
            );
        }


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }



}
