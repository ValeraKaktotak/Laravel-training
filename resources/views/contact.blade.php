@extends('layouts/main')

@section('title-head') Contact page @endsection

@section('page-title')
    <h1>Contact Page</h1>
@endsection

@section('content')
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="mt-20">
            <label for="name">Enter your name</label>
            <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
        </div>

        <div class="mt-20">
            <label for="email">Enter your email</label>
            <input type="text" name="email" placeholder="Enter your email" id="email" class="form-control">
        </div>

        <div class="mt-20">
            <label for="phone">Enter your phone</label>
            <input type="tel" name="phone" placeholder="38 096 1234 567" id="phone" class="form-control">
        </div>

        <div class="mt-20">
            <label for="subject">Message subject</label>
            <input type="text" name="subject" placeholder="Enter your message subject" id="subject" class="form-control">
        </div>

        <div class="mt-20">
            <label for="message">Enter your message</label>
            <textarea name="message" placeholder="Enter your message" id="message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success mt-20">Сonfirm</button>
    </form>
@endsection
