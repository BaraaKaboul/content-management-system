<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interface\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class UserController extends Controller
{
    protected $user;

    public function __construct(UserRepositoryInterface $user)
    {
        return $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->user->index();
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return $this->user->createUser();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->user->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->user->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->user->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return $this->user->destroy($request);
    }
}
