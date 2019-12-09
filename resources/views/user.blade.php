@extends('layouts.app')

@section('content')

    <section class="my-5">

        <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>

        <div  class="container">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <div class="form-header blue accent-1">
                            <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
                        </div>
                        <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
                        <div class="md-form">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="form-name" name="name" class="form-control">
                            <label for="form-name">Your name</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" id="form-email" name="email" class="form-control">
                            <label for="form-email">Your email</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-tag prefix grey-text"></i>
                            <input type="text" id="form-Subject" name="subject" class="form-control">
                            <label for="form-Subject">Subject</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-pencil-alt prefix grey-text"></i>
                            <textarea id="form-text" class="form-control md-textarea" name="message" rows="3"></textarea>
                            <label for="form-text">Send message</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-pencil-alt prefix grey-text"></i>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <label for="exampleFormControlFile1">Example file input</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection