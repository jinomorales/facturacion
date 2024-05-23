@extends('system.layouts.plantilla')

@section('content')

<div class="container-fluid">

    <system-clients-index :delete-permission="{{ json_encode($delete_permission) }}" :disc-used="{{ json_encode($disc_used) }}" :i-used="{{ json_encode($i_used) }}" :storage-size="{{ json_encode($storage_size) }}" :version="{{ json_encode($version) }}"></system-clients-index>
</div>
    @endsection
