@extends('layouts.app')

@section('content')
<div class="profile-container">
    <h2 class="title">Edit Profile</h2>

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-grid">
            <!-- KIRI -->
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="full_name" placeholder="Enter full name">
            </div>

            <div class="form-group">
                <label>Nick Name</label>
                <input type="text" name="nick_name" placeholder="Enter nick name">
            </div>

            <!-- KANAN -->
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" placeholder="Enter phone number">
            </div>

            <!-- KIRI -->
            <div class="form-group">
                <label>Country</label>
                <input type="text" name="country" placeholder="Enter country">
            </div>

            <!-- KANAN -->
            <div class="form-group">
                <label>Gender</label>
                <select name="gender">
                    <option value="">Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>

        <!-- ADDRESS (FULL WIDTH) -->
        <div class="form-group full-width">
            <label>Address</label>
            <textarea name="address" rows="4" placeholder="Enter address"></textarea>
        </div>

        <!-- BUTTON -->
        <button type="submit" class="btn-submit">Save Changes</button>
    </form>
</div>
@endsection
