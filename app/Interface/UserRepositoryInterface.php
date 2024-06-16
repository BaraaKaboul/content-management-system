<?php

namespace App\Interface;

interface UserRepositoryInterface
{
    public function index();

    public function destroy($request);

    public function edit($id);

    public function update($request);

    public function createUser();

    public function store($request);
}
