@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <h1 class="mb-4">Contact Us</h1>

            <form>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="your@email.com">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Your message"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send</button>

            </form>

        </div>

    </div>

</div>

@endsection
