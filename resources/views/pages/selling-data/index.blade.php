@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <button class="btn btn-success" data-type="Add" id="addCarBtn" data-toggle="modal" data-target="#myModal">Add Selling Data</button>
            <table class="table table-bordered" id="sellingDataTable">
                <thead>
                    <tr>
                        <td>Customer Name</td>
                        <td>Customer Email</td>
                        <td>Customer Phone</td>
                        <td>Purchased Car</td>
                        {{-- <td>Action</td> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($selling_data as $val)
                            <td> {{ $val->customerName }} </td>
                            <td> {{ $val->customerEmail }} </td>
                            <td> {{ $val->customerPhone }} </td>
                            <td> {{ $val->getCarData->carName }} </td>
                            {{-- <td>
                                <button data-sellingid="{{ $val->id }}" id="sellingDataEditBtn" class="btn btn-warning">Edit</button>
                                <button data-sellingid="{{ $val->id }}" id="sellingDataDeleteBtn" class="btn btn-danger">Delete</button>
                            </td> --}}
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4"> Data Not Found </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <div class="form-group">
                    <label for="customerName">Customer Name</label>
                    <input type="text" name="customerName" id="customerName" class="form-control" placeholder="Customer Name" required>
                </div>

                <div class="form-group">
                    <label for="customerEmail">Customer Email</label>
                    <input type="text" name="customerEmail" id="customerEmail" class="form-control" placeholder="Customer Email" required>
                </div>

                <div class="form-group">
                    <label for="customerPhone">Customer Phone</label>
                    <input type="text" name="customerPhone" id="customerPhone" class="form-control" placeholder="Customer Phone" required>
                </div>

                <div class="form-group">
                    <label for="purchasedCar">Purchased Car</label>
                    {{-- <input type="text" name="purchasedCar" id="purchasedCar" class="form-control" placeholder="Purchased Car"> --}}
                    <select name="purchasedCar" class="form-control" id="purchasedCar" required>
                        <option value="">Pilih</option>
                        @forelse ($carData as $val)
                            <option value="{{$val->id}}">{{ $val->carName }}</option>
                        @empty
                            
                        @endforelse
                    </select>
                </div>

                <input type="hidden" name="customerId" id="customerId">
            </div>
            <div class="modal-footer">
                <button id="saveSellingDataBtn" type="button" class="btn btn-primary">Save</button>
                <button id="updateSellingDataBtn" type="button" class="btn btn-primary" style="display:none;">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script>

    $('#sellingDataTable').DataTable();

    $('body').on('click','#saveSellingDataBtn',function(){
        let url = '{{ url('/selling-data') }}';
        let customerName = $('#customerName').val();
        let customerEmail = $('#customerEmail').val();
        let customerPhone = $('#customerPhone').val();
        let purchasedCar = $('#purchasedCar').val();

        $(this).attr('disabled','true');

        $.ajax({
            url:url,
            type:'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                customerName  : customerName ,
                customerEmail : customerEmail,
                customerPhone : customerPhone,
                purchasedCar  : purchasedCar 
            },
            success:function(data){
                // console.log('data',data);
                location.reload();
            }
        })

        $(this).attr('disabled','false');

        // $('#myModal').toggle();
    });


    //DELETE SELLING DATA
    // $('body').on('click','#sellingDataDeleteBtn', function(){
    //     let sellingId = $(this).data('sellingid');
    //     let url = '{{ url('/selling-data') }}';

    //     $.ajax({
    //         url:`${url}/${sellingId}`,
    //         type:'delete',
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         success:function(data){
    //             // console.log('DELETE ',data);
    //             // return false;
    //             location.reload();
    //         }
    //     })
    // });
</script>
@endsection