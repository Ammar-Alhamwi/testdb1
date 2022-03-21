<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table;
use App\order;
use App\order_datail;
use App\item;


class ordercontroller extends Controller
{
    public function update($request , $id){
        $table=table::all()->where('id',$id)->first();
        $table->update([
            'status'=>'in_use'
        ]);


    }
    public function createOrder(Request $request){
        $sum=order_datail::all()->where('itime_id',$request->item_id)->sum($request->sell_price)->get();
        $sum1=order::all()->sum($request->total_after_taxes)->get();
        $sum2=$sum+$sum1;
        $table=order::all()->where('table_id',$request->table_id);
        $cret= order::create([
            'total_after_taxes'=>$sum2,
            'consumption_taxs'=>$request->$sum*0.1,
            ' Rebuild_tax'=>$request->$sum*0.05,
            ' Locat_administration'=>$request->$sum*0.01,
            $request->all()


        ]);
        return  ['Data_One'=>$cret, 'Data_Two'=>$table];

    }
    public function createOrder_datails(Request $request){

        $sum=order_datail::all()->where('itime_id',$request->item_id)->sum($request->sell_price)->get();

        return  order_datail::create([
            'total_price'=>$sum,
            $request->all()



        ]);

    }
}
