@extends('layout') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post"action="/devsubmit/{{$contact->id}}"  enctype = "multipart/form-data">
            <!-- @method('PATCH')  -->
            @csrf
            <div class="form-group">

                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $contact->Name}}" />
            </div>

            <div class="form-group">
                <label for="father name">father name</label>
                <input type="text" class="form-control" name="father name" value="{{ $contact->father_name}}" />
            </div>

            <div class="form-group">
                <label for="mother name">mother name</label>
                <input type="text" class="form-control" name="mother name" value="{{ $contact->Mother_name}}" />
            </div>
            <div class="form-group">
                <label for="Relation with karta of family">Relation with karta of family</label>
                <input type="text" class="form-control" name="Relation with karta of family" value="{{ $contact->Relation_karta_family}}" />
            </div>
            <div class="form-group">
                <label for="Gender">Gender</label>
                <input type="text" class="form-control" name="Gender" value="{{ $contact->Gender }}" />
            </div>
            
            <label for="Date of birth">Date of birth</label>
                <input type="text" class="form-control" name="Date of birth" value="{{ $contact->Date_Birth}}" />
            </div>

            <div class="form-group">
                <label for="Occupation">Occupation</label>
                <input type="text" class="form-control" name="Occupation" value="{{ $contact->Occupation}}" />
            </div>

            <div class="form-group">
                <label for="Religion">Religion</label>
                <input type="text" class="form-control" name="Religion" value="{{ $contact->Religion}}" />
            </div>
            <div class="form-group">
                <label for="Age of each member of family">Age of each member of family</label>
                <input type="text" class="form-control" name="Age of each member of family" value="{{ $contact->Age_each_member_family}}" />
            </div>
            <div class="form-group">
                <label for="Registrationm no">Registrationm no</label>
                <input type="text" class="form-control" name="Registrationm no" value="{{ $contact->Registration_no}}" />
            </div>
            <div class="form-group">

                <label for="ration card no">ration card no</label>
                <input type="text" class="form-control" name="ration card no" value="{{ $contact->ration_card_no}}" />
            </div>

            <div class="form-group"> 
                <label for="Address of sub locality 1">Address of sub locality 1</label>
                <input type="text" class="form-control" name="Address of sub locality 1" value="{{ $contact->Address_sub_locality_1}}" />
            </div>

            <div class="form-group">
                <label for="Address of sub locality 2">Address of sub locality 2</label>
                <input type="text" class="form-control" name="Address of sub locality 2" value="{{ $contact->Address_sub_locality_2}}" />
            </div>
            <div class="form-group">
                <label for="Address of ward number">Address of ward number</label>
                <input type="text" class="form-control" name="Address of ward number" value="{{ $contact->Address_ward_number}}" />
            </div>
            <div class="form-group">
                <label for="Address of locality">Address of locality</label>
                <input type="text" class="form-control" name="Address of locality" value="{{ $contact->Address_locality }}" />
            </div>
            
            <label for="Address of select of sub District">Address of select of sub District</label>
                <input type="text" class="form-control" name="Address of select of sub District" value="{{ $contact->Address_select_sub_District}}" />
            </div>

            <div class="form-group">
                <label for="Address of District">Address of District</label>
                <input type="text" class="form-control" name="Address of District" value="{{ $contact->Address_District}}" />
            </div>

            <div class="form-group">
                <label for="Address of state">Address of state</label>
                <input type="text" class="form-control" name="Address of state" value="{{ $contact->Address_state}}" />
            </div>
            <div class="form-group">
                <label for="Address of pin code">Address of pin code</label>
                <input type="text" class="form-control" name="Address of pin code" value="{{ $contact->Address_pin_code}}" />
            </div>
            <div class="form-group">
                <label for="Address of country">Address of country</label>
                <input type="text" class="form-control" name="Address of country" value="{{ $contact->Address_country}}" />
            </div>
            <div class="form-group">
                <label for="Address of police Station">Address of police Station</label>
                <input type="text" class="form-control" name="Address of police Station" value="{{ $contact->Address_police_Station}}" />
            </div>
            <div class="form-group">
                <label for="Address of post office">Address of country</label>
                <input type="text" class="form-control" name="Address of post office" value="{{ $contact->Address_post_office}}" />
            </div>
            <div class="form-group">
                <label for="Electricity connection">Electricity connection</label>
                <input type="text" class="form-control" name="Electricity connection" value="{{ $contact->Electricity_connection }}" />
            </div>
            <div class="form-group">
                <label for="Cooking gas connection">Cooking gas connection</label>
                <input type="text" class="form-control" name="Cooking gas connection" value="{{ $contact->Cooking_gas_connection }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection