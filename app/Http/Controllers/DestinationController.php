<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestinationPacketRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Http\Traits\InteractsWithBanner;
use App\Models\Destination;
use App\Models\Packet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    use InteractsWithBanner;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.destination.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\UpdateDestinationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateDestinationRequest $request){
        $validated = $request->validated();
        $destination = new Destination();
        $destination->forceFill([
            'name' => $validated['name'],
            'description' => $validated['description'],
        ])->save();

        if ($request->photo != '') {
            $destination->updatePhoto($validated['photo']);
        }
        return redirect()->route('admin.destination.index')->with('action-message','saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination){
        return view('destination.show', compact('destination'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination){
        return view('admin.destination.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDestinationRequest $request, Destination $destination){
        $validated = $request->validated();
        $destination->forceFill([
            'name' => $validated['name'],
            'description' => $validated['description'],
        ])->save();

        if ($request->photo != '') {
            $destination->updatePhoto($validated['photo']);
        }
        return redirect()->back()->with('action-message','saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination){
        Storage::disk('public')->delete($destination->photo_url);
        $destination->packets()->delete();
        $destination->delete();
        return redirect()->back()->with('action-message','saved');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function packetIndex(Destination $destination){
        return view('admin.destination.packet.index', compact('destination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function packetCreate(Destination $destination){
        return view('admin.destination.packet.create',compact('destination'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\UpdateDestinationRequest  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function packetStore(DestinationPacketRequest $request, Destination $destination){
        $validated = $request->validated();
        $packet = new Packet();
        $packet->forceFill($validated)->save();
        return redirect()->back()->with('action-message','saved');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @param  \App\Models\Packet $packet
     * @return \Illuminate\Http\Response
     */
    public function packetEdit(Destination $destination, Packet $packet){
        return view('admin.destination.packet.edit', compact('destination','packet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function packetUpdate(DestinationPacketRequest $request, Packet $packet){
        $validated = $request->validated();
        $packet->forceFill($validated)->save();
        return redirect()->back()->with('action-message','saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function packetShow(Destination $destination, Packet $packet){
        return view('admin.destination.packet.show', compact('destination','packet'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function packetDestroy(Packet $packet){
        $packet->delete();
        return redirect()->back()->with('action-message','saved');
    }


}
