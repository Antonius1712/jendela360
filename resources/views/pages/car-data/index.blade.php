@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <button class="btn btn-success" data-type="Add" id="addCarBtn" data-toggle="modal" data-target="#myModal">Add Car</button>
    <table class="table table-bordered dataTable" id="carDataTable">
        <thead>
            <tr class="table-info">
                <th>Nama Mobil</th>
                <th>Harga Mobil</th>
                <th>Stock</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody id="carDataTbody">
            @forelse ($carDatas as $carData)
                <tr>
                    <td> {{ $carData->carName }} </td>
                    <td> {{ $carData->carPrice }} </td>
                    <td> {{ $carData->carStock }} </td>
                    <td>
                        <button class="btn btn-warning" data-carid="{{ $carData->id }}" data-type="Edit" id="editCarBtn" data-toggle="modal" data-target="#myModal">Edit</button>
                        <button class="btn btn-danger" data-carid="{{ $carData->id }}" data-type="delete" id="deleteCarBtn">Delete</button>
                    </td>
                </tr>    
            @empty
                <tr>
                    <td colspan="3">Data Not Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
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
                    <label for="carName">Car Name</label>
                    <input type="text" name="carName" id="carName" class="form-control" placeholder="Car Name">
                </div>

                <div class="form-group">
                    <label for="carPrice">Car Price</label>
                    <input type="text" name="carPrice" id="carPrice" class="form-control" placeholder="Car Price">
                </div>

                <div class="form-group">
                    <label for="carStock">Car Stock</label>
                    <input type="text" name="carStock" id="carStock" class="form-control" placeholder="Car Stock">
                </div>

                <input type="hidden" name="carId" id="carId">
            </div>
            <div class="modal-footer">
                <button id="saveCarBtn" type="button" class="btn btn-primary">Save</button>
                <button id="updateCarBtn" type="button" class="btn btn-primary" style="display:none;">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script>

    $('#carDataTable').DataTable();

    //ADD CAR DATA
    $('body').on('click', '#addCarBtn', function(){
        $('#saveCarBtn').show();
        $('#updateCarBtn').hide();
    });

    //SAVE CAR DATA
    $('body').on('click','#saveCarBtn',function(){
        let url = '{{ url('/car-data') }}';
        let carName = $('#carName').val();
        let carPrice = $('#carPrice').val();
        let carStock = $('#carStock').val();

        $.ajax({
            url:url,
            type:'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                carName:carName,
                carPrice:carPrice,
                carStock:carStock
            },
            success:function(data){
                location.reload();
            }
        })
    });


    //EDIT CAR DATA
    $('body').on('click','#editCarBtn',function(){
        let carId = $(this).data('carid');
        let url = '{{ url('/car-data') }}';

        $.ajax({
            url:`${url}/${carId}/edit`,
            type:'get',
            success:function(data){
                $('#carName').val(data.carName);
                $('#carPrice').val(data.carPrice);
                $('#carStock').val(data.carStock);
            }
        })

        $('#carId').val(carId);

        $('#saveCarBtn').hide();
        $('#updateCarBtn').show();

        $('#myModal').toggle();
    });

    
    //UPDATE CAR DATA
    $('body').on('click','#updateCarBtn', function(){
        let url = '{{ url('/car-data') }}';
        let carName = $('#carName').val();
        let carPrice = $('#carPrice').val();
        let carStock = $('#carStock').val();
        let carId = $('#carId').val();

        $.ajax({
            url:`${url}/${carId}`,
            type:'PUT',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                carName:carName,
                carPrice:carPrice,
                carStock:carStock
            },
            success:function(data){
                // console.log('UPDATE DATA', data);
                // return false;
                location.reload();
            }
        })
    });

    
    //DELETE CAR DATA
    $('body').on('click', '#deleteCarBtn', function(){
        let carId = $(this).data('carid');
        let url = '{{ url('/car-data') }}';

        $.ajax({
            url:`${url}/${carId}`,
            type:'delete',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                location.reload();
            }
        })
    });


</script>
@endsection