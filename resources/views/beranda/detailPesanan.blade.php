@extends('layout-home')
@section('content')
    <div class="container py-4">
        <h3>Detail Pesanan</h3>
        <div class="row">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="user_id" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="user_id" name="user_id">
                </div>
                <div class="mb-3">
                    <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan</label>
                    <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan">
                </div>
                <div class="mb-3">
                    <label for="status_pemesanan" class="form-label">Status Pemesanan</label>
                    <select class="form-control" id="status_pemesanan" name="status_pemesanan">
                        <option value="Pending">Pending</option>
                        <option value="Diproses">Diproses</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="total_pemesanan" class="form-label">Total Pemesanan</label>
                    <input type="number" class="form-control" id="total_pemesanan" name="total_pemesanan">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
