<?php

namespace ErenMustafaOzdal\LaravelUserModule\Http\Controllers;

use App\Http\Requests;
use App\User;

use ErenMustafaOzdal\LaravelModulesBase\Controllers\AdminBaseController;
// events
use ErenMustafaOzdal\LaravelUserModule\Events\User\StoreSuccess;
use ErenMustafaOzdal\LaravelUserModule\Events\User\StoreFail;
use ErenMustafaOzdal\LaravelUserModule\Events\User\UpdateSuccess;
use ErenMustafaOzdal\LaravelUserModule\Events\User\UpdateFail;
use ErenMustafaOzdal\LaravelUserModule\Events\User\DestroySuccess;
use ErenMustafaOzdal\LaravelUserModule\Events\User\DestroyFail;
use ErenMustafaOzdal\LaravelUserModule\Events\Auth\ActivateSuccess;
use ErenMustafaOzdal\LaravelUserModule\Events\Auth\ActivateRemove;
use ErenMustafaOzdal\LaravelUserModule\Events\Auth\ActivateFail;
// requests
use ErenMustafaOzdal\LaravelUserModule\Http\Requests\User\StoreRequest;
use ErenMustafaOzdal\LaravelUserModule\Http\Requests\User\UpdateRequest;
use ErenMustafaOzdal\LaravelUserModule\Http\Requests\User\PasswordRequest;

class UserController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(config('laravel-user-module.views.user.index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(config('laravel-user-module.views.user.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        return $this->storeModel(User::class, $request, [
            'success'           => StoreSuccess::class,
            'fail'              => StoreFail::class,
            'activationSuccess' => ActivateSuccess::class,
            'activationFail'    => ActivateFail::class
        ], config('laravel-user-module.user.uploads'), 'index');
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view(config('laravel-user-module.views.user.show'), compact('user'));
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
     * @param  UpdateRequest  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        $result = $this->updateModel($user,$request,false,'show');
        $request->has('is_active') ? $this->activationComplete($this->model) : $this->activationRemove($this->model);
        return $result;
    }

    /**
     * change user password
     *
     * @param  PasswordRequest  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function changePassword(PasswordRequest $request, User $user)
    {
        return $this->updateModel($user,$request,false,'show');
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
