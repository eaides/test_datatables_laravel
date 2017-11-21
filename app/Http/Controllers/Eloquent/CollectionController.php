<?php

namespace App\Http\Controllers\Eloquent;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CollectionController extends Controller
{
    /**
     * Display index page.
     *
     * @return \BladeView|bool|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('eloquent.collection');
    }

    /**
     * Process dataTable ajax response.
     *
     * @param \Yajra\Datatables\Datatables $datatables
     * @return \Illuminate\Http\JsonResponse
     */
    public function data(Datatables $datatables)
    {
        // $query = User::all();

        return Datatables::of(User::query())
            ->addColumn('action', 'eloquent.tables.users-action')
//            ->addColumn('action', function ($user) {
//                return
//                    '<a href="#" class="btn btn-xs btn-info dt_edit">' .
////                        '<span class="glyphicon glyphicon-pencil"></span>'.
//                        '<i class="fa fa-pencil"></i>'.
//                        '</a>'.
//                    '&nbsp' .
//                    '<a href="#" class="btn btn-xs btn-danger dt_remove">' .
////                        '<span class="glyphicon glyphicon-remove-sign"></span>' .
//                        '<i class="fa fa-times"></i>'.
//                        '</a>';
//            })
            ->removeColumn('password')
            ->setRowId('id')
            ->make(true);

//        return $datatables->collection($query)
//            ->addColumn('action', 'eloquent.tables.users-action')
//            ->make(true);
    }
}
