<?php

class BannersController extends BaseController {

    /**
     * Banner Repository
     *
     * @var Banner
     */
    protected $banner;

    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $banners = $this->banner->all();

        return View::make('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Banner::$rules);

        if ($validation->passes())
        {
            $this->banner->create($input);

            return Redirect::route('banners.index');
        }

        return Redirect::route('banners.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $banner = $this->banner->findOrFail($id);

        return View::make('banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $banner = $this->banner->find($id);

        if (is_null($banner))
        {
            return Redirect::route('banners.index');
        }

        return View::make('banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Banner::$rules);

        if ($validation->passes())
        {
            $banner = $this->banner->find($id);
            $banner->update($input);

            return Redirect::route('banners.show', $id);
        }

        return Redirect::route('banners.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->banner->find($id)->delete();

        return Redirect::route('banners.index');
    }

}