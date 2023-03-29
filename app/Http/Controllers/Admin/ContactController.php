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
                    $actionBtn = '<a href="' . route('admin.contact.show', [$data]) . '" class="edit btn btn-primary btn-sm">تعديل</a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-sm btn-danger">حذف</a>';
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
