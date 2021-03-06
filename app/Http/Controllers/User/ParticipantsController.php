<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class ParticipantsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return JSON Response
     */
    public function getParticipants()
    {
        //JSON Response for this.
        // $accounts = Account::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        // $total = $accounts->total() + (10 - ($accounts->total())%10);
        
        // $result['total'] = $total;
        // $items = array();

        // foreach ($accounts as $account) {
        //     array_push($items, $account); 
        // }
        // $result['rows'] = $items;

        // echo json_encode($result);
    }

    public function participantsTree()
    {
        $children = array(array('id'=>111, 'text'=>'Anything'));

        $partarray = array(array(
            'id' => '1',
            'text' => Auth::user()->name,
            'children' => $children
            ));


        echo json_encode($partarray);
    }
}
