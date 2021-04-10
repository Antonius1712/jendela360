@extends('layouts.app-email')
@section('content')
@php
    $data = \App\Models\selling_data::where('id',$selling_data->id)->with('getCarData')->first();
@endphp
<tr class="email-header">
    <td style="vertical-align: top;">            
        Customer Name : {{ $selling_data->customerName }}
    </td>
</tr>

<tr class="email-header">
    <td style="vertical-align: top;">            
        Customer Email : {{ $selling_data->customerEmail }}
    </td>
</tr>

<tr class="email-header">
    <td style="vertical-align: top;">            
        Customer Phone : {{ $selling_data->customerPhone }}
    </td>
</tr>

<tr class="email-header">
    <td style="vertical-align: top;">            
        Purchased Car : {{ $selling_data->getCarData->carName }}
    </td>
</tr>

<tr class="email-header">
    <td style="vertical-align: top;">            
        Car Price : {{ $selling_data->getCarData->carPrice }}
    </td>
</tr>

@endsection