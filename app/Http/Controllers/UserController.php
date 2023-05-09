<?php

namespace App\Http\Controllers;

use App\Exports\RolesExport;
use App\Exports\UsersExport;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('backend.user.index', compact('users'));
    }

    public function roleList()
    {
        $roles = Role::latest()->paginate(10);
        return view('backend.role.index', compact('roles'));
    }

    public function usersList(Role $role)
    {
        $users = $role->users;
        return view('backend.role.show', compact('users'));
    }

    // // For role pdf method
    // public function rolePdf()
    // {
    //     try {
    //         $roles = Role::all();
    //         $fileName = 'roles.pdf';
    //         $html = view('backend.role.pdf', compact ('roles'))->render();
    //         $mpdf = new \Mpdf\Mpdf();
    //         $mpdf->WriteHTML($html);
    //         $mpdf->Output($fileName, 'I');

    //     } catch (\Throwable $th) {
    //         dd($th->getMessage());
    //     }
    // }

    // // For role Excel export method
    // public function roleExport() 
    // {
    //     return Excel::download(new RolesExport, 'roles.xlsx');
        
    // }


    //For User pdf 
    public function userPdf()
    {
        try {
            $users = User::all();
            $fileName = 'users.pdf';
            $html = view('backend.user.pdf', compact ('users'))->render();
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML($html);
            $mpdf->Output($fileName, 'I');

        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    // For user Excel export method
    public function userExport() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
        
    }
}
