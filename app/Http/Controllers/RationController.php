<?php

namespace App\Http\Controllers;
use PDF;

use App\ration_card;

use Illuminate\Http\Request;
class RationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('layout');
    }
   public function list()
    {
        
        return view('list');
    }
    function userregist(request $temp)
    {
        return $temp->input();
    }
    function userlogin(request $req)
    {
        return $req->input();
    }
    function Approv(Request $req)
    {
     return redirect('Approv');

    }
    function agree(Request $req)
    {
          $ration->agree();
          return redirect('agree');
      
    }
    //function dev(request $req)
    //{
     // $data= ration_card::find($id);
      //return view('dev',compact('ration_card'));
    //}
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
    public function store(Request $request)
    {

      //$this->validate($request,[
       // 'Name'=>'required',
        ///'father_name'=>'required',
       // 'Mother_name'=> 'required',
       // 'Relation_karta_family'=>'required',
       // 'Gender'=>'required',
       // 'Date_Birth'=> 'required',
       // 'Occupation'=>'required',
       /// 'Religion'=>'required',
       // 'Age_each_member_family'=> 'required',
       // 'Relation_karta_family'=>'required',
       // 'Registration_no'=>'required',
        //'ration_card_no'=> 'required',
        //'Address_sub_locality_1'=>'required',
        //'Address_sub_locality_2'=>'required',
        //'Address_ward_number'=> 'required',
        //'Address_location'=>'required',
       // 'Address_select_sub_District'=>'required',
        //'Address_District'=> 'required',
        //'Address_state'=>'required',
        //'Address_pin_code'=>'required',
       // 'Address_country'=> 'required',
        //'Address_police_Station'=>'required',
        //'Address_post_office'=>'required',
        //'Electricity_Connection'=> 'required',
        //'Cooking_Gas_Connection'=>'required',
      //]);
  
     

    
        //$data = new ration();
        //$data->Application=request('');
        $ration_cards=new ration_card;
        
        try{
          $ration_cards->Registration_no=time();
          $ration_cards->ration_card_no=time();
          $ration_cards->Address_Door_number=request('door_number');
          $ration_cards->Address_sub_locality_1=request('sub_number');
          $ration_cards->Address_sub_locality_2=request('sub_number');
          $ration_cards->Address_ward_number=request('ward_number');
          $ration_cards->Address_location=request('location');
          $ration_cards->Address_select_sub_District=request('select_sub_District');
          $ration_cards->Address_District=request('District');
          $ration_cards->Address_state=request('state');
          $ration_cards->Address_pin_code=request('pin_code');
          $ration_cards->Address_country=request('country');
          $ration_cards->Address_police_Station=request('police_Station');
          $ration_cards->Address_post_office=request('post_office');

          $ration_cards->Name=request('name');
          $ration_cards->father_name=request('fathername');
          $ration_cards->Mother_name=request('Mothername');
          $ration_cards->Date_Birth=request('dob');

          $ration_cards->Gender=request('gender');

          $ration_cards->Age_each_member_family=request('Age_each_member_family');
          $ration_cards->Relation_karta_family=request('Relation_karta_family');
          $ration_cards->Monthly_income_karta=request('monthly_income_karta');
          $ration_cards->Occupation=request('occupation');
          $ration_cards->Religion=request('Religion');

          $ration_cards->Electricity_Connection=request('Electricity_connection');
          $ration_cards->Cooking_Gas_Connection=request('cooking_gas_connection');
          //$ration_cards->Residing_period_above_Address=request('');
           /// $ration_cards->Remark_forwarder=request('');

           $imageName = time().'.'.$request->photo->extension();  
           $request->photo->move(public_path('images'), $imageName);
           $ration_cards->photo=$imageName;
           $imageName = time().'.'.$request->Electoral_id->extension();  
           $request->Electoral_id->move(public_path('images'), $imageName);
           $ration_cards->Electoral_id=$imageName;
           $imageName = time().'.'.$request->Work_Experience->extension();  
           $request->Work_Experience->move(public_path('images'), $imageName);
           $ration_cards->Work_Experience=$imageName;
           $imageName = time().'.'.$request->Education_Certificate->extension();  
           $request->Education_Certificate->move(public_path('images'), $imageName);
           $ration_cards->Education_Certificate=$imageName;
           $imageName = time().'.'.$request->Medical_Certificate->extension();  
           $request->Medical_Certificate->move(public_path('images'), $imageName);
           $ration_cards->Medical_Certificate=$imageName;
          $ration_cards->save();
          //$ration_cards->Registration_no= $ration_cards->id;
         // $ration_cards->save();
        }catch(Exception $e){
            error_log ("MY error: ".$e);
        }
       

       // return $ration_cards;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function show(ration $ration)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $contact=ration_card::find($id);
      return view('dev',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ration  $ration
     * @return \Illuminate\Http\Response
     */

    //public function AddData($id)
      //{
        //$data=ration_card::find($id);
       // $data->delete($item);
        //return redirect('Add');
        //{

        //}
      //}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function detail()
     {
         //dd("hh");
         $data=ration_card::all();
         //dd($data);
       return view('detail',compact('data')); 
     }
     function delete(ration_card $ration)
     {

         $ration->delete();
         return redirect('detail');
     }
     public function dev($id)
     {
      $data= ration_card::find($id);
      //  return($contact);
      return view('dev',compact('contact'));
     }
     
     function update(ration_card $contact)
    {
      $contact->update();
      return redirect('dev');
      // $contact=ration_card::find($id);
       // $contact=ration_card::find($id);
     //$contact->name=$request->get('name');
     //$contact->father_nam=$request->get('father_name');
      // $contact->Mother_name=$request->get('Mother_name');
     // $contact->Relation_karta_family=$request->get('Relation_karta_family');
      // $ration->gender=$request->get('father_name');
      // $ration->Date_Birh=$request->get('dob');
      //$ration->Occupation=$request->get('Occupation');
      //$ration->Gender=$request->get('gender');
      //$ration->Age_each_member_family=$request->get('Age_each_member_family');
    // $ration->Registration_no=$request->get('register_no');
     // $ration->ration_card_no=$request->get('ration_no');
      //$ration->Address_sub_locality_1->get('sub_number');
      //$ration->Address_sub_locality_2=$request->get('sub_number');
      // $ration->Address_ward_number=$request->get('ward_number');
      // $ration->Address_locality=$request->get('location');
      // $ration->Address_select__sub_District=$request->get('select_sub_District');
     // $ration->Address_District=$request->get('District');
     //$ration->Address_state=$request->get('state');
      // $ration->Address_pin_code=$request->get('pin_office');
      // $ration->Address_police_Station=$request->get('police_Station');
     //$ration->Address_post_office=$request->get('post_office');
      //$ration->Electricity_connection=$request->get('electricity_connection');
     //$ration->Cooking_gas_connection=$request->post('cooking_gas_connection');
     // $ration->save();


        
        // dd($item);
    //return view('Add',['item'=>$item]);
    //$contact->update();
    //return redirect('/dev');
  //}

    //public function showData($id){

      //1. fetch the row with the given id

      //2. return the row to view


    }
     public function ack($id)
    {
      $person = ration_card::find($id);
      $pdf = PDF::loadView('ack',compact('person'));
      return $pdf->stream();

    }
  
}
  
    