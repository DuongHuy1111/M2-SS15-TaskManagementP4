<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(){
        echo "Tạo form cho khách hàng";
    }

    public function store(){
        echo "Lưu trữ 1 khách hàng";
    }

    public function show($tasksId){
        return view('modules.customer.show');
    }

    public function edit($tasksId){
        return view('modules.customer.edit');
    }

    public function update($tasksId){
        return view('modules.customer.update');
    }

    public function delete($photo){
        return view('modules.customer.delete');
    }
}
