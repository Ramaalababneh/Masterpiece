<section class="ftco-section ftco-cart">
    <form enctype="multipart/form-data" method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
		<div class="container rounded">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="300px" src="{{ asset(Auth::user()->image) }}">
                    </div>
                </div>
                <div class="col-lg-8 col-md-5">
                    <div class="p-3 py-5"><br><br>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label><input  name="name" type="text" class="form-control" placeholder="first name" value="{{ Auth::user()->name }}"></div>
                            <br>
                        </div>

                        <div class="row mt-3"> 
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input name="phone" type="tel" class="form-control" placeholder="enter phone number" value="{{ Auth::user()->mobileNum }}"></div>
                            <div class="col-md-12"><label class="labels">Email</label><input name="email" type="email" class="form-control" placeholder="enter email id" value="{{ Auth::user()->email }}"></div>
                        </div>
                        <br><br>
                        
                        <center>
                            <div>
                                {{-- <p class="col-lg-4 text-center"><a href="#" class="btn btn-warning py-3 px-4">Save Profile</a></p> --}}
                                <button class="col-lg-4 text-center btn btn-warning py-3 px-4" type="submit">Save Profile</button>
                                <br>
                                <br>
                                {{-- <input type="file" id="upload" class="account-file-input col-lg-4 text-center btn btn-warning py-3 px-4" name="image" accept="image/png, image/jpeg" /> --}}
                                <label for="upload" class="btn btn-warning py-3 px-4" style="position: relative; overflow: hidden; display: inline-block;">
                                <span>Select Image</span>
                                <input type="file" id="upload" class="account-file-input" name="image" accept="image/png, image/jpeg" style="position: absolute; font-size: 100px; opacity: 0; right: 0; top: 0;" />
                            </label>
                            </div> 
                        </center>

                        @if (session('status') === 'profile-updated')
                            <?php
                            Alert::success('Success', 'Your information is updated successfully!');
                            ?>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </form>
    </section>