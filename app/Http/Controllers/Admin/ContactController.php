<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    public function index(Request $request)
    {

        $data = Contact::latest()->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('admin.contact.show', [$data]) . '" class="edit btn  btn-icon btn-light-primary me-2 mb-2 py-3"><i class="fa fa-eye"></i></a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon btn-light-danger me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['type','action'])->make(true);
        }
        return view('admin.contacts.index');

    }

    public function show(Contact $contact){

        return view("admin.contacts.show",compact("contact"));

    }

    public function destroy(Contact $contact){
        $contact->delete();

        return response()->json(['success' => true, 'message' => "تم الحذف بنجاح"]);

    }
}
