<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specification;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSpecificationsDetails(Request $request)
    {
        $val = Validator::make($request->all(), [
            'number_of_seats' => 'required',
            'type_of_seats' => 'required',
            'number_of_doors' => 'required',
            'gearbox_type' => 'required',
            'sunroof' => 'required',
            'engine_capacity' => 'required',

         ]);

         if($val->fails()){
             return response($val->messages(), 400);
         }
        
         Specification::create([
             'number_of_seats' => $request->number_of_seats,
             'type_of_seats' => $request->type_of_seats,
             'number_of_doors' => $request->number_of_doors,
             'gearbox_type' => $request->gearbox_type,
             'sunroof' => $request->sunroof,
             'engine_capacity' => $request->engine_capacity,
         ]);

         return response([
             'message' => 'Record Created Successfully',
         ]);

         

         
    }

    public function storeTypesDetails(Request $request)
    {
        $val = validate($request, [
            'type_name' => 'required',
         ]);

         if($val->fails()){
             return response($val->message(), 400);
         }
        
         $type = Type::create($request->all());

         return response([
             'message' => 'Car Types added Successfully',
         ]);

         

         
    }

    public function storeDetails(Request $request)
    {
        $val = validate($request, [
            'vehicle_id' => 'required',
            'identification_number' => 'required',
            'id_photo' => 'required',
            'passport_photo' => 'required',
            'plate_number' => 'required',
            'insurance_number' => 'required',
            'insurance_certificate' => 'required',
            'ntsa_report' => 'required',
         ]);

         if($val->fails()){
             return response($val->message(), 400);
         }
        
         $details = Detail::create($request->all());

         return response([
             'message' => 'Record Created Successfully',
         ]);

         

         
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
