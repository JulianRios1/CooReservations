<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use DataTables;
use Yajra\DataTables\Html\Builder;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Builder $builder)
    {
        if (request()->ajax()) {
            try {
                return DataTables::of(Roles::query())->toJson();
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        $html = $builder->columns([
            ['data' => 'id', 'name' => 'id', 'title' => 'ID'],
            ['data' => 'name', 'name' => 'name', 'title' => 'Nombre'],
            ['data' => 'slug', 'name' => 'slug', 'title' => 'slug'],
            ['data' => 'created_at', 'name' => 'created_at', 'title' => 'Fecha Creación'],
            ['data' => 'updated_at', 'name' => 'updated_at', 'title' => 'Fecha Actualización'],
        ]);
        return view('roles.index',compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
