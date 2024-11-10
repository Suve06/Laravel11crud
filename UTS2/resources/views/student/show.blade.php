<!-- resources/views/student/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail Student</h1>

    <p><strong>NIM:</strong> {{ $student->nim }}</p>
    <p><strong>Nama:</strong> {{ $student->nama }}</p>
    <p><strong>Kelas:</strong> {{ $student->kelas }}</p>
    <p><strong>Tempat Lahir:</strong> {{ $student->tempat_lahir }}</p>
    <p><strong>Tanggal Lahir:</strong> {{ $student->tanggal_lahir }}</p>

    <a href="{{ route('student.index') }}">Back to List</a>
@endsection
