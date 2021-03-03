<style>
 table th td{
     border:1px solid #dee0e0;
     border-collapse:collapse;
     text-align:left;
     margin-left:16.2%;
     font-family:normal,sans-serif;
     font-size:small;
     background-color:white;
 }th
 {
     padding:8px 30px;
 }
 td{
     padding:8px 20px;
 }
</style>
<h1>list of family</h1>

<table border="1" >
<tr>
<th>id</th>
<th>Name</th>
<th>Father's Name</th>
<th>Mother's Name</th>
<th>Retation with karta of family</th>
<th>Gender</th>
<th>Date of birth</th>
<th>Occupation</th>
<th>Religion</td>
<th>Age of each member of family</t>
<th>Registration no</t>
<th>ration card no</th>
<th>Address of sub locality 1</th>
<th>Address of sub locality 2</th>
<th>Address of ward number</th>
<th>Address of locality</th>
<th>Address of select of sub District </th>
<th>Address of District</th>
<th>Address of state</th>
<t>Address of pin code</th>
<th>Address of country</th>

<th>Address of police Station</th>
<th>Address of Post Office</th>
<th>Electricity Connection</th>
<th>Cooking gas connection</th>
<th>Action</t>


</tr>
@foreach ($data as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->father_name}}</td>
<td>{{$item->Mother_name}}</td>
<td>{{$item->Relation_karta_family}}</td>
<td>{{$item->Gender}}</td>
<td>{{$item->Date_Birth}}</td>
<td>{{$item->Occupation}}</td>
<td>{{$item->Religion}}</td>
<td>{{$item->Age_each_member_family}}</td>
<td>{{$item->Registration_no}}</td>
<td>{{$item->ration_card_no}}</td>
<td>{{$item->Address_sub_locality_1}}</td>
<td>{{$item->Address_sub_locality_2}}</td>
<td>{{$item->Address_ward_number}}</td>
<td>{{$item->Address_location}}</td>
<td>{{$item->Address_select_sub_District}}</td>
<td>{{$item->Address_District}}</td>
<td>{{$item->Address_state}}</td>
<td>{{$item->Address_pin_code}}</td>
<td>{{$item->Address_country}}</td>
<td>{{$item->Address_police_Station}}</td>
<td>{{$item->Address_post_office}}</td>
<td>{{$item->Electricity_Connection}}</td>
<td>{{$item->Cooking_Gas_Connection}}</td>

<td>
<a href="delete/{{$item->id}}">Delete</a>
<a href="edit/{{$item->id}}">edit</a>
</td>
</tr>
@endforeach
</table>

