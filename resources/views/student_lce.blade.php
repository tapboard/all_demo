 @extends('layout.layout')

@section('title')
    Student
@endsection

@section('content')
    <br>
    <br>
    <br>
    <br>
    @if(isset($data_lce))
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">StudentID</th>
                    <th scope="col">First</th>
                    <th scope="col">Middle</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data_lce["student"] }}</td>
                    <td>{{ $data_lce["fname"] }}</td>
                    <td>{{ $data_lce["mname"] }}</td>
                    <td>{{ $data_lce["lname"] }}</td>
                    <td>{{ $data_lce["email"] }}</td>
                </tr>
            </tbody>
        </table>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">StudentID</th>
                    <th scope="col">First</th>
                    <th scope="col">Middle</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student_lce as $student_lce)
                    <tr>
                        <td>{{ $student_lce["student"] }}</td>
                        <td>{{ $student_lce["fname"] }}</td>
                        <td>{{ $student_lce["mname"] }}</td>
                        <td>{{ $student_lce["lname"] }}</td>
                        <td>{{ $student_lce["email"] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
<br>
<br>
<br>
<br>
