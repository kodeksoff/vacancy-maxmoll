<?php

namespace App\Http\Controllers;

use App\Events\StoredResume;
use App\Http\Requests\StoreResumeRequest;
use App\Mail\ResumeStored;
use App\Models\Respond;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ResumeController extends Controller
{
    public function store(StoreResumeRequest $request)
    {
        $data = Respond::create($request->toArray());

        StoredResume::dispatch($data);

        return response()->json($data);
    }
}
