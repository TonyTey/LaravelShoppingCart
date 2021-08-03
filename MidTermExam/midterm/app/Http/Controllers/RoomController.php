<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Room;
use Session;

class RoomController extends Controller
{
    public function store() {
        $r=request();

        $addRoom=Room::create([
            'roomNo'=>$r->roomNo,
            'floor'=>$r->floor,
            'type'=>$r->type,
            'price'=>$r->price,
            'available'=>$r->available,

        ]);
        Session::flash('success', "Room added!");
        Return redirect()->route('viewRoom');
    }

    public function view() {
        $room=Room::all();  //apply SQL select * from products

        Return view('showRoom')->with('rooms', $room);
    }

    public function viewAll() {
        $room=Room::all();  //apply SQL select * from products

        Return view('rooms')->with('rooms', $room);
    }

    public function searchRoom() {
        $r=request();
        $keyword=$r->keyword;
        $room=DB::table('rooms')
        ->where('rooms.roomNo', 'like', '%'.$keyword.'%')
        ->orwhere('rooms.floor', 'like', '%'.$keyword.'%') //select * from products where name like '%keyword%'
        ->orwhere('rooms.type', 'like', '%'.$keyword.'%') //select * from products where name like '%keyword%'
        ->orwhere('rooms.price', 'like', '%'.$keyword.'%') //select * from products where name like '%keyword%'
        ->orwhere('rooms.available', 'like', '%'.$keyword.'%') //select * from products where name like '%keyword%'
        ->get();

        Return view('rooms')->with('rooms', $room);
    }

    public function edit($id) {

        //select * from products where id='$id'
        $rooms=Room::all()->where('id', $id);

        Return view('editRoom')->with('rooms', $rooms);
    }

    public function update() {
        $r=request();
        $rooms=Room::find($r->id); //retrieve the record based on id

        $rooms->roomNo=$r->roomNo;
        $rooms->floor=$r->floor;
        $rooms->type=$r->type;
        $rooms->price=$r->price;
        $rooms->available=$r->available;
        $rooms->save();
        Session::flash('success', "Room updated successful");

        Return redirect()->route('viewRoom');
    }
}
