@extends('admin.admin_main')
@section('content')
    <div class="container">
        <div class="m-auto">
            <div class="bg-light mt-5 rounded shadow-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">{{ $profile_id->id }}</td>
                            <td>{{ $profile_id->name }}</td>
                            <td>{{ $profile_id->email }}</td>

                            <td id="old_password">{{ $profile_id->password }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#view_button").mouseover(function() {

            })
        })
    </script>
@endsection
